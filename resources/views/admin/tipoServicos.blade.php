@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Tipos de Serviços</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('tipoServicos.create')}}" role="button">ADICIONAR SERVIÇO</a>
                <a class="btn btn-primary mt-1" href="{{route('servicos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($tipoServicos as $ts)
                <tr>
                    <td>{{$ts->id}}</td>
                    <td>{{$ts->nome}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('tipoServicos.edit',$ts)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('tipoServicos.destroy',$ts)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$ts->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
