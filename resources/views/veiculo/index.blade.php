@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Veículos</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('veiculo.create')}}" role="button">ADICIONAR</a>
        </div>
        <div class="mb-2"><i>legenda: <span class="badge badge-info">Existente</span> | <span class="badge badge-success">Funcionando</span></i></div>
        <table class="table table-responsive-lg table-sm mt-2" id="table">
            <thead style="background:lavenderblush">
                <th scope="col"><b>HOSPITAL</b></th>
                <th scope="col" class="text-center">ADMINISTRATIVOS</th>
                <th scope="col" class="text-center">AMBULÂNCIA TERRESTRE</th>
                <th scope="col" class="text-center">AMBULÂNCIA FLUVIAL</th>
                <th scope="col" class="text-center">AÇÕES</th>
            </thead>
            @foreach($veiculo as $v)
                <tr>
                    <td>{{$v->hospital->nome}}</td>
                    <td class="text-center"><span class="badge badge-primary" data-toggle="tooltip" data-placement="top" title="Existente">{{$v->administrativo_existente}}</span> | <span class="badge badge-success">{{$v->administrativo_funcional}}</span></td>
                    <td class="text-center"><span class="badge badge-primary">{{$v->ambulancia_terrestre_existente}}</span> | <span class="badge badge-success">{{$v->ambulancia_terrestre_funcional}}</span></td>
                    <td class="text-center"><span class="badge badge-primary">{{$v->ambulancia_fluvial_existente}}</span> | <span class="badge badge-success">{{$v->ambulancia_fluvial_funcional}}</span></td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-sm btn-primary mr-1 ml-1" title="EDITAR" href="{{route('veiculo.edit',$v)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('veiculo.destroy',$v)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$v->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
