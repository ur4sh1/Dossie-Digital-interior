@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>CATEGORIAS</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('rhCategorias.create')}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary btn-sm" href="{{route('rhs.index')}}" role="button">VOLTAR</a>
        </div>
        <div class="form-row mt-4">
            <div class="col-sm-4">
                <h5><b>NOME</b></h5>
            </div>
            <div class="col-sm-4">
                <h5><b>AÇÕES</b></h5>
            </div>
        </div>
        @foreach($rhCategorias as $hc)
            <div class="form-row">
                <div class="col-sm-4">
                    {{$hc->nome}}
                </div>
                <div class="col-sm-4">
                    <div class="form-inline">
                        <a class="btn btn-primary btn-sm ml-1 mb-1" title="EDITAR" href="{{route('rhCategorias.edit',$hc)}}" role="button"><span class="fa fa-edit"></span></a>
                        <form action="{{route('rhCategorias.destroy',$hc)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$hc->id}}">
                            <button class="btn btn-danger btn-sm mr-1 ml-1 mb-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection



