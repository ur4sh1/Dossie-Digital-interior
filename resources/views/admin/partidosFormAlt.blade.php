@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Alterar registro do Partido</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('partidos.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('partidos.update',$partido->id)}}">
            @csrf
            @method('put')
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">SIGLA</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
                </thead>
                <tr>
                    <td><input  value="{{$partido->sigla}}" type="text" class="form-control" name="sigla" id="sigla" required></td>
                    <td><input value="{{$partido->descricao}}" type="text" class="form-control" name="descricao" id="descricao" required></td>
                    <td>
                        <button class="btn btn-primary" type="submit">SALVAR</button>
                        <a class="btn btn-danger" href="/partidos">CANCELAR</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
