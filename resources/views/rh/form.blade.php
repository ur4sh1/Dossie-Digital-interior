@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1><a href="{{route('rhs.index')}}">RH</a> / Cadastro</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('rhs.index')}}" role="button"><span class="fa fa-undo"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('rhCategorias.index')}}" role="button">CATEGORIAS</a>
        </div>
        <form method="post" action="{{route('rhs.store')}}" autocomplete="off">
            @csrf
            <div class="form-row">
                <div class="col-sm-4">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="rh_categoria_id"><b>CATEGORIA</b></label>
                    <select class="form-control" name="rh_categoria_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($rhCategoria as $hc)
                            <option value="{{$hc->id}}">{{$hc->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 ">
                    <label for="susam_estatutario"><b>SESAM ESTATUTÁRIO</b></label>
                    <input class="form-control" style="width: 100px;" onkeypress="isNumberKey(event)" maxlength="4" type="text" name="susam_estatutario" id="susam_estatutario">
                </div>
                <div class="col-sm-2">
                    <label for="susam_contrato"><b>SESAM CONTRATO</b></label>
                    <input class="form-control" style="width: 100px;" onkeypress="isNumberKey(event)" maxlength="4" type="text" name="susam_contrato" id="susam_contrato">
                </div>
                <div class="col-sm-2">
                    <label for="prefeitura"><b>PREFEITURA</b></label>
                    <input class="form-control" style="width: 100px;" onkeypress="isNumberKey(event)" maxlength="4" type="text" name="prefeitura" id="prefeitura">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/rhs"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection

