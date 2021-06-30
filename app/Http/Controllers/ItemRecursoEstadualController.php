<?php

namespace App\Http\Controllers;

use App\Ano;
use App\ItemRecursoEstadual;
use Exception;
use Illuminate\Http\Request;

class ItemRecursoEstadualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        try {
            $msg=0;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg'));

        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg',$e));
        }
    }

    public function indexAlternative($id)
    {
        {
            try {
                $msg=0;
                $itemRecursoEstadual=ItemRecursoEstadual::all();
                return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','id'));

            }catch (Exception $e){
                $msg=2;
                $itemRecursoEstadual=ItemRecursoEstadual::all();
                return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','e','id'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        try {
            $msg=0;
            return view('itemRecursoEstadual.form',compact('msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','e'));
        }
    }

    public function createAlternative($id)
    {
        try {
            $msg=0;
            return view('itemRecursoEstadual.form',compact('msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','e','id'));
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
            ItemRecursoEstadual::create($data);
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadualIndex',compact('itemRecursoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadualIndex',compact('msg','itemRecursoEstadual'));
        }
    }

    public function storeAlternative(Request $request,$id)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            ItemRecursoEstadual::create($data);
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('msg','itemRecursoEstadual','id'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemRecursoEstadual  $itemRecursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function show(ItemRecursoEstadual $itemRecursoEstadual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemRecursoEstadual  $itemRecursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $msg=0;
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            return view('itemRecursoEstadual.edit',compact('itemRecursoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','e'));
        }
    }

    public function editAlternative($id,$mid)
    {
        try {
            $msg=0;
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            $id=$mid;
            return view('itemRecursoEstadual.edit',compact('itemRecursoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $id=$mid;
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','e','id'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemRecursoEstadual  $itemRecursoEstadual
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            $itemRecursoEstadual->update($data);
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            return view('itemRecursoEstadual.index',compact('msg','e'));
        }
    }

    public function upAlternative(Request $request, $id,$mid)
    {
        try {
            $msg=1;
            $data=$request->all();
            $encoding='UTF-8';
            $data['descricao']=mb_strtoupper($data['descricao'],$encoding);
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            $itemRecursoEstadual->update($data);
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $id=$mid;
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $id=$mid;
            return view('itemRecursoEstadual.index',compact('msg','e','id'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemRecursoEstadual  $itemRecursoEstadual
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            $itemRecursoEstadual->delete();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg'));
        }
    }

    public function deletAlternative($id,$mid)
    {
        try {
            $msg=1;
            $itemRecursoEstadual=ItemRecursoEstadual::find($id);
            $itemRecursoEstadual->delete();
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $id=$mid;
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','id'));
        }catch (Exception $e){
            $msg=2;
            $itemRecursoEstadual=ItemRecursoEstadual::all();
            $id=$mid;
            return view('itemRecursoEstadual.index',compact('itemRecursoEstadual','msg','id'));
        }
    }
}
