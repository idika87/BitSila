<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment_method;
use App\Models\Order;

class CustomerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $customer_payment=Payment_method::all();
        $jumlah = Order::where('id', $id)->get()->first()->remaining_payments;
        return view('customers/pages/tampilan_rekening_cus', compact('customer_payment', 'jumlah') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bank(Request $request)
    {
        $customer_payment=Payment_method::all();
        $jumlah=$request->remaining_payments;
        $bank=$request->bank;
        $noRek = Payment_method::where('metode_nama', $request->bank)->get()->first()->urayan;
        // return $jumlah;
        $a_n=Payment_method::where('metode_nama', $request->bank)->get()->first()->name;

        return view('customers/pages/tampilan_rekening_cus', compact('customer_payment','jumlah', 'bank', 'noRek', 'a_n') );

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
        //
    }
}
