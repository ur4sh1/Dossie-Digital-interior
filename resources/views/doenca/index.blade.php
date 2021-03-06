@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Doenças</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencas.create')}}" role="button"><span class="fa fa-plus-square"></span></a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('doencasAgravos.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <table class="table table-sm" id="table">
            <thead>
                <tr style="background:lavenderblush">
                    <th scope="col">NOME</th>
                    <th class="text-center" scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
            @foreach($doencas as $d)
                <tr>
                    <td>{{$d->nome}}</td>
                    <td class="d-flex justify-content-end">
                    <!--                        <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('doencas.edit',$d)}}" role="button"><span class="fa fa-edit"></span></a>-->
                        <form id="form{{$d->id}}" action="{{route('doencas.destroy',$d)}}" method="post" class="mr-1 ml-1">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{$d->id}}">
                            <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$d->id}})" type="button"><span class="fa fa-trash"></span></button>
                            @include('notification.confirmDeleta')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
