@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Hospitais</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('hospitals.create')}}" role="button">ADICIONAR</a>
        </div>
        <div class="table table-sm table-responsive-sm">
            <table class="table" id="table">
                <thead style="background:lavenderblush">
                    <tr>
                        <th scope="col"><b>NOME</b></th>
                        <th scope="col"><b>MUNICÍPIO</b></th>
                        <th class="text-center" scope="col"><b>AÇÕES</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hospital as $h)
                    <tr>
                        <td>{{$h->nome}}</td>
                        <td>{{$h->municipio->nome}}</td>
                        <td class="d-flex justify-content-end">
                            <div class="row">
                                <div class="col-3">
                                    <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('hospitals.edit',$h)}}" role="button"><span class="fa fa-edit"></span></a>
                                </div>
                                <div class="col-3">
                                    <form action="{{route('hospitals.destroy',$h->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="${{$h->id}}">
                                        <button class="btn btn-danger btn-sm mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



