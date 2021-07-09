@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Leitos</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('leito.index')}}" role="button">LISTA</a>
            <a class="btn btn-primary btn-sm" href="" role="button">ADICIONAR</a>
        </div>
        <form method="post" action="{{route('leito.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-4">
                    <label><h5><b>HOSPITAL</b></h5></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        <option value="" disabled selected>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                            @endforeach</td>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <label><h5><b>LEITOS</b></h5></label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="leito_clinico">Clínicos</label>
                    <the-mask class="form-control text-right" type="text" id="leito_clinico" name="leito_clinico" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="leito_cirurgico">Cirúrgicos</label>
                    <the-mask class="form-control text-right" type="text" id="leito_cirurgico" name="leito_cirurgico" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="leito_obstetrico">Obstétrico</label>
                    <the-mask class="form-control text-right" type="text" id="leito_obstetrico" name="leito_obstetrico" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="leito_pediatrico">Pediádrico</label>
                    <the-mask class="form-control text-right" type="text" id="leito_pediatrico" name="leito_pediatrico" :mask="['###']"></the-mask>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="leito_outro">Outros</label>
                    <the-mask class="form-control text-right" type="text" id="leito_outro" name="leito_outro" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="suporte_ventilatorio">Suporte Ventilátorio</label>
                    <the-mask class="form-control text-right" type="text" id="suporte_ventilatorio" name="suporte_ventilatorio" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="uci_adulto">LSV Adulto</label>
                    <the-mask class="form-control text-right" type="text" id="uci_adulto" name="uci_adulto" :mask="['###']"></the-mask>
                </div>
                <div class="col-sm-3">
                    <label for="uci_pediatrico">LSV Pediátrico</label>
                    <the-mask class="form-control text-right" type="text" id="uci_pediatrico" name="uci_pediatrico" :mask="['###']"></the-mask>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/leito"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
