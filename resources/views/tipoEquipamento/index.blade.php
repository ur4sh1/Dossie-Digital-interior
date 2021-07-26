@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Tipo de Equipamentos</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('equipamentos.index')}}" role="button">VOLTAR</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoEquipamentos.create')}}" role="button">ADICIONAR EQUIPAMENTO</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th class="text-center" scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoEquipamento as $te)
                <tr>
                    <td style="width: 90%">{{$te->nome}}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col">
                                <form id="form{{$te->id}}" action="{{route('tipoEquipamentos.destroy',$te)}}" method="post" class="mr-1 ml-1">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$te->id}}">
                                    <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$te->id}})" type="button"><span class="fa fa-trash"></span></button>
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
