@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('autoridade.index')}}">Autoridade</a> / Alteração</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('autoridade.index')}}" role="button"><span class="fa fa-undo"></span></a>
            </div>
        </div>
        <form method="post" action="{{route('autoridade.update',$autoridades->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="nome"><h5><b>NOME</b></h5></label>
                        <input type="text" value="{{$autoridades->nome}}" class="form-control" id="nome" name="nome" required>
                        <div class="invalid-feedback">
                            Inserir um nome!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="municipio_id"><h5><b>MUNICÍPIO</b></h5></label>
                        <select class="form-control" id="municipio_id" name="municipio_id" required>
                            @foreach($municipios as $m)
                                <option value="{{$m->id}}" {{$autoridades->municipio_id==$m->id?"selected":''}}>{{$m->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="cargo_id"><h5><b>CARGO</b></h5></label>
                        <select class="form-control" id="cargo_id" name="cargo_id" required>
                            @foreach($cargos as $tp)
                                <option value="{{$tp->id}}" {{$autoridades->cargo_id==$tp->id?"selected":''}}>{{$tp->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label><h5><b>HOSPITAL REGIONAL:</b></h5></label>
                    <select class="form-control" id="hospital_id" name="hospital_id">
                        <option value="">Selecione</option>
                        @foreach($hospital as $h)
                            @if($h->municipio_id==$autoridades->municipio_id)
                            <option value="{{$h->id}}" {{$autoridades->hospital_id==$h->id?"selected":''}}>{{$h->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email"><h5><b>E-MAIL</b></h5></label>
                        <input type="text" value="{{$autoridades->email}}" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="partido_id"><h5><b>PARTIDO</b></h5></label>
                        <select class="form-control" id="partido_id" name="partido_id" required>
                            @foreach($partidos as $p)
                                <option value="{{$p->id}}" {{$autoridades->partido_id==$p->id?"selected":''}}>{{$p->sigla}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="tel"><h5><b>TELEFONE</b></h5></label>
                        <the-mask type="text" value="{{$autoridades->tel}}" class="form-control" name="tel" id="tel" :mask="['(##)####-####']"></the-mask>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="cel"><h5><b>CELULAR</b></h5></label>
                        <the-mask type="text" value="{{$autoridades->cel}}" class="form-control" name="cel" id="cel" :mask="['(##)#####-####']"></the-mask>
                    </div>
                </div>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                <a class="btn btn-danger btn-sm" title="CANCELAR" href="/autoridade"><span class="fa fa-window-close"></span></a>
            </div>
        </form>
    </div>
@endsection
