<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Leito;
use Illuminate\Http\Request;

class LeitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $leito=Leito::all();
        $hospital=Hospital::all();
        return view('leito.index',compact('leito','hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $hospital=Hospital::all();
        return view('leito.form',compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leitos=Leito::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leito  $leitos
     * @return \Illuminate\Http\Response
     */
    public function show(Leito $leitos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leito  $leitos
     * @return \Illuminate\Http\Response
     */
    public function edit(Leito $leitos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leito  $leitos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leito $leitos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leito  $leitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leito $leitos)
    {
        $leitos->delete();
    }
}
