@extends('layouts.app')

@section('content')
    <?php
    $data=date('Y')
    ?>
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('doencasAgravos.index')}}">Doenças e Agravos</a> / Cadastro </h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm  mt-1" href="{{route('doencasAgravos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('doencasAgravos.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="doenca_id"><b>Descrição</b></label>
                    <select class="form-control" id="doenca_id" name="doenca_id" required>
                        <option disabled selected>Selecione</option>
                        @foreach($doencas as $d)
                        <option value="{{ $d->id }}">{{ $d->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="municipio_id"><b>Município</b></label>
                    <select class="form-control" id="municipio_id" name="municipio_id" required>
                        <option>Selecione</option>
                        @foreach($municipios as $m)
                        <option value="{{ $m->id }}">{{ $m->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="ano_id"><b>Ano</b></label>
                    <select class="form-control" id="ano_id" name="ano_id" required>
                        <option disabled selected>Selecione</option>
                        @foreach($ano as $a)
                            @if($a->ano>=($data-2) && $a->ano<=($data))
                            <option value="{{ $a->id }}">{{ $a->ano }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <label for="casos"><b>Casos</b></label>
                    <input class="form-control" type="text" onkeypress="isNumberKey(event)" id="casos" name="casos" required>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-sm-3">
                    <label for="fonte"><b>FONTE</b></label>
                    <input class="form-control" type="text" id="fonte" name="fonte">
                </div>
            </div>
            <div class="form-row mt-3 text-right">
                <div class="col-sm-12">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/doencasAgravos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
<script>
    function isNumberKey(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9]/.test(char))){
            evt.preventDefault();
        }
    }
</script>
