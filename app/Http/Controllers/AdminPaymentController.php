<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment_method;
use Alert;

class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment=Payment_method::all();
        return view('admins/pages/payment_method', compact('payment') );
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
        $payment= new Payment_method;
        $payment->name=$request->name;
        $payment->metode_nama=$request->metode_nama;
        $payment->urayan=$request->urayan;
        $payment->save();
        
        return redirect('payment_method');
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
        $payment=Payment_method::where('id',$id)->first();
        $payment->name=$request->name;
        $payment->metode_nama=$request->metode_nama;
        $payment->urayan=$request->urayan;
        $payment->save();
        return redirect('payment_method');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment=Payment_method::where('id',$id);
        $payment->delete();
        return redirect('/payment_method');
    }
}
