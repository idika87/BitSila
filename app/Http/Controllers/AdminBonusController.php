<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bonus;

class AdminBonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alpbonus=Bonus::all();
        return view('admins/pages/lp_bonus', compact('alpbonus') );
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

        $alpbonus= new Bonus;
        $alpbonus->name=$request->name;
        $alpbonus->discount=$request->discount;
        $alpbonus->price=$request->price;

        $nilaidiskon=$request->price*$request->discount/100;
        $alpbonus->price_discount=$request->price-$nilaidiskon;

        $alpbonus->description=$request->description;
        $alpbonus->save();

        return redirect('lp_bonus');
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
        $alpbonus=Bonus::where('id',$id)->first();
        $alpbonus->name=$request->name;
        $alpbonus->price=$request->price;
        $alpbonus->discount=$request->discount;

        $nilaidiskon=$request->price*$request->discount/100;
        $alpbonus->price_discount=$request->price-$nilaidiskon;
        
        $alpbonus->description=$request->description;
        $alpbonus->save();
        return redirect('lp_bonus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alpbonus=Bonus::where('id',$id);
        $alpbonus->delete();
        return redirect('/lp_bonus');
    }
}
