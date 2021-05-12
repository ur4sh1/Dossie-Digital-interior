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
            <a class="btn btn-primary btn-sm" href="{{route('rhCategorias.index')}}" role="button">VOLTAR</a>
        </div>
        <form method="post" action="{{route('rhCategorias.store')}}">
            @csrf
            <div class="form-row mt-4">
                <div class="col-sm-4">
                    <h5><b>NOME</b></h5>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/rhCategorias"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection



