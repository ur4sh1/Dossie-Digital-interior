<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Veiculo;
use Exception;
use Illuminate\Http\Request;

class VeiculoController extends Controller
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
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }catch (Exception $e){
            dd($e);
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
        return view('veiculo.form',compact('hospital'));
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
            $veiculo=Veiculo::create($request->all());
            $msg=1;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $hospital=Hospital::all();
        $veiculo=Veiculo::find($id);
        return view('veiculo.edit',compact('hospital','veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $veiculo=Veiculo::find($id);
            $veiculo->update($request->all());

            $msg=1;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veiculo  $veiculo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $veiculo=Veiculo::find($id);
            $veiculo->delete();
            $msg=1;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $veiculo=Veiculo::all();
            $hospital=Hospital::all();
            return view('veiculo.index',compact('veiculo','hospital','msg'));
        }
    }
}
