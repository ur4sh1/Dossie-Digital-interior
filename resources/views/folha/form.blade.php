@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>FOLHA</h1>
                    <h3><a href="{{route('folha.show',$hospital->id)}}">{{$hospital->nome}}</a> / Cadastro</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('folha.show',$hospital->id)}}" role="button">VOLTAR</a>
        </div>
        <form method="post" action="{{route('folhaStore',$hospital->id)}}" autocomplete="off">
            @csrf
            <input hidden type="text" value="{{$hospital->id}}" name="hospital_id" id="hospital_id">
            <div class="row mt-1">
                <div class="col-sm-3">
                    <label for="profissional_id"><b>Profissional</b></label>
                    <select class="form-control" name="profissional_id" id="profissional_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($profissional as $p)
                            <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="salario_inicial"><b>Salário Unitário</b></label>
                    <the-mask class="form-control text-right" onkeypress="isNumberKeyMod(event)" name="salario_inicial" id="salario_inicial" :mask="['##.###,##']" required></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="SUSAM"><b>Qtd Funcionários SESAM</b></label>
                    <the-mask class="form-control text-right" name="SUSAM" id="SUSAM" :mask="['##']" required></the-mask>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="{{route('folha.show',$hospital->id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
<script>
    function isNumberKeyMod(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9,',','.']/.test(char))){
            evt.preventDefault();
        }
    }
</script>
