<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Alert;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alpproduct=Product::all();
        return view('admins/pages/lp_produk', compact('alpproduct') );
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
        $file = $request->file('picture_produk');
        $name = $request->file('picture_produk')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/produk';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $alpproduct= new Product;
        $alpproduct->pictures=$name;
        $alpproduct->system_name=$request->system_name;
        $alpproduct->system_category=$request->system_category;
        $alpproduct->system_price=$request->system_price;
        $alpproduct->description=$request->description;
        $alpproduct->save();
        
        return redirect('lp_produk');
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
        $file = $request->file('picture_produk');
        if ($file) {
            $name = $request->file('picture_produk')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/produk';
            $file->move($tujuan_upload,$name);
        }

        $alpproduct=Product::where('id',$id)->first();
        if ($file) {
            $alpproduct->pictures=$name;
        }
        $alpproduct->system_name=$request->system_name;
        $alpproduct->system_category=$request->system_category;
        $alpproduct->system_price=$request->system_price;
        $alpproduct->description=$request->description;
        $alpproduct->save();

        return redirect('lp_produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alpproduct=Product::where('id',$id);
        $alpproduct->delete();
        return redirect('/lp_produk');
    }
}
