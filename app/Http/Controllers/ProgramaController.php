<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Municipio;
use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ano=Ano::all();
        $programas=Programa::all();
        return view('programa.index',compact('programas','ano'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $data['repasse']=str_replace('.',"",$data['repasse']);
        $data['repasse']=str_replace(',',".",$data['repasse']);
        $programa=Programa::create($data);
        return redirect()->route('programa.index');
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
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->all();
        $data['repasse']=str_replace('.',"",$data['repasse']);
        $data['repasse']=str_replace(',',".",$data['repasse']);
        $programa=Programa::find($id);
        $programa->update($data);
        return redirect()->route('programa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa=Programa::find($id);
        $programa->delete();
        return redirect()->route('programa.index');
    }
}
