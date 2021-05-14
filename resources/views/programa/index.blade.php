@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Programas e Ações Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
                <a class="btn btn-primary btn-sm" href="{{route('programa.create')}}" role="button">ADICIONAR</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <tr>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">SIGLA</th>
                <th scope="col">ANO</th>
                <th scope="col" class="text-center">TETO</th>
                <th scope="col" class="text-center">CRED</th>
                <th scope="col" class="text-center">IMPLANT</th>
                <th scope="col" class="text-center">REPASSE R$</th>
                <th scope="col" class="text-center">AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programas as $p)
                <tr>
                    <td>{{$p->descricao}}</td>
                    <td>{{$p->sigla}}</td>
                    <td>{{$p->ano->ano}}</td>
                    <td class="text-center">{{$p->teto}}</td>
                    <td class="text-center">{{$p->cred}}</td>
                    <td class="text-center">{{$p->implant}}</td>
                    <td class="text-right">{{$p->repasseformat()}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('programa.edit',$p)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('programa.destroy',$p)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$p->id}}">
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
