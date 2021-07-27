@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Serviços</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('servicos.create')}}" role="button">ADICIONAR SERVIÇO HOSPITAL</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoServicos.index')}}" role="button">LISTA DE SERVIÇOS</a>
            </div>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">HOSPITAL</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">ATIVO</th>
                <th class="text-center" scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($servico as $s)
                <tr>
                    <td>{{$s->hospital->nome}}</td>
                    <td>{{$s->tiposervico->nome}}</td>
                    <td>{{$s->ativo==1?'SIM':'NÃO'}}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-sm btn-primary mr-1 ml-1" title="EDITAR" href="{{route('servicos.edit',$s)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$s->id}}" action="{{route('servicos.destroy',$s)}}" method="post" class="mr-1 ml-1">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$s->id}}">
                                    <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$s->id}})" type="button"><span class="fa fa-trash"></span></button>
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
