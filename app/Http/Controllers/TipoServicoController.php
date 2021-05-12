<?php

namespace App\Http\Controllers;

use App\TipoServico;
use Illuminate\Http\Request;

class TipoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoServicos=TipoServico::all();
        return view('tipoServico.index',compact('tipoServicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoServico.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoServicos=TipoServico::create($request->all());
        return redirect()->route('tipoServicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function show(TipoServico $tipoServico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoServico $tipoServico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoServico $tipoServico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoServico=TipoServico::find($id);
        $tipoServico->delete();
        return redirect()->route('tipoServicos.index');
    }
}
