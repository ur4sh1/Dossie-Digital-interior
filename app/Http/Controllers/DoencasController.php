<?php

namespace App\Http\Controllers;

use App\Doencas;
use Exception;
use Illuminate\Http\Request;

class DoencasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $msg=0;
        $doencas=Doencas::all();
        return view('doenca.index',compact('doencas','msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('doenca.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        try {
            $msg=1;
            $doencas=Doencas::create($request->all());
            $doencas=Doencas::all();
            /*return redirect()->route('doencas.index');*/
            return view('doenca.index',compact('doencas','msg'));
        }catch (Exception $e){
            $msg=2;
            $doencas=Doencas::all();
            return view('doenca.index',compact('doencas','msg'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function show(Doencas $doencas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function edit(Doencas $doencas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doencas $doencas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doencas  $doencas
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function destroy($id)
    {
        try {
            $msg=1;
            $doencas=Doencas::find($id);
            $doencas->delete();
            $doencas=Doencas::all();
            return view('doenca.index',compact('doencas','msg'));
        }catch (Exception $e){
            $msg=2;
            $doencas=Doencas::all();
            return view('doenca.index',compact('doencas','msg'));
        }
    }
}
