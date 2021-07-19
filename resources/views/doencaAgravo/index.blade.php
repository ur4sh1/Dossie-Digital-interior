@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Doenças e Agravos</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencasAgravos.create')}}" role="button">ADICIONAR</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencas.index')}}" role="button">LISTA DE DOENÇAS</a>
            </div>
        </div>
        <table class="table table-sm table-responsive-md" id="table">
            <thead style="background:lavenderblush">
            <tr>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">MUNICÍPIO</th>
                <th scope="col">ANO</th>
                <th scope="col" class="text-center">CASOS</th>
                <th scope="col" class="text-center">FONTE</th>
                <th scope="col" class="text-center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($doencasAgravos  as $d)
                <tr>
                    <td>{{$d->doencas->nome}}</td>
                    <td>{{$d->municipio->nome}}</td>
                    <td>{{$d->ano->ano}}</td>
                    <td class="text-center">{{$d->casos}}</td>
                    <td class="text-center">{{$d->fonte}}</td>
                    <td class="form-inline">
                        <form action="{{route('doencasAgravos.destroy',$d->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$d->id}}">
                            <button class="btn btn-danger btn-sm ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
