@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Leitos</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('leito.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-sm" id="table">
            <thead>
                <tr style="background:lavenderblush">
                    <th>HOSPITAL</th>
                    <th>Clínicos</th>
                    <th>Cirúrgicos</th>
                    <th>Obstétrico</th>
                    <th>Pediádrico</th>
                    <th>Outros</th>
                    <th>Suporte Ventilátorio</th>
                    <th>LSV Adulto</th>
                    <th>LSV Pediátrico</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($leito as $l)
                <tr>
                    <td>@foreach($hospital as $h)
                            @if($h->id===$l->hospital_id)
                                {{$h->nome}}
                            @endif
                        @endforeach</td>
                    <td>{{$l->leito_clinico}}</td>
                    <td>{{$l->leito_cirurgico}}</td>
                    <td>{{$l->leito_obstetrico}}</td>
                    <td>{{$l->leito_pediatrico}}</td>
                    <td>{{$l->leito_outro}}</td>
                    <td>{{$l->suporte_ventilatorio}}</td>
                    <td>{{$l->uci_adulto}}</td>
                    <td>{{$l->uci_pediatrico}}</td>
                    <td>
                        <div class="row">
                            <div class="col-4 mr-1">
                                <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('leito.edit',$l)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-4">
                                <form id="form{{$l->id}}" action="{{route('leito.destroy',$l->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$l->id}}">
                                    <button class="btn btn-danger btn-sm mr-1 ml-1" title="EXCLUIR" onclick="confirmDelet(event,{{$l->id}})" type="button"><span class="fa fa-trash"></span></button>
                                    @include('notification.confirmDeleta')
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
