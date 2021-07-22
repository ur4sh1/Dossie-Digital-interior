<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Doencas;
use App\DoencasAgravos;
use App\Municipio;
use Exception;
use Illuminate\Http\Request;

class DoencasAgravosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $doencas=Doencas::all();
        $doencasAgravos=DoencasAgravos::all();
        $ano=Ano::all();
        $municipios=Municipio::all();
        return view('doencaAgravo.index',compact('doencasAgravos','doencas','ano','municipios','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        try {
            $municipios=Municipio::all();
            $ano=Ano::all();
            $doencas=Doencas::all();
            return view('doencaAgravo.form',compact('ano','doencas','municipios'));
        }catch (Exception $e){
            dd($e);
        }
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
            $doencasAgravos=DoencasAgravos::create($request->all());
            $msg=1;
            $doencas=Doencas::all();
            $doencasAgravos=DoencasAgravos::all();
            $ano=Ano::all();
            $municipios=Municipio::all();
            return view('doencaAgravo.index',compact('doencasAgravos','doencas','ano','municipios','msg'));
        }catch (Exception $e){
            $msg=2;
            $doencas=Doencas::all();
            $doencasAgravos=DoencasAgravos::all();
            $ano=Ano::all();
            $municipios=Municipio::all();
            return view('doencaAgravo.index',compact('doencasAgravos','doencas','ano','municipios','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoencasAgravos  $doencasAgravos
     * @return \Illuminate\Http\Response
     */
    public function show(DoencasAgravos $doencasAgravos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoencasAgravos  $doencasAgravos
     * @return \Illuminate\Http\Response
     */
    public function edit(DoencasAgravos $doencasAgravos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoencasAgravos  $doencasAgravos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoencasAgravos $doencasAgravos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoencasAgravos  $doencasAgravos
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $doencasAgravos=DoencasAgravos::find($id);
            $doencasAgravos->delete();
            $doencas=Doencas::all();
            $doencasAgravos=DoencasAgravos::all();
            $ano=Ano::all();
            $municipios=Municipio::all();
            return view('doencaAgravo.index',compact('doencasAgravos','doencas','ano','municipios','msg'));
        }catch (Exception $e){
            $msg=2;
            $doencas=Doencas::all();
            $doencasAgravos=DoencasAgravos::all();
            $ano=Ano::all();
            $municipios=Municipio::all();
            return view('doencaAgravo.index',compact('doencasAgravos','doencas','ano','municipios','msg'));
        }
    }
}
