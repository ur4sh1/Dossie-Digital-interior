<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculo=Veiculo::all();
        return view('admin.veiculos',compact('veiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital=Hospital::all();
        return view('admin.veiculosForm',compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo=Veiculo::create($request->all());
        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital=Hospital::all();
        $veiculo=Veiculo::find($id);
        return view('admin.veiculosFormAlt',compact('hospital','veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo=Veiculo::find($id);
        $veiculo->update($request->all());
        return redirect()->route('veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo=Veiculo::find($id);
        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}
