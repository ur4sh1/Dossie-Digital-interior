@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastro de Serviços nos Hospitais</h1>
        </div>
        <form method="post" action="{{route('servicos.update',$servico->id)}}">
            @csrf
            @method('put')
            <table class="table table-sm">
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
                            <option value="" disabled hidden>Selecione</option>
                            @foreach($hospital as $h)
                            <option value="{{$h->id}}"{{$servico->hospital_id==$h->id?"selected":''}}>{{$h->nome}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control" id="tipo_servicos_id" name="tipo_servicos_id" required>
                            <option value="" disabled hidden>Selecione</option>
                            @foreach($tiposervico as $ts)
                            <option value="{{$ts->id}}"{{$servico->tipo_servicos_id==$ts->id?"selected":''}}>{{$ts->nome}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="align-middle">
                        <select class="custom-select" name="ativo" id="ativo" required>
                            <option value="1" {{$servico->ativo==1?'selected':''}}>Sim</option>
                            <option value="0" {{$servico->ativo==0?'selected':''}}>Não</option>
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
