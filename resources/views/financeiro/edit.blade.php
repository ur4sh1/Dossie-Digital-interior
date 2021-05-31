@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-info">
                <h1>REPASSE FINANCEIRO</h1>
                <h2>{{ $municipio->nome }}</h2>
            </div>
        </div>
    </div>
    <div class="text-right mb-2">
        <a class="btn btn-primary btn-sm" href="{{route('financeiro.index')}}" role="button">VOLTAR</a>
    </div>
@endsection
