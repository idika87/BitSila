<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AdminClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alpclient=Client::all();
        return view('admins/pages/lp_client', compact('alpclient') );
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
        $file = $request->file('pictures');
        $name = $request->file('pictures')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/client';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $alpclient= new Client;
        $alpclient->profil=$name;
        $alpclient->client_name=$request->client_name;
        $alpclient->client_description=$request->client_description;
        $alpclient->save();
        
        return redirect('lp_client');
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

        $file = $request->file('pictures_client');
        if ($file) {
            $name = $request->file('pictures_client')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/client';
            $file->move($tujuan_upload,$name);
        }

        $alpclient=Client::where('id',$id)->first();
        if ($file) {
            $alpclient->profil=$name;
        }
        $alpclient->client_name=$request->client_name;
        $alpclient->client_description=$request->client_description;
        $alpclient->save();
        return redirect('lp_client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alpclient=Client::where('id',$id);
        $alpclient->delete();
        return redirect('/lp_client');
    }
}
