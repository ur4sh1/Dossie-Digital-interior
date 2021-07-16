@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1><a href="{{route('rhs.index')}}">RH</a> / Alteração</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('rhs.index')}}" role="button">VOLTAR</a>
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
        <form method="post" action="{{route('rhs.update',$rh->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-4">
                    <select class="form-control" name="hospital_id" disabled required>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" {{$rh->hospital_id==$h->id?"selected":''}}>{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="rh_categoria_id" disabled required>
                        @foreach($rhCategoria as $hc)
                            <option value="{{$hc->id}}" {{$rh->rh_categoria_id==$hc->id?"selected":''}}>{{$hc->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 ">
                    <input value="{{$rh->susam_estatutario}}" class="form-control" style="width: 100px;" maxlength="4" type="text" name="susam_estatutario" required>
                </div>
                <div class="col-sm-2">
                    <input value="{{$rh->susam_contrato}}" class="form-control" style="width: 100px;" maxlength="4" type="text" name="susam_contrato" required>
                </div>
                <div class="col-sm-2">
                    <input value="{{$rh->prefeitura}}" class="form-control" style="width: 100px;" maxlength="4" type="text" name="prefeitura" required>
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



