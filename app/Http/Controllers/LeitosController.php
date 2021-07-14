<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Leito;
use Exception;
use Illuminate\Http\Request;

class LeitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $leito=Leito::all();
        $hospital=Hospital::all();
        return view('leito.index',compact('leito','hospital','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $hospital=Hospital::all();
        return view('leito.form',compact('hospital'));
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
            $msg=1;
            $leito=Leito::create($request->all());
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','hospital','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leito  $leito
     * @return \Illuminate\Http\Response
     */
    public function show(Leito $leito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leito  $leito
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        try {
            $msg=0;
            $leito=Leito::find($id);
            $hospital=Hospital::all();
            return view('leito.edit',compact('msg','leito','hospital'));
        }catch (Exception $e){
            $msg=2;
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('msg','leito','hospital'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leito  $leito
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $msg=1;
            $leito=Leito::find($id);
            $leito->update($request->all());
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','msg','hospital'));
        }catch (Exception $e){
            $msg=2;
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','hospital','msg'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leito  $leitos
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $leito=Leito::find($id);
            $leito->delete();
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','hospital','msg'));
        }catch (Exception $e){
            $msg=2;
            $leito=Leito::all();
            $hospital=Hospital::all();
            return view('leito.index',compact('leito','hospital','msg'));
        }
    }
}
