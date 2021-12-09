<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Alert;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alpteam=Team::all();
        return view('admins/pages/lp_team', compact('alpteam') );
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
        $file = $request->file('pictures_team');
        $name = $request->file('pictures_team')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/team';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $alpteam= new Team;
        $alpteam->profil=$name;
        $alpteam->name=$request->name;
        $alpteam->position=$request->position;
        $alpteam->description_team=$request->description_team;
        $alpteam->save();
        
        return redirect('lp_team');
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
        $file = $request->file('pictures_team');
        if ($file) {
            $name = $request->file('pictures_team')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/team';
            $file->move($tujuan_upload,$name);
        }

        $alpteam=Team::where('id',$id)->first();
        if ($file) {
            $alpteam->profil=$name;
        }
        $alpteam->name=$request->name;
        $alpteam->position=$request->position;
        $alpteam->description_team=$request->description_team;
        $alpteam->save();
        return redirect('lp_team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alpteam=Team::where('id',$id);
        $alpteam->delete();
        return redirect('/lp_team');
    }
}
