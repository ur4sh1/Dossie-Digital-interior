@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>COBERTURA VACINAL</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.create')}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary btn-sm mt-1" href="" role="button">VACINAS</a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">VACINA</th>
                <th scope="col">MUNICÍPIO</th>
                <th scope="col" class="text-center">COBERTURA</th>
                <th scope="col" class="text-center">ANO</th>
                <th scope="col" class="text-center">FONTE</th>
                <th scope="col" class="text-center">AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($coberturaVacinal as $cv)
            <tr>
                <td>{{$cv->imunobiologica->nome}}</td>
                <td>{{$cv->municipio->nome}}</td>
                <td class="text-right">{{$cv->porcentagem}}%</td>
                <td class="text-center">{{$cv->ano->ano}}</td>
                <td class="text-center">{{$cv->fonte}}</td>
                <td>
                    <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR PORCENTAGEM" href="{{route('coberturaVacinal.edit',$cv)}}" role="button"><span class="fa fa-edit"></span></a>
                        <form action="{{route('coberturaVacinal.destroy',$cv)}}" method="post" class="mr-1 ml-1">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$cv->id}}">
                            <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                    </span>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
