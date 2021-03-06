@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('equipamentos.index')}}">Equipamento</a> / Vincular</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm  mt-1" href="{{route('equipamentos.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <form method="post" action="{{route('equipamentos.store')}}" autocomplete="off">
            @csrf
            <div class="form-row">
                <div class="col-sm-4">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" >{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="nome"><b>EQUIPAMENTO</b></label>
                    <select class="form-control" id="tipo_equipamentos_id" name="tipo_equipamentos_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($tipoEquipamento as $te)
                            <option value="{{$te->id}}" >{{$te->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1">
                    <label for="existente"><b>EXISTENTE</b></label>
                    <input class="form-control text-right" style="width: 80px;" onkeypress="isNumberKey(event)" maxlength="3" id="existente" name="existente" required>
                </div>
                <div class="col-sm-1">
                    <label for="nome"><b>FUNCIONAL</b></label>
                    <input class="form-control text-right" style="width: 80px;" onkeypress="isNumberKey(event)" maxlength="3" id="funcional" name="funcional" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/equipamentos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
