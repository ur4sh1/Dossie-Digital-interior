<?php

namespace App\Http\Controllers;

use App\Folha;
use App\Hospital;
use App\Profissional;
use Illuminate\Http\Request;

class FolhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folhas=Folha::all();
        $hospital=Hospital::all();
        $profissional=Profissional::all();
        return view('admin.folha',compact('folhas','hospital','profissional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital=Hospital::all();
        $profissional=Profissional::all();
        return view('admin.folhaForm',compact('hospital','profissional'));
    }

    public function teste(int $id)
    {
        dd($id);
        $hospital=Hospital::find($id);
        $profissional=Profissional::all();
        return view('admin.folhaForm',compact('hospital','profissional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folha=Folha::create($request->all());
        return redirect()->route('folhas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function show($hospital_id)
    {
        $hospital=Hospital::find($hospital_id);
        $profissional=Profissional::all();
        $folha=Folha::where('hospital_id',$hospital_id)->get();
        return view('admin.folhaLista',compact('folha','hospital','profissional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital=Hospital::all();
        $profissional=Profissional::all();
        $folha=Folha::find($id);
        return view('admin.folhaFormAlt',compact('hospital','profissional','folha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $folha=Folha::find($id);
        $folha->update($request->all());
        return redirect()->route('folhas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folha=Folha::find($id);
        $folha->delete();
        return redirect()->route('folhas.index');
    }
}
