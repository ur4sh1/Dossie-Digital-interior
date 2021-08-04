@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Exames</h1>
                    <h3><a href="{{route('exame.show',$hospital->id)}}">{{$hospital->nome}}</a> / Cadastro</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
        </div>
        <form method="post" action="{{route('exameStore',$hospital->id)}}">
            @csrf
            <input hidden type="text" value="{{$hospital->id}}" name="hospital_id" id="hospital_id">
            <div class="row">
                <div class="col-sm-3">
                    <label for="ano_id"><b>ANO</b></label>
                    <select class="form-control" name="ano_id" id="ano_id" required>
                        <option value="" disabled selected>Selecione</option>
                        @foreach($ano as $a)
                            @if($a->ano>=($data-2) && $a->ano<=($data))
                                <option value="{{ $a->id }}">{{ $a->ano }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="mamografia"><b>Mamografia</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" name="mamografia" id="mamografia" required>
                </div>
                <div class="col-sm-3">
                    <label for="ultrassonografia"><b>Ultrassonografia</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" name="ultrassonografia" id="ultrassonografia" required>
                </div>
                <div class="col-sm-3">
                    <label for="raio_x"><b>Raio-X</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" name="raio_x" id="raio_x" required>
                </div>
                <div class="col-sm-3">
                    <label for="eletrocardiograma"><b>Eletrocardiograma</b></label>
                    <input class="form-control" onkeypress="isNumberKey(event)" name="eletrocardiograma" id="eletrocardiograma" required>
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
