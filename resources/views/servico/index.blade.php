@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Serviços Ofertados Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
                <a class="btn btn-primary btn-sm" href="{{route('servicos.create')}}" role="button">ADICIONAR SERVIÇO HOSPITAL</a>
                <a class="btn btn-primary btn-sm" href="{{route('tipoServicos.index')}}" role="button">LISTA DE SERVIÇOS</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">HOSPITAL</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">ATIVO</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($servico as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->hospital->nome}}</td>
                    <td>{{$s->tiposervico->nome}}</td>
                    <td>{{$s->ativo==1?'SIM':'NÃO'}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-sm btn-primary mr-1 ml-1" title="EDITAR" href="{{route('servicos.edit',$s)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('servicos.destroy',$s)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$s->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
