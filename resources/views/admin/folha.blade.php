@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>FOLHA</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('folhas.create')}}" role="button">ADICIONAR</a>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Selecione o Hospital
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($hospital as $h)
                <a class="dropdown-item" href="{{route('folhas.show',$h->id)}}">{{$h->nome}}</a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
