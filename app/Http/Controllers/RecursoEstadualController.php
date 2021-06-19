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

class RecursoEstadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function createAlternative($id)
    {
        $msg=0;
        $ano=Ano::all();
        $municipio=Municipio::find($id);
        $m=Municipio::find($id);
        $itemRecursoEstadual=ItemRecursoEstadual::all();
        return view('recursoEstadual.form',compact('municipio','itemRecursoEstadual','ano','m','msg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
    }

    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;

            $data=$request->all();
            $data['valor']=str_replace('.',"",$data['valor']);
            $data['valor']=str_replace(',',".",$data['valor']);
            $recursoEstadual=RecursoEstadual::create($data);

            /*$data=RecursoEstadual::create($request->all());*/

            $municipio=Municipio::find($id);
            $m=Municipio::find($id);
            $ano=Ano::all();
            $recursoEstadual=RecursoEstadual::where('municipio_id',$id)->get();
            $recursoFundoEstadual=RecursoFundoEstadual::where('municipio_id',$id)->get();
            $recursoFundoNacional=RecursoFundoNacional::where('municipio_id',$id)->get();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $tipoRecursoNacional=TipoRecursoNacional::all();

            return view('recursoEstadual.form',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','id','m','ano'));

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

            return view('recursoEstadual.form',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional',
                'tipoRecursoNacional','msg','m','ano'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function show(RecursoEstadual $recursoEstadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursoEstadual $recursoEstadual)
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

            return view('recursoEstadual.edit',compact('municipio','recursoEstadual','recursoFundoEstadual',
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

            return view('recursoEstadual.edit',compact('municipio','recursoEstadual','recursoFundoEstadual',
                'recursoFundoNacional','itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional','tipoRecursoNacional',
                'ano','msg','m'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursoEstadual $recursoEstadual)
    {
        //
    }

    public function updateAlternative(Request $request)
    {
        try {
            $recursoEstadual=RecursoEstadual::find($request->id);
            $recursoEstadual->update([
                'valor'=>$request->valor
            ]);
            return $recursoEstadual;
        }catch (Exception $e){
            return $recursoEstadual;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecursoEstadual  $recursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursoEstadual $recursoEstadual)
    {
        //
    }
}
