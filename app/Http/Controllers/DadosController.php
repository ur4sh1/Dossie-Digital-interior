<?php

namespace App\Http\Controllers;

use App\Ano;
use App\DadosMunicipios;
use App\DetalhesMunicipio;
use App\Doencas;
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
        $dadosMunicipios= DadosMunicipios::all();
        return view('dado.index',compact('dadosMunicipios','municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ano=Ano::all();
        $municipios=Municipio::all();
        return view('admin.dadosForm',compact('municipios','ano'));
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
     * @param  \App\DadosMunicipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ano=Ano::all();
        $municipios=Municipio::find($id);
        $dados=DadosMunicipios::find($id);
        $detalhes=DetalhesMunicipio::find($id);
        return view('dado.dados', compact('municipios','dados','detalhes','ano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DadosMunicipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ano=Ano::all();
        $municipios=Municipio::find($id);
        $dados=DadosMunicipios::find($id);
        $detalhes=DetalhesMunicipio::find($id);
        return view('dado.edit',compact('municipios','dados','detalhes','ano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DadosMunicipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados=DadosMunicipios::find($id);
        $dados->update($request->all());

        $detalhes=DetalhesMunicipio::find($id);
        $detalhes->update($request->all());

        return redirect()->route('dados.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DadosMunicipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(DadosMunicipios $dados_municipios)
    {
        //
    }
}
