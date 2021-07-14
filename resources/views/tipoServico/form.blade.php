@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('tipoServicos.index')}}">Tipo de Serviço</a> / Cadastro</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoServicos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('tipoServicos.store')}}">
            @csrf
            <label for="nome">NOME DO SERVIÇO</label>
            <div class="form-row">
                <div class="col-sm-8">
                    <input class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-sm-4 text-left">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/tipoServicos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
