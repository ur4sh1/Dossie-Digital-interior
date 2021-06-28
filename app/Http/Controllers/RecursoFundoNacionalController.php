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

class RecursoFundoNacionalController extends Controller
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

    public function createAlternative($id)
    {
        $msg=0;
        $ano=Ano::all();
        $municipio=Municipio::find($id);
        $m=Municipio::find($id);
        $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
        $tipoRecursoNacional=TipoRecursoNacional::all();
        return view('recursoFundoNacional.form',compact('municipio','ano','itemRecursoFundoNacional','tipoRecursoNacional','msg','m'));
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

    /* route recursoFundoNacionalStore */
    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $ano=Ano::all();
            $data=$request->all();
            $data['valor']=str_replace('.',"",$data['valor']);
            $data['valor']=str_replace(',',".",$data['valor']);
            $recursoFundoNacional=RecursoFundoNacional::create($data);

            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoNacional.form',compact('municipio','ano',
                'recursoFundoNacional','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','id','m'));

        }catch (Exception $e){
            $msg=2;
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoNacional.form',compact('municipio','ano',
                'recursoFundoNacional','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','m'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\RecursoFundoNacional  $recursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function show(RecursoFundoNacional $recursoFundoNacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecursoFundoNacional  $recursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursoFundoNacional $recursoFundoNacional)
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
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoNacional.edit',compact('municipio',
                'recursoFundoNacional','itemRecursoFundoNacional','tipoRecursoNacional',
                'ano','msg','m'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoNacional.edit',compact('municipio',
                'recursoFundoNacional','itemRecursoFundoNacional','tipoRecursoNacional',
                'ano','msg','m'));
        }
    }

    public function editValorAlternative($id,$mid)
    {
        try {
            $msg=0;
            $ano=Ano::all();
            $municipio=Municipio::find($mid);
            $recursoFundoNacional=RecursoFundoNacional::find($id);
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoNacional.editValor',compact('municipio','recursoFundoNacional',
                'itemRecursoFundoNacional','tipoRecursoNacional','ano','msg'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::find($mid);
            $recursoFundoNacional=RecursoFundoNacional::find($id);
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoEstadual.editValor',compact('municipio','itemRecursoFundoNacional',
                'tipoRecursoNacional','recursoFundoNacional','ano','msg'));
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecursoFundoNacional  $recursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursoFundoNacional $recursoFundoNacional)
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
            $recursoFundoNacional=RecursoFundoNacional::find($id);
            $recursoFundoNacional->update($data);
            $municipio=Municipio::find($mid);
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$mid)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();
            $ano=Ano::all();

            return view('recursoFundoNacional.edit',compact('tipoRecursoNacional',
                'itemRecursoFundoNacional','recursoFundoNacional','ano','msg','municipio'));
        }catch (Exception $e){
            $msg=2;
            $municipio=Municipio::find($mid);
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$mid)->get();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();
            $ano=Ano::all();

            return view('recursoFundoNacional.edit',compact('recursoFundoNacional',
                'itemRecursoFundoNacional','ano','msg','municipio','tipoRecursoNacional'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecursoFundoNacional  $recursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursoFundoNacional $recursoFundoNacional)
    {
        //
    }
}
