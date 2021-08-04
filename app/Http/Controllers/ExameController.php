<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Exame;
use App\Hospital;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $hospital=Hospital::all();
        return view('exame.index',compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createAlternative($id)
    {
        try {
            $ano=Ano::all();
            $hospital=Hospital::find($id);
            return view('exame.form',compact('hospital','ano'));
        }catch (Exception $e){

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $exame=Exame::create($request->all());

            $ano=Ano::all();
            $hospital=Hospital::find($id);
            $exame=Exame::where('hospital_id',$id)->get();
            return view('exame.list',compact('ano','hospital','msg','exame'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $hospital=Hospital::find($id);
            $exame=Exame::where('hospital_id',$id)->get();
            return view('exame.list',compact('ano','hospital','msg','exame'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        try {
            $msg=0;
            $ano=Ano::all();
            $hospital=Hospital::find($id);
            $exame=Exame::where('hospital_id',$id)->get();
            return view('exame.list',compact('exame','hospital','ano','msg'));
        }catch (Exception $e){
            dd($e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
    }

    public function editAlternative($id,$hid)
    {
        try {
            $ano=Ano::all();
            $hospital=Hospital::find($hid);
            $exame=Exame::find($id);
            return view('exame.edit',compact('exame','hospital','ano'));
        }catch (Exception $e){

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    public function updateAlternative(Request $request,$id,$hid)
    {
        try {
            $msg=1;
            $exame=Exame::find($id);
            $exame->update($request->all());

            $ano=Ano::all();
            $hospital=Hospital::find($hid);
            $exame=Exame::where('hospital_id',$hid)->get();
            return view('exame.list',compact('exame','hospital','ano','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $hospital=Hospital::find($hid);
            $exame=Exame::where('hospital_id',$hid)->get();
            return view('exame.list',compact('exame','hospital','ano','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exames)
    {
        //
    }

    public function deletAlternative($id,$hid)
    {
        try {
            $msg=1;
            $exame=Exame::find($id);
            $exame->delete();
            $exame=Exame::where('hospital_id',$hid)->get();
            $ano=Exame::all();
            $hospital=Hospital::find($hid);
            return view('exame.list',compact('exame','ano','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $exame=Exame::where('hospital_id',$hid)->get();
            $ano=Exame::all();
            $hospital=Hospital::find($hid);
            return view('exame.list',compact('exame','ano','hospital','msg'));
        }
    }
}
