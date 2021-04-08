@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Lista de Hospitais Cadastrados</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('hospitals.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm" id="hospitals">
            <thead>
                <td scope="col"><b>NOME</b></td>
                <td scope="col"><b>MUNICÍPIO</b></td>
                <td scope="col"><b>AÇÕES</b></td>
            </thead>
            @foreach($hospital as $h)
            <tr>
                <td>{{$h->nome}}</td>
                <td>{{$h->municipio->nome}}</td>
                <td>
                    <span class="form-inline">
                    <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('hospitals.edit',$h)}}" role="button"><span class="fa fa-edit"></span></a>
                    <form action="{{route('hospitals.destroy',$h->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="${{$h->id}}">
                        <button class="btn btn-danger btn-sm mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                    </form>
                    </span>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#hospitals').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection



