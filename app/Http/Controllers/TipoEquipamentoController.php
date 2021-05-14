<?php

namespace App\Http\Controllers;

use App\TipoEquipamento;
use Illuminate\Http\Request;

class TipoEquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoEquipamento=TipoEquipamento::all();
        return view('tipoEquipamento.index',compact('tipoEquipamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoEquipamento.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoEquipamento=TipoEquipamento::create($request->all());
        return redirect()->route('tipoEquipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEquipamento $tipoEquipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $tipoEquipamento=TipoEquipamento::find($id);
        return view('tipoEquipamento.edit',compact('tipoEquipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoEquipamento=TipoEquipamento::find($id);
        $tipoEquipamento->update($request->all());
        return redirect()->route('tipoEquipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoEquipamento  $tipoEquipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoEquipamento=TipoEquipamento::find($id);
        $tipoEquipamento->delete();
        return redirect()->route('tipoEquipamentos.index');
    }
}
