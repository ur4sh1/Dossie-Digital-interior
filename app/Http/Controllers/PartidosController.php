<?php

namespace App\Http\Controllers;

use App\Partido;
use Illuminate\Http\Request;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos= Partido::all();
        return view("partido.index", compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partido.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = Partido::create($request->all());
        return redirect()->route('partido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $partido= Partido::find($id);
        return view('partido.edit', compact('partido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $partido= Partido::find($id);
        $partido->update($request->all());
        return redirect()->route('partido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        $partido->delete();
        return redirect()->route('partido.index');
    }
}
