@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Editar Serviço</h1>
        </div>
        <form method="post" action="{{route('servicos.update',$servico->id)}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-sm-4">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" {{$servico->hospital_id==$h->id?"selected":''}}>{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="tipo_servicos_id"><b>SERVIÇO</b></label>
                    <select class="form-control" id="tipo_servicos_id" name="tipo_servicos_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($tiposervico as $ts)
                            <option value="{{$ts->id}}" {{$servico->tipo_servicos_id==$ts->id?"selected":''}}>{{$ts->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="ativo"><b>ATIVO</b></label>
                    <select class="custom-select" name="ativo" id="ativo" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="1" {{$servico->ativo==1?'selected':''}}>Sim</option>
                        <option value="0" {{$servico->ativo==0?'selected':''}}>Não</option>
                    </select>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/servicos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
