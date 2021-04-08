@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Veículos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('veiculos.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm" id="veiculos">
            <thead>
            <td scope="col"><b>HOSPITAL</b></td>
            <td scope="col"><b>ADMINISTRATIVOS</b></td>
            <td scope="col"><b>AMBULÂNCIA TERRESTRE</b></td>
            <td scope="col"><b>AMBULÂNCIA FLUVIAL</b></td>
            <td scope="col"><b>AÇÕES</b></td>
            </thead>
            @foreach($veiculo as $v)
                <tr>
                    <td>{{$v->hospital->nome}}</td>
                    <td>Existente: {{$v->administrativo_existente}} Funcional: {{$v->administrativo_funcional}}</td>
                    <td>Existente: {{$v->ambulancia_terrestre_existente}} Funcional: {{$v->ambulancia_terrestre_funcional}}</td>
                    <td>Existente: {{$v->ambulancia_fluvial_existente}} Funcional: {{$v->ambulancia_fluvial_funcional}}</td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary mr-1 ml-1" title="EDITAR" href="{{route('veiculos.edit',$v)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('veiculos.destroy',$v)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$v->id}}">
                                <button class="btn btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#veiculos').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection
