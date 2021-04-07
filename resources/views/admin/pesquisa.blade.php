@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Municípios</h1>
        </div>



        <table class="table table-striped table-bordered" id="tbpesquisa">
            <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>66546</td>
                <td>ALan Lucas</td>
                <td>564654</td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#tbpesquisa').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                },
                "columnDefs": [{
                    "targets": [-1],
                    "orderable": false
                },
                    {
                        "targets": [0],
                        "visible": false
                    }
                ],

            });
        });
    </script>
@endsection
