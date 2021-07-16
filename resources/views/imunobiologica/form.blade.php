@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1><a href="{{route('imunobiologica.index')}}">Imunobiológica</a> / Cadastro</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('imunobiologica.index')}}" role="button">VOLTAR</a>
        </div>
        <form method="post" action="{{route('imunobiologica.store')}}">
            @csrf
            <div class="form-row">
                <div class="col">
                    <label for="nome"><b>NOME</b></label>
                    <input class="form-control text-uppercase" type="text" id="nome" name="nome">
                </div>
            </div>
            <div class="form-row text-right"><!--buttonsAções-->
                <div class="col-sm-12 mt-3">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/coberturaVacinal"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </form>
    </div>
@endsection
