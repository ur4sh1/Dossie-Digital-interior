<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Servico;
use App\TipoServico;
use Exception;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        try {
            $msg=0;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $hospital=Hospital::all();
        $tiposervico=TipoServico::all();
        return view('servico.form',compact('hospital','tiposervico'));
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
            $servico=Servico::create($request->all());
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $hospital=Hospital::all();
        $tiposervico=TipoServico::all();
        $servico=Servico::find($id);
        return view('servico.edit',compact('hospital','tiposervico','servico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $msg=1;
            $servico=Servico::find($id);
            $servico->update($request->all());

            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $servico= Servico::find($id);
            $servico->delete();

            $msg=1;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $servico=Servico::all();
            $tiposervico=TipoServico::all();
            $hospital=Hospital::all();
            return view('servico.index',compact('servico','tiposervico','hospital','msg'));
        }
    }
}
