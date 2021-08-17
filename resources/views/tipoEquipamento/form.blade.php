@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('tipoEquipamentos.index')}}">Tipo de Equipamento</a> / Cadastro</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoEquipamentos.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <form method="post" action="{{route('tipoEquipamentos.store')}}" autocomplete="off">
            @csrf
            <label><b>NOME</b></label>
            <div class="form-row">
                <div class="col-sm-8 text-center">
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="form-row mt-1">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/tipoEquipamentos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
