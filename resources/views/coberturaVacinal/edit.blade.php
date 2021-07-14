@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1><a href="{{route('coberturaVacinal.index')}}">Cobertura Vacinal</a> / Alteração</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.index')}}" role="button">LISTA</a>
            <a class="btn btn-primary btn-sm mt-1" href="" role="button">VACINAS</a>
        </div>
        <form method="post" action="{{route('coberturaVacinal.update',$coberturaVacinal->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="imunobiologica_id"><b>VACINA</b></label>
                        <select class="form-control" id="imunobiologica_id" name="imunobiologica_id" required disabled>
                            @foreach($imunobiologica as $i)
                                <option value="{{$i->id}}" {{$coberturaVacinal->imunobiologica_id==$i->id?'selected':''}}>{{$i->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="municipio_id"><b>MUNICÍPIO</b></label>
                        <select class="form-control" id="municipio_id" name="municipio_id" required disabled>
                            @foreach($municipio as $m)
                                <option value="{{$m->id}}" {{$coberturaVacinal->municipio_id==$m->id?'selected':''}}>{{$m->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="porcentagem"><b>COBERTURA</b></label>
                        <div class="input-group mb-3">
                            <input type="text" maxlength="3" class="form-control text-right" value="{{$coberturaVacinal->porcentagem}}" id="" name="porcentagem" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="ano_id"><b>ANO</b></label>
                        <select class="form-control" id="ano_id" name="ano_id" required disabled>
                            @foreach($ano as $a)
                                <option value="{{$a->id}}" {{$coberturaVacinal->ano_id==$a->id?'selected':''}}>{{$a->ano}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="fonte"><b>FONTE</b></label>
                        <input type="text" class="form-control" value="{{$coberturaVacinal->fonte}}" id="fonte" name="fonte" disabled>
                    </div>
                </div>
                <div class="form-row text-right"><!--buttonsAções-->
                    <div class="col-sm-12 mt-3">
                        <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                        <a class="btn btn-danger" title="CANCELAR" href="/coberturaVacinal"><span class="fa fa-window-close"></span></a>
                    </div>
                </div><!--buttonsAções-->
            </div>
        </form>
    </div>
@endsection
