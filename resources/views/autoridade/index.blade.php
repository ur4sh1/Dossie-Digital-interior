@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Autoridades</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('autoridade.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-md table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">NOME</th>
                <th scope="col">CARGO</th>
                <th scope="col">MUNICÍPIO</th>
                <th class="text-center" scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($autoridades as $a)
                <tr>
                    <td>{{$a->nome}} <!--nome-->
                    </td>
                    <td>{{$a->cargo->nome}} <!--cargo-->
                    </td>
                    <td>{{$a->municipio->nome}} <!--municipio-->
                    </td>
                    <td class="d-flex justify-content-end">
                        <div class="row">
                            <div class="col-3 mr-1">
                                <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('autoridade.edit',$a)}}" role="button"><span class="fa fa-edit"></span></a>
                            </div>
                            <div class="col-3">
                                <form id="form{{$a->id}}" action="{{route('autoridade.destroy',$a)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$a->id}}">
                                    <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="confirmDelet(event,{{$a->id}})" type="button"><span class="fa fa-trash"></span></button>
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
