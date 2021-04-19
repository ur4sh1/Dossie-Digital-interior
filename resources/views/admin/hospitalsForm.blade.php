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
                <div class="col-sm-8"><!--nome-->
                    <label for="nome"><h5><b>Nome</b></h5></label>
                    <input type="text" class="form-control text-uppercase" id="nome" name="nome"  required>
                </div>
                <div class="col-sm-4"><!--municipio-->
                    <label for="municipio_id"><h5><b>Município</b></h5></label>
                    <select class="form-control" id="municipio_id" name="municipio_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($municipio as $m)
                            <option value="{{$m->id}}">{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <label for="nome"><h5><b>Média Internação</b></h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="nome"><h5><b>Média Dia</b></h5></label>
                    <the-mask type="text" style="width: 100px;" class="form-control" id="media_dia" name="media_dia" :mask="['##']" required></the-mask>
                </div>
                <div class="col-sm-3">
                     <label for="nome"><h5><b>Média Mês</b></h5></label>
                    <the-mask type="text" style="width: 100px;" class="form-control" id="media_mes" name="media_mes" :mask="['###']" required></the-mask>
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



