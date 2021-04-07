@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RH</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('rhs.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm" id="rh">
            <thead>
                <td><h5><b>HOSPITAL</b></h5></td>
                <td><h5><b>CATEGORIA</b></h5></td>
                <td> <h5><b>SUSAM ESTATUTÁRIO</b></h5></td>
                <td><h5><b>SUSAM <br>CONTRATO</b></h5></td>
                <td><h5><b>PREFEITURA</b></h5></td>
                <td><h5><b>AÇÕES</b></h5></td>
            </thead>
            @foreach($rhs as $r)
            <tr>
                <td>{{$r->hospital->nome}}</td>
                <td>{{$r->rhcategoria->nome}}</td>
                <td>{{$r->susam_estatutario}}</td>
                <td>{{$r->susam_contrato}}</td>
                <td>{{$r->prefeitura}}</td>
                <td>
                    <span class="form-inline">
                        <a class="btn btn-primary  btn-sm ml-1 mb-1" title="EDITAR" href="{{route('rhs.edit',$r)}}" role="button"><span class="fa fa-edit"></span></a>
                        <form action="{{route('rhs.destroy',$r)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$r->id}}">
                            <button class="btn btn-danger btn-sm mr-1 ml-1 mb-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
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
            $('#rh').DataTable({
                "searching": true,
                "aaSorting": [[1, "asc"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            })});
    </script>
@endsection



