@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastro de Autoridade</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('autoridades.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" class="needs-validation" action="{{route('autoridades.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="nome"><h5><b>NOME</b></h5></label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
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
                            <option value="" selected disabled hidden>Selecione</option>
                            @foreach($municipios as $m)
                                <option value="{{$m->id}}">{{$m->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="cargo_id"><h5><b>CARGO</b></h5></label>
                        <select class="form-control" id="cargo_id" name="cargo_id" required>
                            <option value="" selected disabled hidden>Selecione</option>
                            @foreach($cargos as $tp)
                                <option value="{{$tp->id}}">{{$tp->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="partido_id"><h5><b>PARTIDO</b></h5></label>
                        <select class="form-control" id="partido_id" name="partido_id" required>
                            <option value="" selected disabled hidden>Selecione</option>
                            @foreach($partidos as $p)
                                <option value="{{$p->id}}">{{$p->sigla}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email"><h5><b>E-MAIL</b></h5></label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="tel"><h5><b>CONTATO</b></h5></label>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="tel">Fixo</label>
                        <the-mask type="text" class="form-control" style="width: 200px;" name="tel" id="tel" :mask="['(##)####-####']"></the-mask>
                    </div>
                    <div class="col-sm-6">
                        <label for="cel">Celular</label>
                        <the-mask type="text" class="form-control" style="width: 200px;" name="cel" id="cel" :mask="['(##)#####-####']"></the-mask>
                    </div>
                </div>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                <a class="btn btn-danger" title="CANCELAR" href="/autoridades"><span class="fa fa-window-close"></span></a>
            </div>
        </form>
    </div>
@endsection
