@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Cadastrar Partido</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary btn-sm mt-1" href="{{route('partido.index')}}" role="button">VOLTAR</a>
            </div>
        </div>
        <form method="post" action="{{route('partido.store')}}">
            @csrf
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">SIGLA</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
                </thead>
                <tr>
                    <td><input type="text" class="form-control text-uppercase" name="sigla" id="sigla" required></td>
                    <td><input type="text" class="form-control text-uppercase" name="descricao" id="descricao" required></td>
                    <td>
                        <button class="btn btn-primary" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                        <a class="btn btn-danger" title="CANCELAR" href="/partido"><span class="fa fa-window-close"></span></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
