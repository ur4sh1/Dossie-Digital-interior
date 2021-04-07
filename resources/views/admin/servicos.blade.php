@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Serviços Ofertados Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('servicos.create')}}" role="button">ADICIONAR SERVIÇO HOSPITAL</a>
                <a class="btn btn-primary mt-1" href="{{route('tipoServicos.index')}}" role="button">LISTA DE SERVIÇOS</a>
            </div>
        </div>
        <table class="table table-sm" id="servicos">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">HOSPITAL</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">ATIVO</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($servico as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->hospital->nome}}</td>
                    <td>{{$s->tiposervico->nome}}</td>
                    <td>{{$s->ativo?"SIM":"NÃO"}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-sm btn-primary mr-1 ml-1" title="EDITAR" href="{{route('servicos.edit',$s)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('servicos.destroy',$s)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$s->id}}">
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
            $('#servicos').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection
