<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Alert;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alphome=Home::all();
        return view('admins/pages/lp_home', compact('alphome') );
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
        $file = $request->file('pictures');
        $name = $request->file('pictures')->getClientOriginalName();
        // $path = $request->file('pictures')->store('lte/dist/img/landing_page/carousel');
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/home';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $alphome= new Home;
        $alphome->title=$request->title;
        $alphome->dekskripsi=$request->dekskripsi;
        $alphome->logo=$name;
        $alphome->save();
        
        return redirect('lp_home');
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
        $file = $request->file('pictures');
        if ($file) {
            $name = $request->file('pictures')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/home';
            $file->move($tujuan_upload,$name);
        }

        $alphome=Home::where('id',$id)->first();
        $alphome->title=$request->title;
        $alphome->dekskripsi=$request->dekskripsi;
        if ($file) {
            $alphome->logo=$name;
        }
        $alphome->save();
        return redirect('lp_home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alphome=Home::where('id',$id);
        $alphome->delete();
        return redirect('/lp_home');
    }
}
