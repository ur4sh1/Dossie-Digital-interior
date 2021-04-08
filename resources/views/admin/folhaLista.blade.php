@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>FOLHA</h1>
                    <h3>{{$hospital->nome}}</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
<!--            <form method="post" action="{{--{{action('FolhaController@teste',$hospital->id)}}--}}">
                @csrf
                <button class="btn btn-primary" type="submit" role="button">ADICIONAR</button>
            </form>-->
            <a class="btn btn-primary" href="{{route('folhas.create')}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary" href="{{route('folhas.index')}}" role="button">VOLTAR</a>
        </div>
        @if($folha->count()==0)
            <i>Informações não Cadastradas</i>
        @else
            <table class="table-sm display" id="folha">
                <thead>
                <th scope="col">PROFISSIONAL</th>
                <th scope="col" class="text-center">SALÁRIO UNITÁRIO</th>
                <th scope="col">SUSAM</th>
                <th scope="col">Valor em Folha</th>
                <th scope="col">Ações</th>
                </thead>
                @foreach($folha as $f)
                    <tr>
                        <td>{{$f->profissional->nome}}</td>
                        <td class="text-right">{{number_format($f->salario_inicial,2,',','.')}}</td>
                        <td class="text-center">{{$f->SUSAM}}</td>
                        <td class="text-right">{{{number_format($f->total,2,',','.')}}}</td>
                        <td style="width: 100px">
                            <span class="row ml-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('folhas.edit',$f)}}" role="button"><span class="fa fa-edit"></span></a>
                                <form action="{{route('folhas.destroy',$f)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="${{$f->id}}">
                                    <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
    <script>
        $(document).ready(function () {
            $('#folha').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection
