@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    $t1=0;
    $t2=0;
    $t3=0;
    $t11=0;
    $t22=0;
    $t33=0;
    ?>
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2>{{ $municipio->nome }}</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('financeiroCreate',$municipio->id)}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary btn-sm" href="{{route('financeiro.index')}}" role="button">VOLTAR</a>
        </div>
        <div class="desktop">
            <div class="row">
                <div class="col-12">
                    <label><b>SELECIONE O RECURSO: </b></label>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Estadual</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Fundo Estadual</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Fundo Nacional</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @include('recursoEstadual.index')</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @include('recursoFundoEstadual.index')</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            @include('recursoFundoNacional.index')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            @include('financeiro.mobile')
        </div>
    </div>
@endsection
<style>
    /*Mobile e Desktop resolução*/
    @media screen and (max-width: 800px) {
        div.desktop{
            display: none;
        }
    }
    @media screen and (min-width: 800px) {
        div.mobile {
            display: none;
        }
    }
</style>
