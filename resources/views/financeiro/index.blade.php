@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Selecione o Município
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($municipio as $m)
                    <a class="dropdown-item" href="{{route('financeiro.show',$m->id)}}">{{$m->nome}}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
