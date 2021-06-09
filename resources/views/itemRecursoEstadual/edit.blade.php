@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1 class="teste">EDITAR ITEM</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="javascript:history.back()"  role="button">VOLTAR</a>
        </div>
        <form action="{{route('itemRecursoEstadualUpdate',array('id'=>$itemRecursoEstadual->id,'mid'=>$id))}}" method="post">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-12">
                    <label for="descricao"><b>ITEM DESCRIÇÃO</b></label>
                    <input value="{{ $itemRecursoEstadual->descricao }}" class="form-control" type="text" id="descricao" name="descricao">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-right">
                    <button class="btn btn-sm btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-sm btn-danger" title="CANCELAR" href="javascript:history.back()"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
