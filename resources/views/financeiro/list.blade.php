@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
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
        @include('financeiro.tabelatotalrepasse')
        <div class="desktop mt-3">
            <div class="row">
                <div class="col-12">
                    <label><b>DETALHAR: </b></label>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-recurso-estadual-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Recurso Estadual</a>
                        <a class="nav-link" id="v-pills-fundo-estadual-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Fundo Estadual</a>
                        <a class="nav-link" id="v-pills-fundo-nacional-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Fundo Nacional</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-recurso-estadual-tab">
                            <div class="text-right">
                                <a class="btn-sm" href="{{route('recursoEstadualCreate',$municipio->id)}}">GERENCIAR</a>
                            </div>
                            @include('recursoEstadual.view')</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-fundo-estadual-tab">
                            <div class="text-right">
                                <a class="btn-sm" href="{{route('recursoFundoEstadualCreate',$municipio->id)}}">GERENCIAR</a>
                            </div>
                            @include('recursoFundoEstadual.view')</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-fundo-nacional-tab">
                            <div class="text-right">
                                <a class="btn-sm" href="{{route('recursoFundoNacionalCreate',$municipio->id)}}">GERENCIAR</a>
                            </div>
                            @include('recursoFundoNacional.view')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            @include('financeiro.mobile')
        </div>
    </div>
@endsection
<script>
    import RepasseFinanceiroGrid from "../../js/components/RepasseFinanceiroGrid";
    export default {
        components: {RepasseFinanceiroGrid}
    }
</script>
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
