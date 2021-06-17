@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2>{{ $municipio->nome }} / Recurso Estadual</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoEstadualCreate',$municipio->id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoEstadualIndex',$municipio->id)}}" role="button">GERENCIAR ITENS</a>
        </div>
        <recurso-estadual-edit :municipio="{{ $municipio }}" :ano="{{ $ano }}"
                               :itemrecursoestadual="{{ $itemRecursoEstadual }}"
                               :recursoestadual="{{ $recursoEstadual }}"
                               :url="{{ json_encode(route('recursoEstadualUpdate')) }}"
        ></recurso-estadual-edit>
    </div>
@endsection
