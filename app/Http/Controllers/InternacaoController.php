<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Hospital;
use App\Internacao;
use Exception;
use Illuminate\Http\Request;

class InternacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $hospital=Hospital::all();
        return view('internacao.index',compact('hospital','msg'));
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
            return view('internacao.form',compact('hospital','ano'));
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
            $internacao=Internacao::create($request->all());

            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$id)->get();
            $hospital=Hospital::find($id);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$id)->get();
            $hospital=Hospital::find($id);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Internacao  $internacao
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $msg=0;
        $internacao=Internacao::where('hospital_id',$id)->get();
        $ano=Ano::all();
        $hospital=Hospital::find($id);
        return view('internacao.list',compact('hospital','ano','internacao','msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internacao  $internacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Internacao $internacao)
    {
        //
    }

    public function editAlternative($id,$hid)
    {
        try {
            $ano=Ano::all();
            $hospital=Hospital::find($hid);
            $internacao=Internacao::find($id);
            return view('internacao.edit',compact('internacao','hospital','ano'));
        }catch (Exception $e){

        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internacao  $internacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internacao $internacao)
    {
        //
    }

    public function updateAlternative(Request $request,$id,$hid)
    {
        try {
            $msg=1;
            $internacao=Internacao::find($id);
            $internacao->update($request->all());
            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$hid)->get();
            $hospital=Hospital::find($hid);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$hid)->get();
            $hospital=Hospital::find($hid);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internacao  $internacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internacao $internacao)
    {
        //
    }

    public function deletAlternative($id,$hid)
    {
        try {
            $msg=1;
            $internacao=Internacao::find($id);
            $internacao->delete();

            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$hid)->get();
            $hospital=Hospital::find($hid);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $internacao=Internacao::where('hospital_id',$hid)->get();
            $hospital=Hospital::find($hid);
            return view('internacao.list',compact('hospital','ano','internacao','msg'));
        }
    }
}
