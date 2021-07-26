@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RECURSO ESTADUAL</h1>
                    <h2><a href="{{route('itemRecursoEstadualIndex',$id)}}">ITEM</a> / Adicionar</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoEstadualIndex',$id)}}"  role="button">VOLTAR</a>
        </div>
        <form action="{{route('itemRecursoEstadualStore',$id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="descricao"><b>ITEM DESCRIÇÃO</b></label>
                    <input class="form-control" type="text" id="descricao" name="descricao" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-right">
                    <button class="btn btn-sm btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-sm btn-danger" title="CANCELAR" href="{{route('itemRecursoEstadualIndex',$id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
