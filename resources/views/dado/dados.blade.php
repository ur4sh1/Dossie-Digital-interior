@extends('layouts.app')
@section('content')
    <div class="container">
        @include('notification.alert')
        <div class="text-info">
            <h1>Informações Gerais</h1>
            <h3>{{$municipios->nome}}</h3>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('dados.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 mt-2">
                <label for="area_territorial"><h5><b>Área Territorial</b></h5></label>
                <div class="input-group-prepend">
                    <input type="text" disabled value="{{$dados->area_territorial}}" class="form-control" style="width: 130px" name="area_territorial" id="area_territorial">
                    <span class="input-group-text" id="inputGroupFileAddon01">Km²</span>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <label for="densidade_demografica"><h5><b>Densidade Demográfica</b></h5></label>
                <input type="text" disabled value="{{$dados->densidade_demografica}}" class="form-control text-right" style="width: 130px" name="densidade_demografica" id="densidade_demografica">
            </div>
            <div class="col-sm-2 mt-2">
                <label for="latitude_decimal"><h5><b>Latitude</b></h5></label>
                <input type="text" disabled value="{{$dados->latitude_decimal}}" class="form-control" style="width: 130px" name="latitude_decimal" id="latitude_decimal">
            </div>
            <div class="col-sm-2 mt-2">
                <label for="longitude_decimal"><h5><b>Longitude</b></h5></label>
                <input type="text" disabled value="{{$dados->longitude_decimal}}" class="form-control" style="width: 130px" name="longitude_decimal" id="longitude_decimal">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-3 mt-2">
                <label for="populacao_estimada"><h5><b>População Estimada</b></h5></label>
                <input type="text" disabled value="{{$detalhes->populacao_estimada}}" class="form-control" style="width: 130px" name="populacao_estimada" id="populacao_estimada">
            </div>
            <div class="col-sm-2 mt-2">
                <label for="area_territorial"><h5><b>PIB</b></h5></label>
                <input type="text" disabled value="{{$detalhes->pib_percapita}}" class="form-control" style="width: 130px" name="area_territorial" id="area_territorial">
            </div>
            <div class="col-sm-2 mt-2">
                <label for="idh"><h5><b>IDH</b></h5></label>
                <input type="text" disabled value="{{$detalhes->idh}}" class="form-control" style="width: 130px" name="idh" id="idh">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4 mt-2">
                <label for="pop_plan_saude"><h5><b>População com Plano de Saúde</b></h5></label>
                <div class="input-group-prepend">
                    <input type="text" disabled value="{{$detalhes->pop_plan_saude}}" class="form-control" style="width: 130px" name="pop_plan_saude" id="pop_plan_saude">
                    <span class="input-group-text" id="inputGroupFileAddon01">%</span>
                </div>
                Atualizado em:
                <select disabled id="pop_plan_saude_ano" name="pop_plan_saude_ano">
                    <option></option>
                    @foreach($ano as $a)
                        <option value="{{ $a->id }}" {{$detalhes->pop_plan_saude_ano==$a->id?"selected":''}}>{{ $a->ano }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4 mt-2">
                <label for="pop_extr_pobreza"><h5><b>População em Extrema Pobreza</b></h5></label>
                <div class="input-group-prepend">
                    <input type="text" disabled value="{{$detalhes->pop_extr_pobreza}}" class="form-control" style="width: 130px" name="pop_extr_pobreza" id="pop_extr_pobreza">
                    <span class="input-group-text" id="inputGroupFileAddon01">%</span>
                </div>
                Atualizado em:
                <select disabled id="pop_extr_pobreza_ano" name="pop_extr_pobreza_ano">
                    <option></option>
                    @foreach($ano as $a)
                        <option value="{{ $a->id }}" {{ $detalhes->pop_extr_pobreza_ano==$a->id?"selected":'' }}>{{ $a->ano }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label><h5><b>Distância em relação a Manaus</b></h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-2">
                <label for="linha_reta"><h5><b>Linha Reta</b></h5></label>
                <div class="input-group-prepend">
                    <input type="email" disabled value="{{$dados->linha_reta}}" class="form-control" style="width: 130px" name="linha_reta" id="linha_reta">
                    <span class="input-group-text" id="inputGroupFileAddon01">Km</span>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <label for="linha_fluvial"><h5><b>Linha Fluvial</b></h5></label>
                <div class="input-group-prepend">
                    <input type="email" disabled value="{{$dados->linha_fluvial}}" class="form-control" style="width: 130px" name="linha_fluvial" id="linha_fluvial">
                    <span class="input-group-text" id="inputGroupFileAddon01">Km</span>
                </div>
            </div>
        </div>
        <div class="form-row text-right"><!--buttonsAções-->
            <div class="col-sm-12 mt-3">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('dados.edit',$dados->id)}}" role="button">EDITAR</a>
            </div>
        </div><!--buttonsAções-->
    </div>
@endsection
