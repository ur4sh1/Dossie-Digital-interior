@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RECURSO FUNDO ESTADUAL</h1>
                    <h2>ITEM</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoEstadualCreate',$id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoEstadualCreate',$id)}}" role="button">ADICIONAR</a>
        </div>
        <table id="table" class="table table-responsive-lg table-sm">
            <thead>
                <tr style="background:lavenderblush">
                    <th scope="col">Descrição</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($itemRecursoFundoEstadual as $irfe)
                <tr>
                    <td style="width: 80%">{{ $irfe->descricao }}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3">
                                <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('itemRecursoFundoEstadualEdit',array('id'=>$irfe->id,'mid'=>$id))}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form action="{{route('itemRecursoFundoEstadualDestroy',array('id'=>$irfe->id,'mid'=>$id))}}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="id" value="${{$irfe->id}}">
                                    <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
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
