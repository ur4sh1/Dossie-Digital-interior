<?php

namespace App\Http\Controllers;

use App\Doencas;
use Illuminate\Http\Request;

class DoencasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doencas=Doencas::all();
        return view('doenca.index',compact('doencas'));
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
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function show(Doencas $doencas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function edit(Doencas $doencas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doencas $doencas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doencas $doencas)
    {
        //
    }
}
