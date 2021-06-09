<?php

namespace App\Http\Controllers;

use App\ItemRecursoEstadual;
use App\ItemRecursoFundoEstadual;
use Exception;
use Illuminate\Http\Request;

class ItemRecursoFundoEstadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $msg=0;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));

        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }
    }

    public function indexAlternative($id)
    {
        {
            try {
                $msg=0;
                $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
                return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','id'));

            }catch (Exception $e){
                $msg=2;
                $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
                return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','e','id'));
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
        try {
            $msg=0;
            return view('itemRecursoFundoEstadual.form',compact('msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }
    }

    public function createAlternative($id)
    {
        try {
            $msg=0;
            return view('itemRecursoFundoEstadual.form',compact('msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','e','id'));
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
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            ItemRecursoFundoEstadual::create($data);
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('msg','itemRecursoFundoEstadual'));
        }
    }

    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            ItemRecursoFundoEstadual::create($data);
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('msg','itemRecursoFundoEstadual','id'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ItemRecursoFundoEstadual  $itemRecursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function show(ItemRecursoFundoEstadual $itemRecursoFundoEstadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemRecursoFundoEstadual  $itemRecursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $msg=0;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            return view('itemRecursoFundoEstadual.edit',compact('itemRecursoFundoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }
    }

    public function editAlternative($id,$mid)
    {
        try {
            $msg=0;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            $id=$mid;
            return view('itemRecursoFundoEstadual.edit',compact('itemRecursoFundoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $id=$mid;
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','e','id'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemRecursoFundoEstadual  $itemRecursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            $itemRecursoFundoEstadual->update($data);

            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('msg',$e,'itemRecursoFundoEstadual'));
        }
    }

    public function upAlternative(Request $request, $id,$mid)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            $itemRecursoFundoEstadual->update($data);
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $id=$mid;
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $id=$mid;
            return view('itemRecursoFundoEstadual.index',compact('msg','e','id'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemRecursoFundoEstadual  $itemRecursoFundoEstadual
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            $itemRecursoFundoEstadual->delete();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','e'));
        }
    }

    public function deletAlternative($id,$mid)
    {
        try {
            $msg=1;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::find($id);
            $itemRecursoFundoEstadual->delete();
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $id=$mid;
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
            $id=$mid;
            return view('itemRecursoFundoEstadual.index',compact('itemRecursoFundoEstadual','msg','id'));
        }
    }
}
