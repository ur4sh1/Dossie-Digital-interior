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

            $data=$request->all();
            $data['valor']=str_replace('.',"",$data['valor']);
            $data['valor']=str_replace(',',".",$data['valor']);
            $recursoFundoEstadual=RecursoFundoEstadual::create($data);

            /*$data=RecursoFundoEstadual::create($request->all());*/

            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('financeiro.list',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','id','m'));

        }catch (Exception $e){
            $msg=2;
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('financeiro.list',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','m'));
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
            $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoEstadual.edit',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional','tipoRecursoNacional',
                'ano','msg','m'));
        }catch (Exception $e){
            $msg=2;
            $ano=Ano::all();
            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoFundoEstadual.edit',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional','tipoRecursoNacional',
                'ano','msg','m'));
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

    /*API ROUTE*/
    public function updateAlternative(Request $request)
    {
        try {
            $recursoFundoEstadual=RecursoFundoEstadual::find($request->id);
            $recursoFundoEstadual->update([
                'valor'=>$request->valor
            ]);
            return $recursoFundoEstadual;
        }catch (Exception $e){
            return $recursoFundoEstadual;
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
