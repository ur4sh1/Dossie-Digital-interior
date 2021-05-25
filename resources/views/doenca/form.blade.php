@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastrar Doença</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm  mt-1" href="{{route('doencas.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('doencas.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-6">
                    <label for="nome"><b>NOME</b></label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="form-row mt-3 text-right">
                <div class="col-sm-12">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/doencas"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
