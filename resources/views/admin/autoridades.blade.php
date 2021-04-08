@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="text-info">
            <h1>Lista de Autoridades Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('autoridades.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm" id="autoridades">
            <thead>
            <tr>
                <th colspan="2" scope="col">NOME</th>
                <th scope="col">CARGO</th>
                <th scope="col">MUNICÍPIO</th>
            </tr>
            </thead>
            @foreach($autoridades as $a)
                <tr>
                    <td>{{$a->nome}} <!--nome-->
                    </td>
                    <td>{{$a->cargo->nome}} <!--cargo-->
                    </td>
                    <td>{{$a->municipio->nome}} <!--municipio-->
                    </td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('autoridades.edit',$a)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('autoridades.destroy',$a)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$a->id}}">
                                <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#autoridades').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
        })});
    </script>
@endsection
