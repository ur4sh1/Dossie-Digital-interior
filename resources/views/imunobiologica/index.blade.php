@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Imunobiológicas</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.index')}}" role="button"><span class="fa fa-undo"></span></a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('imunobiologica.create')}}" role="button"><span class="fa fa-plus-square"></span></a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">VACINA</th>
                <th scope="col">AÇÃO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($imunobiologica as $i)
                <tr>
                    <td style="width: 80%">{{$i->nome}}</td>
                    <td class="d-flex justify-content-end">
                        <form id="form{{$i->id}}" action="{{route('imunobiologica.destroy',$i)}}" method="post" class="mr-1 ml-1">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{$i->id}}">
                            <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="confirmDelet(event,{{$i->id}})" type="button"><span class="fa fa-trash"></span></button>
                            @include('notification.confirmDeleta')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

