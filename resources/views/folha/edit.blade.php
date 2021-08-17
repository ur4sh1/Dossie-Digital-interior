@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>FOLHA</h1>
                    <h3><a href="{{route('folha.show',$hospital->id)}}">{{$hospital->nome}}</a> / Alteração</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('folha.show',$hospital->id)}}" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <form method="post" action="{{route('folhaUpdate',array('id'=>$folha->id,'hid'=>$hospital->id))}}" autocomplete="off">
            @csrf
            {{--@method('put')--}}
            <input hidden type="text" value="{{$hospital->id}}" name="hospital_id" id="hospital_id">
            <div class="row mt-1">
                <div class="col-sm-6">
                    <label for="profissional_id"><b>Profissional</b></label>
                    <input type="text" class="form-control" disabled name="profissional" id="profissional" value="{{$folha->profissional->nome}}">
                </div>
                <div class="col-sm-3">
                    <label for="salario_inicial"><b>Salário Unitário</b></label>
                    <input class="form-control text-right" onkeypress="isNumberKeyCurrency(event)" value="{{$folha->salario_inicial}}" name="salario_inicial" id="salario_inicial"  required>
                </div>
                <div class="col-sm-3">
                    <label for="SUSAM"><b>Qtd Funcionários SESAM</b></label>
                    <the-mask class="form-control text-right" value="{{$folha->SUSAM}}" name="SUSAM" id="SUSAM" :mask="['##']" required></the-mask>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="{{route('folha.show',$hospital->id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
