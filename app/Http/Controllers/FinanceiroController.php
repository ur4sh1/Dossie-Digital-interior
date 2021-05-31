<?php

namespace App\Http\Controllers;

use App\Financeiro;
use App\ItemRecursoEstadual;
use App\ItemRecursoFundoEstadual;
use App\ItemRecursoFundoNacional;
use App\Municipio;
use App\RecursoEstadual;
use App\RecursoFundoEstadual;
use App\RecursoFundoNacional;
use App\TipoRecursoNacional;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipio=Municipio::all();
        return view('financeiro.index',compact('municipio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function createAlternative($id)
    {
        $municipio=Municipio::find($id);
        return view('financeiro.form',compact('municipio'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio=Municipio::find($id);
        $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
        $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
        $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
        $itemRecursoEstadual=ItemRecursoEstadual::all();
        $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
        $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
        $tipoRecursoNacional=TipoRecursoNacional::all();

        return view('financeiro.list',compact('municipio','recursoEstadual','recursoFundoEstadual',
            'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional',
            'tipoRecursoNacional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function edit(Financeiro $financeiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financeiro $financeiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financeiro $financeiro)
    {
        //
    }
}
