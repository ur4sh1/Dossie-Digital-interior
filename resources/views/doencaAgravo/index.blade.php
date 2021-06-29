@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Doenças e Agravos</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencasAgravos.create')}}" role="button">ADICIONAR</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencas.index')}}" role="button">LISTA DE DOENÇAS</a>
            </div>
        </div>
        <table class="table table-sm table-responsive-lg" id="table">
            <thead style="background:lavenderblush">
            <tr>
                <th scope="col" style="width: 120px">DESCRIÇÃO</th>
                <th scope="col">MUNICÍPIO</th>
                <th scope="col">ANO</th>
                <th scope="col" class="text-center">CASOS</th>
                <th scope="col" class="text-center" style="width: 120px">FONTE</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doencasAgravos  as $d)
            <tr>
                <td>{{$d->doencas->nome}}</td>
                <td>{{$d->municipio->nome}}</td>
                <td>{{$d->ano->ano}}</td>
                <td class="text-center">{{$d->casos}}</td>
                <td style="width:100%;table-layout:fixed" class="text-center">{{$d->fonte}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
<style>
    td{
        white-space: nowrap;
    }
</style>
