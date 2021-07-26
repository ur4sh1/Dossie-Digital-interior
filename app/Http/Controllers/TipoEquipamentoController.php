<?php

namespace App\Http\Controllers;

use App\TipoEquipamento;
use Exception;
use Illuminate\Http\Request;

class TipoEquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
       $msg=0;
        $tipoEquipamento=TipoEquipamento::all();
        return view('tipoEquipamento.index',compact('tipoEquipamento','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('tipoEquipamento.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['nome']=mb_strtoupper($data['nome'],$encoding);
            $tipoEquipamento=TipoEquipamento::create($data);
            $tipoEquipamento=TipoEquipamento::all();
            return view('tipoEquipamento.index',compact('tipoEquipamento','msg'));
        }catch (Exception $e){
            $msg=2;
            $tipoEquipamento=TipoEquipamento::all();
            return view('tipoEquipamento.index',compact('tipoEquipamento','msg'));
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
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
     * @return \Illuminate\Http\RedirectResponse
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $tipoEquipamento=TipoEquipamento::find($id);
            $tipoEquipamento->delete();
            $tipoEquipamento=TipoEquipamento::all();
            return view('tipoEquipamento.index',compact('tipoEquipamento','msg'));
        }catch (Exception $e){
            $msg=2;
            $tipoEquipamento=TipoEquipamento::all();
            return view('tipoEquipamento.index',compact('tipoEquipamento','msg'));
        }
    }
}
