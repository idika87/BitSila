<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Mail\sendEmailAdmin;
use Alert;

class AdminDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_admin=Admin::all();
        return view('admins/pages/data_admin', compact('data_admin') );
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
        $random=rand();
        $data_admin= new Admin;
        $data_admin->name=$request->name;
        $data_admin->email=$request->email;

        $data_admin->admins_password=Hash::make("ADM".$random);
        $data_admin->admins_username="ADM".$random;

        $emailDataLogin = [
            'title' => 'Halo '.$request->name,
            'username' => "ADM".$random,
            'password' => "ADM".$random,
            'nama' => $request->name
        ];

        \Mail::to($request->email)->send(new sendEmailAdmin($emailDataLogin));


        $data_admin->save();
        
        // Alert::toast('Customer Service '.$request->customers_name.' ditambahkan', 'success');
        return redirect('data_admin');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_customers=Admin::where('id',$id);
        $data_customers->delete();
        return redirect('/data_admin');
    }
}
