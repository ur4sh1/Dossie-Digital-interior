@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Cobertura Vacinal</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.create')}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('imunobiologica.index')}}" role="button">VACINAS</a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">IMUNOBIOLÓGICA</th>
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
                <td style="width: 20%">{{$cv->imunobiologica->nome}}</td>
                <td style="width: 20%">{{$cv->municipio->nome}}</td>
                <td class="text-right">{{$cv->porcentagem}}%</td>
                <td class="text-center">{{$cv->ano->ano}}</td>
                <td class="text-center">{{$cv->fonte}}</td>
                <td class="d-flex justify-content-end">
                    <div class="row">
                        <div class="col-3 mr-1">
                            <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR PORCENTAGEM" href="{{route('coberturaVacinal.edit',$cv)}}" role="button"><span class="fa fa-edit"></span></a>
                        </div>
                        <div class="col-6">
                            <form id="form{{$cv->id}}" action="{{route('coberturaVacinal.destroy',$cv)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$cv->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$cv->id}})" type="button"><span class="fa fa-trash"></span></button>
                                @include('notification.confirmDeleta')
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
