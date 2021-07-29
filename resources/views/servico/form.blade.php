@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('servicos.index')}}">Serviço</a> / Cadastro</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('servicos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('servicos.store')}}" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="tipo_servicos_id"><b>SERVIÇO</b></label>
                    <select class="form-control" id="tipo_servicos_id" name="tipo_servicos_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($tiposervico as $ts)
                            <option value="{{$ts->id}}">{{$ts->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="ativo"><b>ATIVO</b></label>
                    <select class="custom-select" name="ativo" id="ativo" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/servicos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
