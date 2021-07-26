<?php

namespace App\Http\Controllers;

use App\TipoServico;
use Exception;
use Illuminate\Http\Request;

class TipoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $tipoServicos=TipoServico::all();
        return view('tipoServico.index',compact('tipoServicos','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('tipoServico.form');
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
            $tipoServicos=TipoServico::create($request->all());
            $tipoServicos=TipoServico::all();
            return view('tipoServico.index',compact('tipoServicos','msg'));
        }catch (Exception $e){
            $msg=2;
            $tipoServicos=TipoServico::all();
            return view('tipoServico.index',compact('tipoServicos','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function show(TipoServico $tipoServico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoServico $tipoServico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoServico $tipoServico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoServico  $tipoServico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $tipoServico=TipoServico::find($id);
            $tipoServico->delete();
            $tipoServicos=TipoServico::all();
            return view('tipoServico.index',compact('tipoServicos','msg'));
        }catch (Exception $e){
            $msg=2;
            $tipoServicos=TipoServico::all();
            return view('tipoServico.index',compact('tipoServicos','msg'));
        }
    }
}
