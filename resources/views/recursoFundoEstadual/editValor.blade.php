@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>REPASSE FINANCEIRO</h1>
                    <h2><a href="{{route('financeiro.show',$municipio->id)}}">{{ $municipio->nome }}</a> / <a href="{{route('recursoFundoEstadualCreate',$municipio->id)}}">Recurso Fundo Estadual</a> / Editar</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('recursoFundoEstadualCreate',$municipio->id)}}" role="button">VINCULAR ITEM</a>
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoEstadualIndex',$municipio->id)}}" role="button">GERENCIAR ITENS</a>
        </div>
    <form method="post" action="{{route('recursoFundoEstadualUpdate',array('id'=>$recursoFundoEstadual->id,'mid'=>$municipio->id))}}">
        @csrf
        <input hidden value="{{ $municipio->id }}" id="municipio_id" name="municipio_id">
        <div class="form-group">
            <div class="form-row">
                <div class="form-col-8">
                    <label for="item_recurso_estadual_id">Descrição do Item:</label>
                    <select class="form-control" id="item_recurso_estadual_id" name="item_recurso_estadual_id" disabled required>
                        @foreach($itemRecursoFundoEstadual as $ire)
                            <option value="{{ $ire->id }}" {{$recursoFundoEstadual->item_recurso_fundo_estadual_id===$ire->id?'selected':''}}>{{ $ire->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-col-2">
                    <label for="valor">Valor</label>
                    <input class="form-control text-right" onkeypress="isNumberKeyCurrency(event)" value="{{ number_format($recursoFundoEstadual->valor,2,',','.') }}" id="valor" name="valor" required>
                </div>
                <div class="form-col-2">
                    <label for="ano_id">Ano</label>
                    <select class="form-control" id="ano_id" name="ano_id" disabled required>
                        @foreach($ano as $a)
                                <option value="{{ $a->id }}" {{$recursoFundoEstadual->ano_id===$a->id?'selected':''}}>{{ $a->ano }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row text-right"><!--buttonsAções-->
                <div class="col-sm-12 mt-3">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="{{route('recursoFundoEstadualEdit',$municipio->id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </div>
    </form>
    </div>
@endsection
<script>
    function isNumberKey(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9,',','.']/.test(char))){
            evt.preventDefault();
        }
    }
</script>
