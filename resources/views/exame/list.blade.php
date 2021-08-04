@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Exames</h1>
                    <h3>{{$hospital->nome}}</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('exameCreate',$hospital->id)}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm table-responsive-lg" id="table">
            <thead style="background:lavenderblush">
            <tr>
                <th scope="col">Ano</th>
                <th scope="col">Mamografica</th>
                <th scope="col">Ultrassonografia</th>
                <th scope="col">Raio-X</th>
                <th scope="col">Eletrocardiograma</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exame as $ex)
            <tr>
                <td>{{$ex->ano->ano}}</td>
                <td>{{$ex->mamografia}}</td>
                <td>{{$ex->ultrassonografia}}</td>
                <td>{{$ex->raio_x}}</td>
                <td>{{$ex->eletrocardiograma}}</td>
                <td class="d-flex justify-content-end">
                    <div class="row">
                        <div class="col-3 mr-1">
                            <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('exameEdit',array('id'=>$ex->id,'hid'=>$hospital->id))}}" role="button"><span class="fa fa-edit"></span></a>
                        </div>
                        <div class="col-3">
                            <form id="form{{$ex->id}}" action="{{route('exameDestroy',array('id'=>$ex->id,'hid'=>$hospital->id))}}" method="post">
                                @csrf
                                {{--@method('delete')--}}
                                <input type="hidden" name="id" value="{{$ex->id}}">
                                <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="confirmDelet(event,{{$ex->id}})" type="button"><span class="fa fa-trash"></span></button>
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
