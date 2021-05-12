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
       return view('hospital.index', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipio= Municipio::all();
        return view('hospital.form',compact('municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 /*   dd($request->all());*/
        $data=$request->all();
        $data['nome']=strtoupper($data['nome']);
        $hospital=Hospital::create($data);

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
        return view('hospital.edit',compact('municipio','hospital'));
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
