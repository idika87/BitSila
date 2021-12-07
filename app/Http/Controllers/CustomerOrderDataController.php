<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CustomerOrderDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $customers_id=session()->get('dataLoginCustomer')['id'];
       $orderc=Order::where('customer_id', $customers_id)->get();
       return view('customers/pages/data_pesanan_cus', compact('orderc') );
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
    public function show()
    {
        $id=session()->get('dataLoginCustomer')['id'];
        $orderc=Order::where('customer_id', $id)->where('status', '=','Menunggu Pelunasan')-> get();
        return view('/customers/pages/pelunasan_cus', compact('orderc'));
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
        $file = $request->file('orderc');
        if ($file) {
            $name = $request->file('orderc')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/bukti_pembayaran';
            $file->move($tujuan_upload,$name);
        }

        $orderc=Order::where('id',$id)->first();
        if ($file) {
            $orderc->evidence_payments=$name;
        }
        $orderc->save();

        return redirect('data_pesanan_cus');
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
