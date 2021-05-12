@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>ALTERAR REGISTRO</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('folha.index')}}" role="button">VOLTAR</a>
        </div>
        <form method="post" action="{{route('folha.update',$folha->id)}}">
            @csrf
            @method('put')
        <div class="row">
            <div class="col">
                <label for="hospital">Hospital</label><br>
                <input type="text" disabled name="hospital" style="width: 300px" id="hospital" value="{{$folha->hospital->nome}}">
            </div>
            <div class="col">
                <label for="profissional">Profissional</label><br>
                <input type="text" disabled name="profissional" style="width: 300px" id="profissional" value="{{$folha->profissional->nome}}">
            </div>
            <div class="col">
                <label for="salario_inicial">Salário Unitário</label><br>
                <input type="text" class="text-right" name="salario_inicial" id="salario_inicial" value="{{$folha->salario_inicial}}">
            </div>
            <div class="col">
                <label for="SUSAM">SESAM</label><br>
                <input type="text" class="text-right" style="width: 50px" name="SUSAM" id="SUSAM" value="{{$folha->SUSAM}}">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                <a class="btn btn-danger" title="CANCELAR" href="/folha"><span class="fa fa-window-close"></span></a>
            </div>
        </div>
        </form>
    </div>
@endsection
