@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Doenças e Agravos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
                <a class="btn btn-primary btn-sm mt-1" href="" role="button">LISTA DE EQUIPAMENTOS</a>
            </div>
        </div>
        <table id="table" class="table-responsive-sm">
            <thead>
            <tr>
                <td>DESCRIÇÃO</td>
                <td>MUNICÍPIO</td>
                <td>ANO</td>
                <td class="text-center">CASOS</td>
                <td class="text-center">FONTE</td>
            </tr>
            </thead>
            <tbody>
            @foreach($doencasAgravos  as $d)
            <tr>
                <td>{{$d->doencas->nome}}</td>
                <td>{{$d->municipio->nome}}</td>
                <td>{{$d->ano->ano}}</td>
                <td class="text-right">{{$d->casos}}</td>
                <td>{{$d->fonte}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
