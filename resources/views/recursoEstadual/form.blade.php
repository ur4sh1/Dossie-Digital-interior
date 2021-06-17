@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alertLaravel')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2>{{ $municipio->nome }} / Recurso Estadual</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoEstadualEdit',$municipio->id)}}" role="button">EDITAR RECURSOS</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoEstadualIndex',$municipio->id)}}" role="button">GERENCIAR ITENS</a>
        </div>
        <form method="post" action="{{route('recursoEstadualStore',$municipio->id)}}">
            @csrf
            <input hidden value="{{ $municipio->id }}" id="municipio_id" name="municipio_id">
            <div class="form-group">
                <div class="form-row">
                    <div class="form-col-8">
                        <label for="item_recurso_estadual_id">Descrição do Item a ser vinculado:</label>
                        <select class="form-control" id="item_recurso_estadual_id" name="item_recurso_estadual_id" required>
                            <option value="" disabled selected> Selecione o item</option>
                            @foreach($itemRecursoEstadual as $ire)
                                <option value="{{ $ire->id }}">{{ $ire->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-col-2">
                        <label for="valor">Valor</label>
                        <input class="form-control text-right" id="valor" name="valor" required>
                    </div>
                    <div class="form-col-2">
                        <label for="ano_id">Ano</label>
                        <select class="form-control" id="ano_id" name="ano_id">
                            <option disabled selected>Selecione</option>
                            @foreach($ano as $a)
                                <option value="{{ $a->id }}">{{ $a->ano }}</option>
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
                @include('recursoEstadual.view')
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
