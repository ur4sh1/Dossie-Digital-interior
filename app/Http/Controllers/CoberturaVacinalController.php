<?php

namespace App\Http\Controllers;

use App\Ano;
use App\CoberturaVacinal;
use App\Imunobiologica;
use App\Municipio;
use Exception;
use Illuminate\Http\Request;

class CoberturaVacinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $ano=Ano::all();
        $municipio=Municipio::all();
        $coberturaVacinal=CoberturaVacinal::all();
        $imunobiologica=Imunobiologica::all();
        return view('coberturaVacinal.index',compact('coberturaVacinal','ano','imunobiologica','municipio','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        try {
            $msg=0;
            $ano=Ano::all();
            $municipio=Municipio::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.form',compact('imunobiologica','ano','municipio','msg'));

        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.form',compact('imunobiologica','ano','municipio','msg'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        try {
            $msg=1;
            $coberturaVacinal=CoberturaVacinal::create($request->all());

            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));

        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoberturaVacinal  $coberturaVacinal
     * @return \Illuminate\Http\Response
     */
    public function show(CoberturaVacinal $coberturaVacinal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoberturaVacinal  $coberturaVacinal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        try {
            $msg=0;
            $coberturaVacinal=CoberturaVacinal::find($id);
            $ano=Ano::all();
            $municipio=Municipio::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.edit',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));

        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoberturaVacinal  $coberturaVacinal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $msg=1;
            $coberturaVacinal=CoberturaVacinal::find($id);
            $coberturaVacinal->update($request->all());
            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('coberturaVacinal','ano','imunobiologica','municipio','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('coberturaVacinal','ano','imunobiologica','municipio','msg'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoberturaVacinal  $coberturaVacinal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $coberturaVacional=CoberturaVacinal::find($id);
            $coberturaVacional->delete();

            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));
        }catch (Exception $e){
            $ano=Ano::all();
            $municipio=Municipio::all();
            $coberturaVacinal=CoberturaVacinal::all();
            $imunobiologica=Imunobiologica::all();
            return view('coberturaVacinal.index',compact('imunobiologica','coberturaVacinal','ano','municipio','msg'));
        }
    }
}
