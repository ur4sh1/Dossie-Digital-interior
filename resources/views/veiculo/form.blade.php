@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('veiculo.index')}}">Veículo</a> / Cadastro</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('veiculo.index')}}" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <form method="post" action="{{route('veiculo.store')}}" autocomplete="off">
            @csrf
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" >{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>ADMINISTRATIVO</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:90px;" id="administrativo_existente" name="administrativo_existente" placeholder="Existente" :mask="['###']"></the-mask>
                        </div>
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:110px;" id="administrativo_funcional" name="administrativo_funcional" placeholder="Ativo" :mask="['###']"></the-mask>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>AMBULÂNCIA TERRESTRE</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:90px;" id="ambulancia_terrestre_existente" name="ambulancia_terrestre_existente" placeholder="Existente" :mask="['###']"></the-mask>
                        </div>
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:110px;" id="ambulancia_terrestre_funcional" name="ambulancia_terrestre_funcional" placeholder="Ativo" :mask="['###']"></the-mask>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>AMBULÂNCIA FLUVIAL</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:90px;" id="ambulancia_fluvial_existente" name="ambulancia_fluvial_existente" placeholder="Existente" :mask="['###']"></the-mask>
                        </div>
                        <div class="col-sm-6">
                            <the-mask type="text" class="form-control text-right" style="width:110px;"id="ambulancia_fluvial_funcional" name="ambulancia_fluvial_funcional" placeholder="Ativo" :mask="['###']"></the-mask>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/veiculo"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
