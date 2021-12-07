<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use Alert;

class AdminOrderDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=Order::all();
        $customer=Customer::all();
        return view('admins/pages/order_data', compact('order','customer') );
    }

    public function filter(Request $request)
    {
        $tgl_awal=$request->tgl_awal;
        $tgl_akhir=$request->tgl_akhir;
        $order=Order::whereBetween('created_at', array($tgl_awal, $tgl_akhir))->get();
        $customer=Customer::all();
        return view('admins/pages/order_data', compact('order','customer') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bayar(Request $request, $id)
    {
        $order=Order::where('id',$id)->first();
        $order->remaining_payments=$order->remaining_payments-$request->bayar;
        $order->save();
        if ($order->remaining_payments == null) {
            $order->status = "Lunas";
            $order->save();
        }
        return redirect('/admin_order_data');
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
        $order= new Order;
        $order->customer_id=$request->customer_id;
        $customer=Customer::where('id', $request->customer_id)->get()->first();
        $order->customers_name=$customer->customers_name;
        $order->system_name=$request->system_name;
        $order->system_price=$request->system_price;
        $order->system_category=$request->system_category;
        $order->down_payments=$request->down_payments;
        $sisa_pembayaran = $request->system_price-$request->down_payments;

        if ($request->down_payments != null) {
            $order->remaining_payments = $sisa_pembayaran;
            $order->direct_payments = 0;
            $order->status="Menunggu Pelunasan";
        }else{ 
            $order->remaining_payments = 0; 
            $order->direct_payments = $request->system_price;
            $order->status="Lunas";
        }

        $order->total_payments=$request->system_price;
        $order->save();
        
        return redirect('/admin_order_data');
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
        $order=Order::where('id',$id)->first();
        $order->customer_id=$request->customer_id;
        $customer=Customer::where('id', $request->customer_id)->first();
        $order->customers_name=$customer->customers_name;
        $order->system_name=$request->system_name;
        $order->system_price=$request->system_price;
        $order->down_payments=$request->down_payments;
        $order->direct_payments=$request->direct_payments;
        $order->remaining_payments=$request->remaining_payments;
        $order->system_category=$request->system_category;
        
        $order->save();
        return redirect('admin_order_data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::where('id',$id);
        $order->delete();
        return redirect('/admin_order_data');
    }
}
