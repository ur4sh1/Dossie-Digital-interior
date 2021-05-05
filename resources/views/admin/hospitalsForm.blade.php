@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastro de Hospital</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('hospitals.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" class="needs-validation" action="{{route('hospitals.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-8 mt-2"><!--nome-->
                    <label for="nome"><h5><b>Nome</b></h5></label>
                    <input type="text" class="form-control text-uppercase" id="nome" name="nome"  required>
                </div>
            </div>
            <endereco :municipios="{{$municipio}}"></endereco>
            <div class="form-row">
                <div class="col-sm-2 mt-2">
                    <label><h5><b>N°</b></h5></label>
                    <input type="text" class="form-control" name="numero" id="numero">
                </div>
                <div class="col-sm-2 mt-2">
                    <label><h5><b>Telefone</b></h5></label>
                    <input type="tel" class="form-control" name="tel" id="tel">
                </div>
                <div class="col-sm-5 mt-2">
                    <label><h5><b>E-mail</b></h5></label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>

            <div class="form-row text-right"><!--buttonsAções-->
                <div class="col-sm-12 mt-3">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/hospitals"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </form>
    </div>
@endsection

