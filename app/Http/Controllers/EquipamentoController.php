<?php

namespace App\Http\Controllers;

use App\Equipamento;
use App\Hospital;
use App\TipoEquipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital=Hospital::all();
        $tipoEquipamento=TipoEquipamento::all();
        $equipamento=Equipamento::all();
        return view('admin.equipamentos',compact('equipamento','hospital','tipoEquipamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital=Hospital::all();
        $tipoEquipamento=TipoEquipamento::all();
        return view('admin.equipamentosForm',compact('hospital','tipoEquipamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipamento=Equipamento::create($request->all());
        return redirect()->route('equipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital=Hospital::all();
        $tipoEquipamento=TipoEquipamento::all();
        $equipamento=Equipamento::find($id);
        return view('admin.equipamentosFormAlt',compact('hospital','tipoEquipamento','equipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipamento=Equipamento::find($id);
        $equipamento->update($request->all());
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipamento=Equipamento::find($id);
        $equipamento->delete();
        return redirect()->route('equipamentos.index');
    }
}
