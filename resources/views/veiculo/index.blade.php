@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Veículos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('veiculo.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <td scope="col"><b>HOSPITAL</b></td>
            <td scope="col" class="text-center"><b>ADMINISTRATIVOS</b><br>Existente | Funcional</td>
            <td scope="col" class="text-center"><b>AMBULÂNCIA TERRESTRE</b><br>Existente | Funcional</td>
            <td scope="col" class="text-center"><b>AMBULÂNCIA FLUVIAL</b><br>Existente | Funcional</td>
            <td scope="col" class="text-center"><b>AÇÕES</b></td>
            </thead>
            @foreach($veiculo as $v)
                <tr>
                    <td>{{$v->hospital->nome}}</td>
                    <td class="text-center">{{$v->administrativo_existente}} | {{$v->administrativo_funcional}}</td>
                    <td class="text-center">{{$v->ambulancia_terrestre_existente}} | {{$v->ambulancia_terrestre_funcional}}</td>
                    <td class="text-center">{{$v->ambulancia_fluvial_existente}} | {{$v->ambulancia_fluvial_funcional}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary mr-1 ml-1" title="EDITAR" href="{{route('veiculo.edit',$v)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('veiculo.destroy',$v)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$v->id}}">
                                <button class="btn btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
