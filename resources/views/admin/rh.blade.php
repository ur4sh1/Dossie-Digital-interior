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
        <table class="table table-sm" id="table">
            <thead>
                <td><h5><b>HOSPITAL</b></h5></td>
                <td><h5><b>CATEGORIA</b></h5></td>
                <td> <h5><b>SESAM ESTATUTÁRIO</b></h5></td>
                <td><h5><b>SESAM <br>CONTRATO</b></h5></td>
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
@endsection



