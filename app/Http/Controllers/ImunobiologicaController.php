<?php

namespace App\Http\Controllers;

use App\Imunobiologica;
use Exception;
use Illuminate\Http\Request;

class ImunobiologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $imunobiologica=Imunobiologica::all();
        return view('imunobiologica.index',compact('imunobiologica','msg'));
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
            return view('imunobiologica.form');
        }catch (Exception $e){
            $msg=2;
            $imunobiologica=Imunobiologica::all();
            return view('imunobiologica.index',compact('imunobiologica'));
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
            $data=$request->all();
            $encoding='UTF-8';
            $data['nome']=mb_strtoupper($data['nome'],$encoding);
            $imunobiologica=Imunobiologica::create($data);
            $imunobiologica=Imunobiologica::all();
            return view('imunobiologica.index',compact('imunobiologica','msg'));
        }catch (Exception $e){
            $msg=2;
            $imunobiologica=Imunobiologica::all();
            return view('imunobiologica.index',compact('imunobiologica','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imunobiologica  $imunobiologica
     * @return \Illuminate\Http\Response
     */
    public function show(Imunobiologica $imunobiologica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imunobiologica  $imunobiologica
     * @return \Illuminate\Http\Response
     */
    public function edit(Imunobiologica $imunobiologica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imunobiologica  $imunobiologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imunobiologica $imunobiologica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imunobiologica  $imunobiologica
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $imunobiologica=Imunobiologica::find($id);
            $imunobiologica->delete();
            $imunobiologica=Imunobiologica::all();
            return view('imunobiologica.index',compact('imunobiologica','msg'));
        }catch (Exception $e){
            $msg=2;
            $imunobiologica=Imunobiologica::all();
            return view('imunobiologica.index',compact('imunobiologica','msg'));
        }
    }
}
