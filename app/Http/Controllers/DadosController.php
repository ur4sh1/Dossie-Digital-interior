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
        return view('dado.index',compact('dadosMunicipios','municipios'));
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
    public function store(Request $request, $id)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipios=Municipio::find($id);
        $dados=Dados_municipios::find($id);
        $detalhes=Detalhes_municipio::find($id);
        return view('dado.dados', compact('municipios','dados','detalhes'));
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
        $detalhes=Detalhes_municipio::find($id);
        return view('dado.edit',compact('municipios','dados','detalhes'));
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

        $detalhes=Detalhes_municipio::find($id);
        $detalhes->update($request->all());

        return redirect()->route('dados.show',$id);
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
