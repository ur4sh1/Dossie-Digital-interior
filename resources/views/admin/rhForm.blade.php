@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RH</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('rhCategorias.index')}}" role="button">CATEGORIAS</a>
            <a class="btn btn-primary" href="{{route('rhs.index')}}" role="button">VOLTAR</a>
        </div>
        <div class="form-row mt-4">
            <div class="col-sm-4">
                <h5><b>HOSPITAL</b></h5>
            </div>
            <div class="col-sm-2">
                <h5><b>CATEGORIA</b></h5>
            </div>
            <div class="col-sm-2">
                <h5><b>SESAM ESTATUTÁRIO</b></h5>
            </div>
            <div class="col-sm-2">
                <h5><b>SESAM <br>CONTRATO</b></h5>
            </div>
            <div class="col-sm-2">
                <h5><b>PREFEITURA</b></h5>
            </div>
        </div>
        <form method="post" action="{{route('rhs.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-4">
                    <select class="form-control" name="hospital_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="rh_categoria_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($rhCategoria as $hc)
                            <option value="{{$hc->id}}">{{$hc->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 ">
                    <input class="form-control" style="width: 100px;" maxlength="4" type="text" name="susam_estatutario">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" style="width: 100px;" maxlength="4" type="text" name="susam_contrato">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" style="width: 100px;" maxlength="4" type="text" name="prefeitura">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/rhs"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection



