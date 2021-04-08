@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Tipo de Equipamentos</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('tipoEquipamentos.create')}}" role="button">ADICIONAR EQUIPAMENTO</a>
                <a class="btn btn-primary mt-1" href="{{route('equipamentos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <table class="table table-sm" id="tipoequipa">
            <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($tipoEquipamento as $te)
                <tr>
                    <td>{{$te->nome}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('tipoEquipamentos.edit',$te)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('tipoEquipamentos.destroy',$te)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$te->id}}">
                                <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#tipoequipa').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection
