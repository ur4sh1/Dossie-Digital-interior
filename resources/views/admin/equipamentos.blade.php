@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Equipamentos Cadastrados dos Hospitais</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('equipamentos.create')}}" role="button">ADICIONAR EQUIPAMENTO HOSPITAL</a>
                <a class="btn btn-primary mt-1" href="{{route('tipoEquipamentos.index')}}" role="button">LISTA DE EQUIPAMENTOS</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <tr>
                <th scope="col">HOSPITAL</th>
                <th scope="col">EQUIPAMENTO</th>
                <th scope="col">EXISTENTE</th>
                <th scope="col">FUNCIONAL</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($equipamento as $e)
                <tr>
                    <td>{{$e->hospital->nome}}</td>
                    <td>{{$e->tipoEquipamento->nome}}</td>
                    <td>{{$e->existente}}</td>
                    <td>{{$e->funcional}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('equipamentos.edit',$e)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('equipamentos.destroy',$e)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$e->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
