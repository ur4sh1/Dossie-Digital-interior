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
        return view('folha.index',compact('folhas','hospital','profissional'));
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
        return view('folha.form',compact('hospital','profissional'));
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
        $data['salario_inicial']=str_replace('.',"",$data['salario_inicial']);
        $data['salario_inicial']=str_replace(',',".",$data['salario_inicial']);
        $folha=Folha::create($data);
        return redirect()->route('folha.index');
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
        return view('folha.lista',compact('folha','hospital','profissional'));
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
        return view('folha.edit',compact('hospital','profissional','folha'));
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
        $h = $folha['hospital_id'];
        $folha->update($request->all());
 /*       return redirect('/folha/'.$h);*/
        return redirect("/folha/{$h}");
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
        return redirect()->route('folha.index');
    }
}
