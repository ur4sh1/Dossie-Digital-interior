@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Partidos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('partido.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">SIGLA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($partidos as $p)
                <tr>
                    <td>{{$p->sigla}}</td>
                    <td>{{$p->descricao}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('partido.edit',$p)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('partido.destroy',$p)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$p->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
