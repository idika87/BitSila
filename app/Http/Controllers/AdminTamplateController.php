<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamplate;

class AdminTamplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alptamplate=Tamplate::all();
        return view('admins/pages/lp_tamplate', compact('alptamplate') );
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
        $random=rand();
        $file = $request->file('pictures_thumbnail');
        $name = $request->file('pictures_thumbnail')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/tamplate';
        $file->move($tujuan_upload,$name);

        $alptamplate= new Tamplate;
        $alptamplate->thumbnail=$name;
        $alptamplate->name_tamplate=$request->name_tamplate;
        $alptamplate->description_tamplate=$request->description_tamplate;
        $alptamplate->save();
        
        return redirect('lp_tamplate');
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

        $file = $request->file('pictures_thumbnail');
        if ($file) {
            $name = $request->file('pictures_thumbnail')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/tamplate';
            $file->move($tujuan_upload,$name);
        }


        $alptamplate=Tamplate::where('id',$id)->first();
        if ($file) {
            $alptamplate->thumbnail=$name;
        }
        $alptamplate->description_tamplate=$request->description_tamplate;
        $alptamplate->save();
        return redirect('lp_tamplate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alptamplate=Tamplate::where('id',$id);
        $alptamplate->delete();
        return redirect('/lp_tamplate');
    }
}
