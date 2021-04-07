<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Servico;
use App\TipoServico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servico=Servico::all();
        $tiposervico=TipoServico::all();
        $hospital=Hospital::all();
        return view('admin.servicos',compact('servico','tiposervico','hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital=Hospital::all();
        $tiposervico=TipoServico::all();
        return view('admin.servicosForm',compact('hospital','tiposervico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico=Servico::create($request->all());
        return redirect()->route('servicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $hospital=Hospital::all();
        $tiposervico=TipoServico::all();
        $servico=Servico::find($id);
        return view('admin.servicosFormAlt',compact('hospital','tiposervico','servico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servico=Servico::find($id);
        $servico->update($request->all());
        return redirect()->route('servicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico= Servico::find($id);
        $servico->delete();
        return redirect()->route('servicos.index');
    }
}
