@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RH</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('rhs.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-md table-sm" id="table">
            <thead style="background:lavenderblush">
                <th scope="col">HOSPITAL</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">SESAM ESTATUTÁRIO</th>
                <th scope="col">SESAM <br>CONTRATO</th>
                <th scope="col">PREFEITURA</th>
                <th scope="col">AÇÕES</th>
            </thead>
            @foreach($rhs as $r)
            <tr>
                <td>{{$r->hospital->nome}}</td>
                <td>{{$r->rhcategoria->nome}}</td>
                <td class="text-center">{{$r->susam_estatutario}}</td>
                <td class="text-center">{{$r->susam_contrato}}</td>
                <td class="text-center">{{$r->prefeitura}}</td>
                <td class="d-flex justify-content-end">
                    <div class="row">
                        <div class="col-3 mr-1">
                            <a class="btn btn-primary  btn-sm ml-1 mb-1" title="EDITAR" href="{{route('rhs.edit',$r)}}" role="button"><span class="fa fa-edit"></span></a>
                        </div>
                        <div class="col-3">
                            <form action="{{route('rhs.destroy',$r)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$r->id}}">
                                <button class="btn btn-danger btn-sm mr-1 ml-1 mb-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection



