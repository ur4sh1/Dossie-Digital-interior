@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2><a href="{{route('financeiro.show',$municipio->id)}}">{{ $municipio->nome }}</a> / <a href="{{route('recursoFundoEstadualCreate',$municipio->id)}}">Recurso Fundo Estadual</a> / Editar</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoEstadualCreate',$municipio->id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoEstadualIndex',$municipio->id)}}" role="button">GERENCIAR ITENS</a>
        </div>
        <recurso-fundo-estadual-edit :municipio="{{ $municipio }}" :ano="{{ $ano }}"
                               :itemrecursofundoestadual="{{ $itemRecursoFundoEstadual }}"
                               :recursofundoestadual="{{ $recursoFundoEstadual }}"
                               :url="{{ json_encode(route('recursoFundoEstadualUpdate')) }}"
        ></recurso-fundo-estadual-edit>
    </div>
@endsection
