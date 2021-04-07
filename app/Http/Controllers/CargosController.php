<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos= Cargo::all();
        return view('admin.autoridadesForm', compact('cargos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargos
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargos)
    {
        //
    }
}
