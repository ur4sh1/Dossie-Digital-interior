<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Rh;
use App\RhCategoria;
use Exception;
use Illuminate\Http\Request;

class RhController extends Controller
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
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $hospital=Hospital::all();
        $rhCategoria=RhCategoria::all();
        return view('rh.form',compact('hospital','rhCategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        try {
            $rh=Rh::create($request->all());
            $msg=1;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Http\Response
     */
    public function show(Rh $rh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $hospital=Hospital::all();
        $rhCategoria=RhCategoria::all();
        $rh=Rh::find($id);
        return view('rh.edit',compact('hospital','rhCategoria','rh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rh  $rh
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $rh=Rh::find($id);
            $rh->update($request->all());
            $msg=1;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rh  $rh
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $rh=Rh::find($id);
            $rh->delete();
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $rhCategorias=RhCategoria::all();
            $rhs=Rh::all();
            $hospital=Hospital::all();
            return view('rh.index',compact('rhs','rhCategorias','hospital','msg'));
        }
    }
}
