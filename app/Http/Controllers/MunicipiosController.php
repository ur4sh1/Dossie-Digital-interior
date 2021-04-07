<?php

namespace App\Http\Controllers;

use App\Autoridade;
use App\Equipamento;
use App\Hospital;
use App\Leito;
use App\Municipio;
use App\Regional;
use App\Rh;
use App\RhCategoria;
use App\RhTipoCategoria;
use App\Servico;
use App\TipoEquipamento;
use App\TipoServico;
use App\Veiculo;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoridade=Autoridade::all();
        $municipio=Municipio::all();
        $regional=Regional::all();
        $leito=Leito::all();
        $hospital=Hospital::all();
        $veiculo=Veiculo::all();
        $equipamento=Equipamento::all();
        $tipo_equipamento=TipoEquipamento::all();
        $tipo_servico=TipoServico::all();
        $servico=Servico::all();
        $rh=Rh::all();
        $rhcategoria=RhCategoria::all();

        return view("admin.municipios", compact('autoridade','municipio','regional','leito','hospital','veiculo','equipamento','tipo_equipamento','tipo_servico','servico','rh','rhcategoria'));
    }

    public function indexAlternativo()
    {
        $autoridade=Autoridade::all();
        $municipio=Municipio::all();
        $regional=Regional::all();
        $leito=Leito::all();
        $hospital=Hospital::all();
        $veiculo=Veiculo::all();
        $equipamento=Equipamento::all();
        $tipo_equipamento=TipoEquipamento::all();
        $tipo_servico=TipoServico::all();
        $servico=Servico::all();

        return view("admin.municipiosv2", compact('autoridade','municipio','regional','leito','hospital','veiculo','equipamento','tipo_equipamento','tipo_servico','servico'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $m)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {

    }
}
