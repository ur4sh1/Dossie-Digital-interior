@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Doenças</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencas.create')}}" role="button">ADICIONAR</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencasAgravos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($doencas as $d)
                <tr>
                    <td>{{$d->nome}}</td>
                    <td>
                        <span class="form-inline">
<!--                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('doencas.edit',$d)}}" role="button"><span class="fa fa-edit"></span></a>-->
                            <form action="{{route('doencas.destroy',$d)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$d->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
