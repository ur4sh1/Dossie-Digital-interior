@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Atenção Básica</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button"><span class="fa fa-home"></span></a>
                <a class="btn btn-primary btn-sm" href="{{route('programa.create')}}" role="button"><span class="fa fa-plus-square"></span></a>
            </div>
        </div>
        <table class="table table-sm table-responsive-lg" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th style="width: 300px" scope="col">DESCRIÇÃO</th>
                <th scope="col">SIGLA</th>
                <th scope="col">ANO</th>
                <th scope="col">MUNICÍPIO</th>
                <th scope="col" class="text-center">TETO</th>
                <th scope="col" class="text-center">CREDENCIADO</th>
                <th scope="col" class="text-center">IMPLANTADO</th>
                <th scope="col" class="text-center">REPASSE</th>
                <th scope="col" class="text-center">AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programas as $p)
                <tr>
                    <td>{{$p->descricao}}</td>
                    <td>{{$p->sigla}}</td>
                    <td>{{$p->ano->ano}}</td>
                    <td>{{$p->municipio->nome}}</td>
                    <td class="text-center">{{$p->teto}}</td>
                    <td class="text-center">{{$p->cred}}</td>
                    <td class="text-center">{{$p->implant}}</td>
                    <td class="text-right">{{$p->repasseformat()}}</td>
                    <td>
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('programa.edit',$p)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$p->id}}" action="{{route('programa.destroy',$p)}}" method="post" class="mr-1 ml-1">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$p->id}}">
                                    <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$p->id}})" type="button"><span class="fa fa-trash"></span></button>
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
