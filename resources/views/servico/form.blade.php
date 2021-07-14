@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('servicos.index')}}">Serviço</a> / Cadastro</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('servicos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('servicos.store')}}">
            @csrf
            <table class="table-sm">
                <thead>
                <tr>
                    <th scope="col">HOSPITAL</th>
                    <th scope="col">SERVIÇO</th>
                    <th scope="col">ATIVO</th>
                </tr>
                </thead>
                <tr>
                    <td>
                        <select class="form-control" id="hospital_id" name="hospital_id" required>
                            <option value="" selected disabled hidden>Selecione</option>
                            @foreach($hospital as $h)
                            <option value="{{$h->id}}">{{$h->nome}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control" id="tipo_servicos_id" name="tipo_servicos_id" required>
                            <option value="" selected disabled hidden>Selecione</option>
                            @foreach($tiposervico as $ts)
                            <option value="{{$ts->id}}">{{$ts->nome}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="align-middle">
                        <select class="custom-select" name="ativo" id="ativo" required>
                            <option disabled selected>Selecione</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                        <a class="btn btn-danger" title="CANCELAR" href="/servicos"><span class="fa fa-window-close"></span></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
