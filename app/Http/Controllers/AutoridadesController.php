<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Municipio;
use App\Partido;
use App\Autoridade;
use App\Cargo;
use Exception;
use Illuminate\Http\Request;

class AutoridadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $autoridades= Autoridade::all();
        return view('autoridade.index', compact('autoridades','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $cargos= Cargo::all();
        $partidos= Partido::all();
        $municipios= Municipio::all();
        $hospital=Hospital::all();
        return view('autoridade.form', compact('cargos','partidos','municipios','hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        try {
            $msg=1;
            $autoridade = Autoridade::create($request->all());
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }catch (Exception $e){
            $msg=2;
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $cargos= Cargo::all();
        $partidos= Partido::all();
        $municipios= Municipio::all();
        $autoridades= Autoridade::find($id);
        $hospital=Hospital::all();
        return view('autoridade.edit', compact('autoridades','cargos','partidos','municipios','hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function update(Request $request,int $id)
    {
        try {
            $msg=1;
            $autoridade= Autoridade::find($id);
            $autoridade->update($request->all());
            /*return redirect()->route('autoridade.index');*/
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }catch (Exception $e){
            $msg=2;
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function destroy(Autoridade $autoridade)
    {
        try {
            $msg=1;
            $autoridade->delete();
            /*return redirect()->route('autoridade.index');*/
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }catch (Exception $e){
            $msg=2;
            $autoridades= Autoridade::all();
            return view('autoridade.index', compact('autoridades','msg'));
        }
    }
}
