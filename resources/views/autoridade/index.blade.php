@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Autoridades</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('autoridade.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-md table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">NOME</th>
                <th scope="col">CARGO</th>
                <th scope="col">MUNICÍPIO</th>
                <th scope="col"></th>
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
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('autoridade.edit',$a)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('autoridade.destroy',$a)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$a->id}}">
                                <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
