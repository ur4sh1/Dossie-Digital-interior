<?php

namespace App\Http\Controllers;

use App\Municipio;
use App\Partido;
use App\Autoridade;
use App\Cargo;
use Illuminate\Http\Request;

class AutoridadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoridades= Autoridade::all();
        return view('admin.autoridades', compact('autoridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos= Cargo::all();
        $partidos= Partido::all();
        $municipios= Municipio::all();
        return view('admin.autoridadesForm', compact('cargos','partidos','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autoridade = Autoridade::create($request->all());
        return redirect()->route('autoridades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $cargos= Cargo::all();
        $partidos= Partido::all();
        $municipios= Municipio::all();
        $autoridades= Autoridade::find($id);
        return view('admin.autoridadesFormAlt', compact('autoridades','cargos','partidos','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $autoridade= Autoridade::find($id);
        $autoridade->update($request->all());
        return redirect()->route('autoridade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autoridade $autoridade)
    {
        $autoridade->delete();
        return redirect()->route('autoridades.index');
    }
}
