<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Rh;
use App\RhCategoria;
use Illuminate\Http\Request;

class RhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rhCategorias=RhCategoria::all();
        $rhs=Rh::all();
        $hospital=Hospital::all();
        return view('admin.rh',compact('rhs','rhCategorias','hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital=Hospital::all();
        $rhCategoria=RhCategoria::all();
        return view('admin.rhForm',compact('hospital','rhCategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rh=Rh::create($request->all());
        return redirect()->route('rhs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Http\Response
     */
    public function show(Rh $rh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $hospital=Hospital::all();
        $rhCategoria=RhCategoria::all();
        $rh=Rh::find($id);
        return view('admin.rhFormALt',compact('hospital','rhCategoria','rh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rh  $rh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rh=Rh::find($id);
        $rh->update($request->all());
        return redirect()->route('rhs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rh=Rh::find($id);
        $rh->delete();
        return redirect()->route('rhs.index');
    }
}
