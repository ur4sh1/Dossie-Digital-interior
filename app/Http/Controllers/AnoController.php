<?php

namespace App\Http\Controllers;

use App\Ano;
use Illuminate\Http\Request;

class AnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anos= Ano::all();
        return  view('admin.hospitalsForm',compact('anos'));
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
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function show(Ano $ano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function edit(Ano $ano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ano $ano)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ano  $ano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ano $ano)
    {
        //
    }
}
