<?php

namespace App\Http\Controllers;

use App\ItemRecursoFundoNacional;
use Exception;
use Illuminate\Http\Request;

class ItemRecursoFundoNacionalController extends Controller
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

    public function indexAlternative($id)
    {
        {
            try {
                $msg=0;
                $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
                return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','id'));

            }catch (Exception $e){
                $msg=2;
                $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
                return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','e','id'));
            }
        }
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
            $msg=0;
            return view('itemRecursoFundoNacional.form',compact('msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','e','id'));
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
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            ItemRecursoFundoNacional::create($data);
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            return view('itemRecursoFundoNacional.index',compact('msg','itemRecursoFundoNacional','id'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ItemRecursoFundoNacional  $itemRecursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function show(ItemRecursoFundoNacional $itemRecursoFundoNacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemRecursoFundoNacional  $itemRecursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemRecursoFundoNacional $itemRecursoFundoNacional)
    {
        //
    }

    public function editAlternative($id,$mid)
    {
        try {
            $msg=0;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::find($id);
            $id=$mid;
            return view('itemRecursoFundoNacional.edit',compact('itemRecursoFundoNacional','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $id=$mid;
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','e','id'));
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemRecursoFundoNacional  $itemRecursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemRecursoFundoNacional $itemRecursoFundoNacional)
    {
        //
    }

    public function upAlternative(Request $request, $id,$mid)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::find($id);
            $itemRecursoFundoNacional->update($data);
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $id=$mid;
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $id=$mid;
            return view('itemRecursoFundoNacional.index',compact('msg','e','id'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemRecursoFundoNacional  $itemRecursoFundoNacional
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemRecursoFundoNacional $itemRecursoFundoNacional)
    {
        //
    }

    public function deletAlternative($id,$mid)
    {
        try {
            $msg=1;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::find($id);
            $itemRecursoFundoNacional->delete();
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $id=$mid;
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
            $id=$mid;
            return view('itemRecursoFundoNacional.index',compact('itemRecursoFundoNacional','msg','id'));
        }
    }
}
