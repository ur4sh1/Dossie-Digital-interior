<?php

namespace App\Http\Controllers;

use App\Rh;
use App\RhCategoria;
use Illuminate\Http\Request;

class RhCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rhCategorias=RhCategoria::all();
        return view('rhCategoria.index',compact('rhCategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rhCategoria.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rhCategoria=RhCategoria::create($request->all());
        return redirect()->route('rhCategorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RhCategoria  $rhCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(RhCategoria $rhCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RhCategoria  $rhCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(RhCategoria $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RhCategoria  $rhCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rhCategoria=RhCategoria::find($id);
        $rhCategoria->update($request->all());
        return redirect()->route('rhCategorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RhCategoria  $rhCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rhCategoria=RhCategoria::find($id);
        $rhCategoria->delete();
        return redirect()->route('rhCategorias.index');
    }
}
