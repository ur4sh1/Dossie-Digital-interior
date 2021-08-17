@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Categorias</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('rhs.index')}}" role="button"><span class="fa fa-undo"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('rhCategorias.create')}}" role="button"><span class="fa fa-plus-square"></span></a>
        </div>
        <table class="table table-responsive-md table-sm" id="table">
            <thead style="background:lavenderblush">
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rhCategorias as $hc)
                <tr>
                    <td style="width: 80%">{{$hc->nome}}</td>
                    <td>
                        <form action="{{route('rhCategorias.destroy',$hc)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$hc->id}}">
                            <button disabled class="btn btn-danger btn-sm mr-1 ml-1 mb-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection



