<?php

namespace App\Http\Controllers;

use App\Partido;
use Exception;
use Illuminate\Http\Request;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $partidos= Partido::all();
        return view("partido.index", compact('partidos','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('partido.form');
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
            $partido = Partido::create($request->all());
            $msg=1;
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }catch (Exception $e){
            $msg=2;
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request,int $id)
    {
        try {
            $msg=1;
            $partido= Partido::find($id);
            $partido->update($request->all());
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }catch (Exception $e){
            $msg=2;
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy(Partido $partido)
    {
        try {
            $msg=1;
            $partido->delete();
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }catch (Exception $e){
            $msg=2;
            $partidos= Partido::all();
            return view("partido.index", compact('partidos','msg'));
        }
    }
}
