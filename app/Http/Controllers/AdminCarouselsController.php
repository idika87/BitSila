<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class AdminCarouselsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alpcarousels=Carousel::all();
        return view('admins/pages/lp_carousels', compact('alpcarousels') );
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
        // $path = $request->file('pictures')->store('lte/dist/img/landing_page/carousel');
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/carousel';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $alpcarousels= new Carousel;
        $alpcarousels->pictures=$name;
        $alpcarousels->save();
        
        return redirect('lp_carousels');
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

        $file = $request->file('picture_carousel');
        if ($file) {
            $name = $request->file('picture_carousel')->getClientOriginalName();
            $tujuan_upload = 'lte/dist/img/landing_page/carousel';
            $file->move($tujuan_upload,$name);
        }

        $alpcarousels=Carousel::where('id',$id)->first();
        if ($file) {
            $alpcarousels->pictures=$name;
        }
        $alpcarousels->save();

        return redirect('lp_carousels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alpcarousels=Carousel::where('id',$id);
        $alpcarousels->delete();
        return redirect('/lp_carousels');
    }
}
