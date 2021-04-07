@extends('layouts.app')

@section('content')
    <div class="container">
        <example-component/>
        <div class="text-info">
            <h1>Lista de Partidos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('partidos.create')}}" role="button">ADICIONAR</a>
        </div>

        <table class="table table-sm" id="partidos">
            <thead>
            <tr>
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
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('partidos.edit',$p)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('partidos.destroy',$p)}}" method="post" class="mr-1 ml-1">
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.24/b-1.7.0/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#partidos').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"

                }
        })});
    </script>
@endsection
