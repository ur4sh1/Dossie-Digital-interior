<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Municipio;
use App\Programa;
use Exception;
use Illuminate\Http\Request;

class ProgramaController extends Controller
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
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
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
        $ano=Ano::all();
        $municipio=Municipio::all();
        return view('programa.form',compact('ano','municipio'));
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
            $data=$request->all();
            $data['repasse']=str_replace('.',"",$data['repasse']);
            $data['repasse']=str_replace(',',".",$data['repasse']);
            $programa=Programa::create($data);

            $msg=1;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $ano=Ano::all();
        $municipio=Municipio::all();
        $programa=Programa::find($id);
        return view('programa.edit',compact('ano','municipio','programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $data=$request->all();
            $data['repasse']=str_replace('.',"",$data['repasse']);
            $data['repasse']=str_replace(',',".",$data['repasse']);
            $programa=Programa::find($id);
            $programa->update($data);

            $msg=1;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $programa=Programa::find($id);
            $programa->delete();

            $msg=1;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $programas=Programa::all();
            return view('programa.index',compact('programas','ano','msg'));
        }
    }
}
