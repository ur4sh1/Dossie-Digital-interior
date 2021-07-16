<?php

namespace App\Http\Controllers;

use App\Equipamento;
use App\Hospital;
use App\TipoEquipamento;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function index()
    {
        $hospital=Hospital::all();
        $tipoEquipamento=TipoEquipamento::all();
        $equipamento=Equipamento::all();
        return view('equipamentos.index',compact('equipamento','hospital','tipoEquipamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function create()
    {
        try {
            $hospital=Hospital::all();
            $tipoEquipamento=TipoEquipamento::all();
            return view('equipamentos.form',compact('hospital','tipoEquipamento'));
        }catch (Exception $e){

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        try {
            $equipamento=Equipamento::create($request->all());
            $hospital=Hospital::all();
            $tipoEquipamento=TipoEquipamento::all();
            $equipamento=Equipamento::all();
            return view('equipamentos.index',compact('equipamento','hospital','tipoEquipamento'));
        }catch (Exception $e){
            $hospital=Hospital::all();
            $tipoEquipamento=TipoEquipamento::all();
            $equipamento=Equipamento::all();
            return view('equipamentos.index',compact('equipamento','hospital','tipoEquipamento'));
        }
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
        return view('equipamentos.edit',compact('hospital','tipoEquipamento','equipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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
