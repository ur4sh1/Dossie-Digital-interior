@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastro Programas e Ações</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm" href="{{route('programa.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao">
            </div>
            <div class="col">
                <label for="sigla">Sigla</label>
                <input type="text" name="sigla" id="sigla">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="teto">teto</label>
                <input type="text" name="teto" id="teto">
            </div>
            <div class="col">
                <label for="cred">cred</label>
                <input type="text" name="cred" id="cred">
            </div>
            <div class="col">
                <label for="implant">Implantado</label>
                <input type="text" name="implant" id="implant">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="repasse">Repasse</label>
                <input type="text" name="repasse" id="repasse">
            </div>
            <div class="col">
                <label for="ano_id">Ano</label>
                <select name="ano_id" id="ano_id">
                    <option disabled selected>Selecione</option>
                    @foreach($ano as $a)
                        <option value="{{$a->id}}">{{$a->ano}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
@endsection
