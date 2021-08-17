@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="text-info">
                <h1><a href="{{route('hospitals.index')}}">Hospital</a> / Alteração</h1>
            </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1 btn-sm" href="{{route('hospitals.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <form method="post" class="needs-validation" action="{{route('hospitals.update',$hospital->id)}}" autocomplete="off">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-8"><!--nome-->
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" value="{{$hospital->nome}}" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-sm-4">
                    <label for="municipio_id"><b>Município atual</b></label>
                    <select class="form-control" id="municipio_id" name="municipio_id" disabled required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($municipio as $m)
                            <option value="{{$m->id}}" {{$hospital->municipio_id==$m->id?"selected":''}}>{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
            <endereco :municipios="{{$municipio}}" :cep="{{$hospital->cep??'null'}}"
            ></endereco>
            </div>
            <div class="form-row">
                <div class="col-sm-2 mt-2">
                    <label for="numero"><h5><b>N°</b></h5></label>
                    <input type="text" class="form-control" name="numero" id="numero"value="{{ $hospital->numero }}">
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="tel"><h5><b>Telefone</b></h5></label>
                    <the-mask type="text" class="form-control" name="tel" value="{{ $hospital->tel }}" id="tel" :mask="['(##) ####-####', '(##) #####-####']"></the-mask>
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="email"><h5><b>E-mail</b></h5></label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $hospital->email }}">
                </div>
            </div>
            <div class="form-row"><!--buttonsAções-->
                <div class="col-sm-12 mt-3 text-right">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/hospitals"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </form>
    </div>
@endsection

