<?php

namespace App\Http\Controllers;

use App\Ano;
use App\ItemRecursoEstadual;
use App\ItemRecursoFundoEstadual;
use App\ItemRecursoFundoNacional;
use App\Municipio;
use App\RecursoEstadual;
use App\RecursoFundoEstadual;
use App\RecursoFundoNacional;
use App\TipoRecursoNacional;
use Exception;
use Illuminate\Http\Request;

class RecursoFundoEstadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
/* route recursoFundoEstadualCreate */
    public function createAlternative($id)
    {
        $msg=0;
        $ano=Ano::all();
        $municipio=Municipio::find($id);
        $m=Municipio::find($id);
        $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
        return view('recursoFundoEstadual.form',compact('municipio','ano','itemRecursoFundoEstadual','msg','m'));
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

    /* route recursoFundoEstadualStore */
    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $ano=Ano::all();
            $data=$request->all();
            $data['valor']=str_replace('.',"",$data['valor']);
            $data['valor']=str_replace(',',".",$data['valor']);
            $recursoFundoEstadual=RecursoFundoEstadual::create($data);

            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

            return view('recursoFundoEstadual.form',compact('municipio','recursoFundoEstadual',
                'itemRecursoFundoEstadual','msg','id','m','ano'));

        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

            return view('recursoFundoEstadual.form',compact('municipio','recursoFundoEstadual',
                'itemRecursoFundoEstadual', 'msg','m','ano'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RecursoFundoEstadual  $recursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function show(RecursoFundoEstadual $recursoFundoEstadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecursoFundoEstadual  $recursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursoFundoEstadual $recursoFundoEstadual)
    {
        //
    }

    public function editAlternative($id)
    {
        try {
            $msg=0;
            $ano=Ano::all();
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

            return view('recursoFundoEstadual.edit',compact('municipio','recursoFundoEstadual',
                'itemRecursoFundoEstadual','ano','msg','m'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

            return view('recursoFundoEstadual.edit',compact('municipio','recursoFundoEstadual',
                'itemRecursoFundoEstadual','ano','msg','m'));
        }

    }public function editValorAlternative($id,$mid)
{
    try {
        $msg=0;
        $ano=Ano::all();
        $municipio=Municipio::find($mid);
        $recursoFundoEstadual=RecursoFundoEstadual::find($id);
        $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

        return view('recursoFundoEstadual.editValor',compact('municipio','recursoFundoEstadual',
            'itemRecursoFundoEstadual','ano','msg'));
    }catch (Exception $e){
        $msg=2;
        $ano=Ano::all();
        $municipio=Municipio::find($mid);
        $recursoFundoEstadual=RecursoFundoEstadual::find($id);
        $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();

        return view('recursoFundoEstadual.editValor',compact('municipio','recursoFundoEstadual',
            'itemRecursoFundoEstadual','ano','msg'));
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecursoFundoEstadual  $recursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursoFundoEstadual $recursoFundoEstadual)
    {
        //
    }

    public function updateAlternative(Request $request,$id,$mid)
    {
        try {
            $msg=1;
            $data=$request->all();
            $data['valor']=str_replace('.',"",$data['valor']);
            $data['valor']=str_replace(',',".",$data['valor']);
            $recursoFundoEstadual=RecursoFundoEstadual::find($id);
            $recursoFundoEstadual->update($data);
            $municipio=Municipio::find($mid);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$mid)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $ano=Ano::all();

            return view('recursoFundoEstadual.edit',compact('recursoFundoEstadual',
                'itemRecursoFundoEstadual','ano','msg','municipio'));
        }catch (Exception $e){
            $msg=2;
            $municipio=Municipio::find($mid);
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$mid)->get();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $ano=Ano::all();

            return view('recursoFundoEstadual.edit',compact('recursoFundoEstadual',
                'itemRecursoFundoEstadual','ano','msg','municipio'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecursoFundoEstadual  $recursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursoFundoEstadual $recursoFundoEstadual)
    {
        //
    }
}
