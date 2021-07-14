@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="text-info">
                <h1>Alteração de Cadastro Hospital</h1>
            </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('hospitals.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" class="needs-validation" action="{{route('hospitals.update',$hospital->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-8"><!--nome-->
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" value="{{$hospital->nome}}" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-sm-4"><!--municipio-->
                    <label for="municipio_id"><b>Município</b></label>
                    <select class="form-control" id="municipio_id" name="municipio_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($municipio as $m)
                            <option value="{{$m->id}}" {{$hospital->municipio_id==$m->id?"selected":''}}>{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
            <endereco :municipios="{{$municipio}}" :cep="{{$hospital->cep??'null'}}"></endereco>
            </div>
            <div class="form-row">
                <div class="col-sm-2 mt-2">
                    <label><h5><b>N°</b></h5></label>
                    <input type="text" class="form-control" name="numero" id="numero"value="{{ $hospital->numero }}">
                </div>
                <div class="col-sm-2 mt-2">
                    <label><h5><b>Telefone</b></h5></label>
                    <input type="tel" class="form-control" name="tel" id="tel" value="{{ $hospital->tel }}">
                </div>
                <div class="col-sm-5 mt-2">
                    <label><h5><b>E-mail</b></h5></label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $hospital->email }}">
                </div>
            </div>
            <div class="form-row"><!--buttonsAções-->
                <div class="col-sm-12 mt-3 text-right">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/hospitals"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </form>
    </div>
@endsection



