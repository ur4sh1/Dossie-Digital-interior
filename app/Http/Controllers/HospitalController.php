<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Exame;
use App\Hospital;
use App\Internacao;
use App\Leito;
use App\Municipio;
use App\Servico;
use App\TipoServico;
use App\Veiculo;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $hospital=Hospital::all();
       $internacao=Internacao::all();
       return view('admin.hospitals', compact('hospital','internacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipio= Municipio::all();
        return view('admin.hospitalsForm',compact('municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospital=Hospital::create($request->all());

        $internacaos=[];
        $internacaos["hospital_id"]=$hospital->id;
        $internacaos["media_dia"]=$request["media_dia"];
        $internacaos["media_mes"]=$request["media_mes"];
        $internacaos=Internacao::create($internacaos);

        return redirect()->route('hospitals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospitais
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospitais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio=Municipio::all();
        $hospital=Hospital::find($id);
        $internacao=Internacao::all();
        return view('admin.hospitalsFormAlt',compact('municipio','hospital','internacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospitals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hospital=Hospital::find($id);
        $hospital->update($request->all());
        $internacao=Internacao::find($id);
        $internacao->update($request->all());

        return redirect()->route('hospitals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospitals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete();
        return redirect()->route('hospitals.index');
    }
}
