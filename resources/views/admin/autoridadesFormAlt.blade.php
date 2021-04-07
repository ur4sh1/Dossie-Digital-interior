@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info align-text-top">
            <h1>Alterar registro de Autoridade</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('autoridades.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('autoridades.update',$autoridades->id)}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="nome">NOME</label>
                        <input type="text" value="{{$autoridades->nome}}" class="form-control" id="nome" name="nome" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="municipio_id">MUNICÍPIO</label>
                        <select class="form-control" id="municipio_id" name="municipio_id" required>
                            <option value="" disabled hidden>Selecione</option>
                            @foreach($municipios as $m)
                                <option value="{{$m->id}}"{{$autoridades->municipio_id==$m->id?"selected":''}}>{{$m->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tipo_id">CARGO</label>
                        <select class="form-control" id="tipo_id" name="tipo_id" required>
                            <option value="" disabled hidden>Selecione</option>
                            @foreach($cargos as $tp)
                                <option value="{{$tp->id}}"{{$autoridades->cargo_id==$tp->id?"selected":''}}>{{$tp->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="partido_id">PARTIDO</label>
                        <select class="form-control" id="partido_id" name="partido_id" required>
                            <option value="" disabled hidden>Selecione</option>
                            @foreach($partidos as $p)
                                <option value="{{$p->id}}"{{$autoridades->partido_id==$p->id?"selected":''}}>{{$p->sigla}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-MAIL</label>
                <input type="text" value="{{$autoridades->email}}" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="tel">CONTATO</label>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="tel">Fixo</label>
                        <input type="text" value="{{$autoridades->tel}}" class="form-control" style="width: 200px;" name="tel" id="tel">
                    </div>
                    <div class="col-sm-6">
                        <label for="cel">Celular</label>
                        <input type="text" value="{{$autoridades->cel}}" class="form-control" style="width: 200px;" name="cel" id="cel">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                        <a class="btn btn-danger" title="CANCELAR" href="/autoridades"><span class="fa fa-window-close"></span></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
