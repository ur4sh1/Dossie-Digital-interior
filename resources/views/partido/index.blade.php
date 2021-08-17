@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Partidos</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('partido.create')}}" role="button"><span class="fa fa-plus-square"></span></a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">SIGLA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th class="text-center" scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($partidos as $p)
                <tr>
                    <td>{{$p->sigla}}</td>
                    <td>{{$p->descricao}}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('partido.edit',$p)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$p->id}}" action="{{route('partido.destroy',$p)}}" method="post" class="mr-1 ml-1">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$p->id}}">
                                    <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$p->id}})" type="submit"><span class="fa fa-trash"></span></button>
                                    @include('notification.confirmDeleta')
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
