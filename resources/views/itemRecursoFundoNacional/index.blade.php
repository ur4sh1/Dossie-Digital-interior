@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RECURSO FUNDO NACIONAL</h1>
                    <h2>ITEM</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoNacionalCreate',$id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoNacionalCreate',$id)}}" role="button">ADICIONAR</a>
        </div>
        <table id="table" class="table table-responsive-lg table-sm">
            <thead>
                <tr style="background:lavenderblush">
                    <th scope="col">Descrição</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($itemRecursoFundoNacional as $irfn)
                <tr>
                    <td style="width: 80%">{{ $irfn->descricao }}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('itemRecursoFundoNacionalEdit',array('id'=>$irfn->id,'mid'=>$id))}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form action="{{route('itemRecursoFundoNacionalDestroy',array('id'=>$irfn->id,'mid'=>$id))}}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="id" value="${{$irfn->id}}">
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
