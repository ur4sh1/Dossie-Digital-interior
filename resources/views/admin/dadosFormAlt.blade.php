@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Dados Municipios</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('municipios.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('dados.update',$dados->id)}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-sm-4">
                    <label><h5><b>Município</b></h5></label><br>
                    <input disabled type="text" value="{{$municipios->nome}}">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>Área Territorial</b></h5></label><br>
                    <div class="input-group">
                        <input disabled type="text" class="text-right"  style="width: 100px;" value="{{number_format($dados->area_territorial,0,'.','.')}}" id="area_territorial" name="area_territorial">
                        <div class="input-group-append">
                            <span class="input-group-text">Km²</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label><h5><b>Densidade Demográfica</b></h5></label><br>
                    <div class="input-group">
                        <input disabled type="text" class="text-right" style="width: 100px;" value="{{$dados->densidade_demografica}}" id="densidade_demografica" name="densidade_demografica">
                        <div class="input-group-append">
                            <span class="input-group-text">hab/Km²</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row mt-4">
                <div class="col-sm-12 text-left">
                    <label><h5><b>#Distância de Manaus</b></h5></label><br>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label><h5><b>Linha Reta</b></h5></label><br>
                    <div class="input-group">
                        <input type="text"  class="text-right" value="{{$dados->linha_reta}}" style="width: 100px;" name="linha_reta" id="linha_reta">
                        <div class="input-group-append">
                            <span class="input-group-text">Km²</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label><h5><b>Linha Fluvial</b></h5></label><br>
                    <div class="input-group">
                        <input type="text" class="text-right" value="{{$dados->linha_fluvial}}" style="width: 100px;" name="linha_fluvial" id="linha_fluvial">
                        <div class="input-group-append">
                            <span class="input-group-text">Km²</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 text-left">
                    <label><h5><b>#Latitude e Longitude</b></h5></label><br>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label><h5><b>Latitude decimal</b></h5></label><br>
                    <input type="text" value="{{$dados->latitude_decimal}}" name="altitude_decimal">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>Longitude decimal</b></h5></label><br>
                    <input type="text" value="{{$dados->longitude_decimal}}" name="longitude_decimal">
                </div>
            </div>
<!--            <div class="row mt-3">
                <div class="col-sm-4">
                    <label><h5><b>Latitude Sexagesimal</b></h5></label><br>
                    <input type="text" value="{{$dados->altitude_sexagesimais}}" name="altitude_sexagesimais">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>Longitude Sexagesimal</b></h5></label><br>
                    <input type="text" value="{{$dados->longitude_sexagesimais}}" name="longitude_sexagesimais">
                </div>
            </div>-->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label><h5><b>População Estimada</b></h5></label><br>
                    <input type="text" class="text-right" value="{{$detalhe->populacao_estimada}}" name="populacao_estimada">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>PIB</b></h5></label><br>
                    <input type="text" class="text-right" value="{{$detalhe->pib_percapita}}" name="pib_percapita">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>IDH</b></h5></label><br>
                    <input type="text" class="text-right" value="{{$detalhe->idh}}" name="idh">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <label><h5><b>População com plano de Saúde</b></h5></label><br>
                    <div class="input-group">
                        <input type="text" class="text-right" style="width: 100px;" maxlength="6" value="{{$detalhe->pop_plan_saude}}" name="pop_plan_saude">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <label>atualizado em:</label><input class="text-right mt-2" value="{{$detalhe->pop_plan_saude_ano}}" style="width: 100px;" maxlength="4" name="pop_plan_saude_ano">
                </div>
                <div class="col-sm-4">
                    <label><h5><b>População em extrema Pobreza</b></h5></label><br>
                    <div class="input-group">
                        <input type="text" class="text-right" style="width: 100px;"  maxlength="6" value="{{$detalhe->pop_extr_pobreza}}" name="pop_extr_pobreza">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <label>atualizado em:</label><input class="text-right mt-2" value="{{$detalhe->pop_extr_pobreza_ano}}" style="width: 100px;" maxlength="4" name="pop_extr_pobreza_ano">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/municipios"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
