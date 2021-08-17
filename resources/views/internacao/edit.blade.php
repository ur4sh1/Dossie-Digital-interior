@extends('layouts.app')
@section('content')
    <?php
    $data=date('Y');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>Internação</h1>
                    <h3><a href="{{route('internacao.show',$hospital->id)}}">{{$hospital->nome}}</a> / Alteração</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" title="Home" role="button"><span class="fa fa-home"></span></a>
            <a class="btn btn-primary btn-sm" href="{{route('internacao.show',$hospital->id)}}" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <form method="post" action="{{route('internacaoUpdate',['id'=>$hospital->id,'hid'=>$hospital->id])}}" autocomplete="off">
            @csrf
            <input hidden type="text" value="{{$hospital->id}}" name="hospital_id" id="hospital_id">
            <div class="row">
                <div class="col-sm-3">
                    <label for="ano_id"><b>Ano</b></label>
                    <select class="form-control" name="ano_id" id="ano_id" disabled>
                        @foreach($ano as $a)
                            <option value="{{ $a->id }}" {{$internacao->ano_id==$a->id?'selected':''}}>{{ $a->ano }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="media_dia"><b>Média / Dia</b></label>
                    <input type="text" onkeypress="isNumberKey(event)" value="{{$internacao->media_dia}}" class="form-control" name="media_dia" id="media_dia" required>
                </div>
                <div class="col-sm-3">
                    <label for="media_mes"><b>Média / Mês</b></label>
                    <input type="text" onkeypress="isNumberKey(event)" value="{{$internacao->media_mes}}" class="form-control" name="media_mes" id="media_mes" required>
                </div>
                <div class="col-sm-3">
                    <label for="fonte"><b>Fonte</b></label>
                    <input type="text" value="{{$internacao->fonte}}" class="form-control" name="fonte" id="fonte" required>
                </div>
            </div>
            <div class="form-row text-right">
                <div class="col-sm-12 mt-2">
                    <button class="btn btn-primary btn-sm" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="{{route('internacao.show',$hospital->id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
