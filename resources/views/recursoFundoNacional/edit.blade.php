@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2><a href="{{route('financeiro.show',$municipio->id)}}">{{ $municipio->nome }}</a> / <a href="{{route('recursoFundoNacionalCreate',$municipio->id)}}">Recurso Fundo Nacional</a> / Editar</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoNacionalCreate',$municipio->id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoNacionalIndex',$municipio->id)}}" role="button">GERENCIAR ITENS</a>
        </div>
        <recurso-fundo-nacional-edit :municipio="{{ $municipio }}" :ano="{{ $ano }}"
                               :itemrecursofundonacional="{{ $itemRecursoFundoNacional }}"
                               :recursofundonacional="{{ $recursoFundoNacional }}"
                               :tiporecursonacional="{{ $tipoRecursoNacional }}"
                               :url="{{ json_encode(route('recursoFundoNacionalUpdate')) }}"
        ></recurso-fundo-nacional-edit>
    </div>
@endsection
