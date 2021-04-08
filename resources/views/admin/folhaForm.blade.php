@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>CRIAR REGISTRO</h1>
                </div>
            </div>
        </div>
        <form method="post" action="{{route('folhas.store')}}">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="hospital_id">Hospital</label><br>
                    <select name="hospital_id" id="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="profissional_id">Profissional</label><br>
                    <select name="profissional_id" id="profissional_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($profissional as $p)
                            <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="salario_inicial">Salário Unitário</label><br>
                    <input type="text" class="text-right" name="salario_inicial" id="salario_inicial" required>
                </div>
                <div class="col">
                    <label for="SUSAM">SUSAM</label><br>
                    <input type="text" class="text-right" style="width: 50px" name="SUSAM" id="SUSAM" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/folhas"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
