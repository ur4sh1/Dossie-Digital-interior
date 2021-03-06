@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('tipoEquipamentos.index')}}">Equipamento</a> / Alteração</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('tipoEquipamentos.index')}}" role="button">VOLTA</a>
            </div>
        </div>
        <form method="post" action="{{route('equipamentos.update',$equipamento->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-4">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" disabled required>
                        <option value="" disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" {{$equipamento->hospital_id==$h->id?"selected":''}}>{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="nome"><b>EQUIPAMENTO</b></label>
                    <select class="form-control" id="tipo_equipamentos_id" name="tipo_equipamentos_id" disabled required>
                        <option value="" disabled hidden>Selecione</option>
                        @foreach($tipoEquipamento as $te)
                            <option value="{{$te->id}}" {{$equipamento->tipo_equipamentos_id==$te->id?"selected":''}}>{{$te->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1">
                    <label for="existente"><b>EXISTENTE</b></label>
                    <input class="form-control" value="{{$equipamento->existente}}" onkeypress="isNumberKey(event)" style="width: 80px;" maxlength="3" id="existente" name="existente" required>
                </div>
                <div class="col-sm-1">
                    <label for="nome"><b>FUNCIONAL</b></label>
                    <input class="form-control" value="{{$equipamento->funcional}}" onkeypress="isNumberKey(event)" style="width: 80px;" maxlength="3" id="funcional" name="funcional" required>
                </div>
                <div class="col-sm-1 text-center">
                    <label><b>AÇÕES</b></label>
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/equipamentos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection

