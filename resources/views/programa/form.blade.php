@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('programa.index')}}">Programas e Ações</a> / Cadastro </h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm" href="{{route('programa.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('programa.store')}}">
            @csrf
            <div class="row ">
                <div class="col-12">
                    <label for="descricao"><b>Descrição</b></label>
                    <input class="form-control" type="text" name="descricao" id="descricao" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="sigla"><b>Sigla</b></label>
                    <input class="form-control" type="text" name="sigla" id="sigla" required>
                </div>
                <div class="col-4">
                    <label for="municipio_id"><b>Município</b></label>
                    <select class="form-control" name="municipio_id" id="municipio_id" required>
                        <option disabled selected>Selecione</option>
                        @foreach($municipio as $m)
                            <option value="{{$m->id}}">{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="ano_id"><b>Ano</b></label>
                    <select class="form-control" style="width: 100px" name="ano_id" id="ano_id" required>
                        <option disabled selected>Selecione</option>
                        @foreach($ano as $a)
                            <option value="{{$a->id}}">{{$a->ano}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="teto"><b>Teto</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" type="text" name="teto" id="teto">
                </div>
                <div class="col-3">
                    <label for="cred"><b>Crédito</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" type="text" name="cred" id="cred">
                </div>
                <div class="col-3">
                    <label for="implant"><b>Implantado</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" type="text" name="implant" id="implant">
                </div>
                <div class="col-3">
                    <label for="repasse"><b>Repasse</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" type="text" name="repasse" id="repasse">
                </div>
            </div>
            <div class="form-row text-right"><!--buttonsAções-->
                <div class="col-sm-12 mt-3">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/programa"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </form>
    </div>
@endsection
<script>
    function isNumberKey(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9,',','.']/.test(char))){
            evt.preventDefault();
        }
    }
</script>
