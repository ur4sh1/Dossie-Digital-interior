@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2>{{ $municipio->nome }}</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="javascript:history.back()" role="button">VOLTAR</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selecione o Tipo de Repasse:
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('recursoEstadualCreate',$municipio->id)}}">Recurso Estadual</a>
                        <a class="dropdown-item" href="{{route('recursoFundoEstadualCreate',$municipio->id)}}">Recurso Fundo Estadual</a>
                        <a class="dropdown-item" href="{{route('recursoFundoNacionalCreate',$municipio->id)}}">Recurso Fundo Nacional</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
