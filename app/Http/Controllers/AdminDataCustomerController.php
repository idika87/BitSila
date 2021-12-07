<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Mail\sendEmailCustomer;
use Alert;

class AdminDataCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_customers=Customer::all();
        return view('admins/pages/data_customers', compact('data_customers') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Berhasil Ditambah');
        $file = $request->file('photos_ktp');
        $name = $request->file('photos_ktp')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/customer';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $data_Customers= new Customer;
        $data_Customers->customers_name=$request->customers_name;
        $data_Customers->customers_email=$request->customers_email;
        $data_Customers->photos_ktp=$name;

        $data_Customers->customers_password=Hash::make("CUS".$random);
        $data_Customers->customers_username="CUS".$random;

        $emailDataLogin = [
            'title' => 'Halo '.$request->customers_name,
            'username' => "CUS".$random,
            'password' => "CUS".$random,
            'nama' => $request->customers_name
        ];

        \Mail::to($request->customers_email)->send(new sendEmailCustomer($emailDataLogin));

        $data_Customers->save();


        // Alert::toast('Customer Service '.$request->customers_name.' ditambahkan', 'success');
        return redirect('/data_customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Berhasil Diubah');
        $file = $request->file('photos_ktp');
        if ($file) {
            $name = $request->file('photos_ktp')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/customer';
            $file->move($tujuan_upload,$name);
        }

        $data_customers=Customer::where('id',$id)->first();
        $data_customers->customers_name=$request->customers_name;
        $data_customers->customers_email=$request->customers_email;
        if ($file) {
            $data_customers->photos_ktp=$name;
        }
        $data_customers->save();
        return redirect('data_customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
