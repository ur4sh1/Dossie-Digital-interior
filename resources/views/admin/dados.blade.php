@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Dados Municipios</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary mt-1" href="{{route('municipios.index')}}" role="button">VOLTA</a>
            </div>
        </div>
        <form method="post" action="{{route('dados.edit',$id)}}">
            @csrf
            <select id="dados_id" name="dados_id">
                @foreach($municipios as $m)
                    <option value="{{$m->id}}">{{$m->nome}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary" type="submit">CARREGAR</button>
        </form>
    </div>
@endsection
