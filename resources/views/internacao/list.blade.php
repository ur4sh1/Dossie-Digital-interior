@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Internação</h1>
                    <h3>{{$hospital->nome}}</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('internacaoCreate',$hospital->id)}}" role="button"><span class="fa fa-plus-square"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('internacao.index')}}" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <table class="table table-sm table-responsive-lg" id="table">
            <thead style="background:lavenderblush">
            <tr>
                <th scope="col">Ano</th>
                <th scope="col">Média / Dia</th>
                <th scope="col">Média / Mês</th>
                <th class="text-center" scope="col">Fonte</th>
                <th class="text-center" scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($internacao as $in)
                <tr>
                    <td style="width: 10%">{{$in->ano['ano']}}</td>
                    <td style="width: 20%">{{$in->media_dia}}</td>
                    <td style="width: 20%">{{$in->media_mes}}</td>
                    <td style="width: 30%">{{$in->fonte}}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('internacaoEdit',array('id'=>$in->id,'hid'=>$hospital->id))}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$in->id}}" action="{{route('internacaoDestroy',array('id'=>$in->id,'hid'=>$hospital->id))}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$in->id}}">
                                    <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="confirmDelet(event,{{$in->id}})" type="button"><span class="fa fa-trash"></span></button>
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
