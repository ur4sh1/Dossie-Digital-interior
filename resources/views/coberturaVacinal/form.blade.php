@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>COBERTURA VACINAL</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.index')}}" role="button">LISTA</a>
            <a class="btn btn-primary btn-sm mt-1" href="" role="button">VACINAS</a>
        </div>
        <form method="post" action="{{route('coberturaVacinal.store')}}">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="imunobiologica_id"><b>VACINA</b></label>
                        <select class="form-control" id="imunobiologica_id" name="imunobiologica_id" required>
                            <option disabled selected>Selecione</option>
                            @foreach($imunobiologicas as $i)
                                <option value="{{$i->id}}">{{$i->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="municipio_id"><b>MUNICÍPIO</b></label>
                        <select class="form-control" id="municipio_id" name="municipio_id">
                            <option>Selecione</option>
                            @foreach($municipio as $m)
                                <option value="{{$m->id}}">{{$m->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="porcentagem"><b>COBERTURA</b></label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="" id="" name="porcentagem">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="ano_id"><b>ANO</b></label>
                        <select class="form-control" id="ano_id" name="ano_id">
                            <option disabled selected>Selecione</option>
                            @foreach($ano as $a)
                                @if($a->ano>=($data-2) && $a->ano<=($data))
                                <option value="{{$a->id}}">{{$a->ano}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="fonte"><b>FONTE</b></label>
                        <input type="text" class="form-control" id="fonte" name="fonte">
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
