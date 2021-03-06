@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    ?>
    <div class="container">
        @include('notification.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2><a href="{{route('financeiro.show',$municipio->id)}}">{{ $municipio->nome }}</a> / Recurso Fundo Nacional</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('financeiro.show',$municipio->id)}}" role="button">INÍCIO</a>
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoNacionalEdit',$municipio->id)}}" role="button">EDITAR VALORES</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoNacionalIndex',$municipio->id)}}" role="button">EDITAR ITENS</a>
        </div>
        <form method="post" action="{{route('recursoFundoNacionalStore',$municipio->id)}}">
            @csrf
            <input hidden value="{{ $municipio->id }}" id="municipio_id" name="municipio_id">
            <div class="form-group">
                <div class="form-row">
                    <div class="form-col-8">
                        <label for="item_recurso_fundo_nacional_id">Descrição do Item</label>
                        <select class="form-control" id="item_recurso_fundo_nacional_id" name="item_recurso_fundo_nacional_id" required>
                            <option value="" disabled selected> Selecione o item</option>
                            @foreach($itemRecursoFundoNacional as $irfn)
                                <option value="{{ $irfn->id }}">{{ $irfn->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-col-2">
                        <label for="tipo_recurso_nacional_id">Tipo</label>
                        <select class="form-control" id="tipo_recurso_nacional_id" name="tipo_recurso_nacional_id" required>
                            <option disabled selected>Selecione</option>
                            @foreach($tipoRecursoNacional as $trn)
                            <option value="{{ $trn->id }}">{{ $trn->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-col-2">
                        <label for="valor">Valor</label>
                        <input class="form-control text-right" onkeypress="isNumberKeyCurrency(event)" id="valor" name="valor" required>
                    </div>
                    <div class="form-col-2">
                        <label for="ano_id">Ano</label>
                        <select class="form-control" id="ano_id" name="ano_id" required>
                            <option value="" disabled selected>Selecione</option>
                            @foreach($ano as $a)
                                @if($a->ano>=($data-2) && $a->ano<=($data))
                                    <option value="{{ $a->id }}">{{ $a->ano }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row text-right"><!--buttonsAções-->
                    <div class="col-sm-12 mt-3">
                        <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                        <a class="btn btn-danger" title="CANCELAR" href="/financeiro"><span class="fa fa-window-close"></span></a>
                    </div>
                </div><!--buttonsAções-->
            </div>
        </form>
        <div class="row">
            <div class="col">
                @include('recursoFundoNacional.view')
            </div>
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
<script>
    function isNumberKey(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9,',','.']/.test(char))){
            evt.preventDefault();
        }
    }
</script>
