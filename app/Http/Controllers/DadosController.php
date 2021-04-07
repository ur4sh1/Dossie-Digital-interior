<?php

namespace App\Http\Controllers;

use App\Dados_municipios;
use App\Detalhes_municipio;
use App\Municipio;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios=Municipio::all();
        $dadosMunicipios= Dados_municipios::all();
        return view('admin.dados',compact('dadosMunicipios','municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios=Municipio::all();
        return view('admin.dadosForm',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Dados_municipios $dados_municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipios=Municipio::find($id);
        $dados=Dados_municipios::find($id);
        $detalhe=Detalhes_municipio::find($id);
        return view('admin.dadosFormAlt',compact('municipios','dados','detalhe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados=Dados_municipios::find($id);
        $dados->update($request->all());

        $detalhe=Detalhes_municipio::find($id);
        $detalhe->update($request->all());

        return redirect()->route('municipios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dados_municipios $dados_municipios)
    {
        //
    }
}
