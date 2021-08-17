@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Exames</h1>
                    <h3><a href="{{route('exame.show',$hospital->id)}}">{{$hospital->nome}}</a> / Alteração</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('exame.show',$hospital->id)}}" title="Voltar" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <form method="post" action="{{route('exameUpdate',['id'=>$exame->id,'hid'=>$hospital->id])}}">
            @csrf
            <input type="text" value="{{$hospital->id}}" name="hospital_id" id="hospital_id" disabled hidden>
            <div class="row">
                <div class="col-sm-3">
                    <label for="ano_id"><b>ANO</b></label>
                    <select class="form-control" name="ano_id" id="ano_id" disabled>
                        @foreach($ano as $a)
                            <option value="{{$a->id}}" {{$a->id==$exame->ano_id?'selected':''}}>{{$a->ano}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="mamografia"><b>Mamografia</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" value="{{$exame->mamografia}}" name="mamografia" id="mamografia">
                </div>
                <div class="col-sm-3">
                    <label for="ultrassonografia"><b>Ultrassonografia</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" value="{{$exame->ultrassonografia}}" name="ultrassonografia" id="ultrassonografia">
                </div>
                <div class="col-sm-3">
                    <label for="raio_x"><b>Raio-X</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" value="{{$exame->raio_x}}" name="raio_x" id="raio_x">
                </div>
                <div class="col-sm-3">
                    <label for="eletrocardiograma"><b>Eletrocardiograma</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" value="{{$exame->eletrocardiograma}}" name="eletrocardiograma" id="eletrocardiograma">
                </div>
            </div>
            <div class="form-row text-right">
                <div class="col-sm-12 mt-2">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="{{route('exame.show',$hospital->id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
