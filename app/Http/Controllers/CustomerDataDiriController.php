<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Alert;

class CustomerDataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers_id=session()->get('dataLoginCustomer')['id'];

        $data_diri=Customer::where('id', $customers_id)->get();
        return view('customers/pages/data_diri_cus', compact('data_diri') );

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
        //
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
        $file = $request->file('picture');
        if ($file) {
            $name = $request->file('picture')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/customer';
            $file->move($tujuan_upload,$name);
        }

        $data_diri=Customer::where('id',$id)->first();
        $data_diri->customers_name=$request->customers_name;
        $data_diri->customers_email=$request->customers_email;
        if ($file) {
            $data_diri->photos_ktp=$name;
        }
        $data_diri->save();
        return redirect('data_diri_cus');
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
