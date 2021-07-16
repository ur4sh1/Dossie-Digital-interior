<?php

namespace App\Http\Controllers;

use App\Folha;
use App\Hospital;
use App\Profissional;
use Exception;
use Illuminate\Http\Request;

class FolhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //
    }

    public function createAlternative($id)
    {
        try {
            $hospital=Hospital::find($id);
            $profissional=Profissional::all();
            return view('folha.form',compact('hospital','profissional'));
        }catch (Exception $e){
            $hospital=Hospital::all();
            $profissional=Profissional::all();
            return view('folha.form',compact('hospital','profissional'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
    }

    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $data=$request->all();
            $data['salario_inicial']=str_replace('.',"",$data['salario_inicial']);
            $data['salario_inicial']=str_replace(',',".",$data['salario_inicial']);
            $folha=Folha::create($data);

            $hospital=Hospital::find($id);
            $folha=Folha::where('hospital_id',$id)->get();
            return view('folha.lista',compact('folha','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $hospital=Hospital::find($id);
            $folha=Folha::where('hospital_id',$id)->get();
            return view('folha.lista',compact('folha','hospital','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $msg=0;
        $hospital=Hospital::find($id);
        $profissional=Profissional::all();
        $folha=Folha::where('hospital_id',$id)->get();
        return view('folha.lista',compact('folha','hospital','profissional','msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function editAlternative($id,$hid)
    {
        try {
            $profissional=Profissional::all();
            $hospital=Hospital::find($hid);
            $folha=Folha::find($id);
            return view('folha.edit',compact('folha','hospital','profissional'));
        }catch (Exception $e){
            dd($e);
        }
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
        //
    }

    public function updateAlternative(Request $request,$id,$hid)
    {
        try {
            $msg=1;

            $data=$request->all();
            $data['salario_inicial']=str_replace('.',"",$data['salario_inicial']);
            $data['salario_inicial']=str_replace(',',".",$data['salario_inicial']);
            $folha=Folha::find($id);
            $folha->update($data);

            $profissional=Profissional::all();
            $hospital=Hospital::find($hid);
            $folha=Folha::where('hospital_id',$hid)->get();
            return view('folha.lista',compact('folha','hospital','profissional','msg'));
        }catch (Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folha  $folha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }

    public function deletAlternative($id,$hid)
    {
        try {
            $folha=Folha::find($id);
            $folha->delete();

            $msg=1;
            $profissional=Profissional::all();
            $hospital=Hospital::find($hid);
            $folha=Folha::where('hospital_id',$hid)->get();
            return view('folha.lista',compact('folha','hospital','profissional','msg'));
        }catch (Exception $e){
            dd($e);
        }
    }
}

