<?php

namespace App\Http\Controllers;

use App\RecursoEstadual;
use Illuminate\Http\Request;

class RecursoEstadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursoEstadual=RecursoEstadual::all();
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
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function show(RecursoEstadual $recursoEstadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursoEstadual $recursoEstadual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursoEstadual $recursoEstadual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursoEstadual $recursoEstadual)
    {
        //
    }
}
