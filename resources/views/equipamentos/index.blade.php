@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Equipamentos</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" title="Home" href="{{route('home')}}" role="button"><span class="fa fa-home"></span></a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('equipamentos.create')}}" role="button">VINCULAR EQUIPAMENTO</a>
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoEquipamentos.index')}}" role="button">EQUIPAMENTOS</a>
            </div>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">HOSPITAL</th>
                <th scope="col">EQUIPAMENTO</th>
                <th class="text-center" scope="col">EXISTENTE</th>
                <th class="text-center" scope="col">FUNCIONAL</th>
                <th class="text-center" scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($equipamento as $e)
                <tr>
                    <td>{{$e->hospital->nome}}</td>
                    <td>{{$e->tipoEquipamento->nome}}</td>
                    <td class="text-center">{{$e->existente}}</td>
                    <td class="text-center">{{$e->funcional}}</td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('equipamentos.edit',$e)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$e->id}}" action="{{route('equipamentos.destroy',$e)}}" method="post" class="mr-1 ml-1">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$e->id}}">
                                    <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$e->id}})" type="button"><span class="fa fa-trash"></span></button>
                                    @include('notification.confirmDeleta')
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

