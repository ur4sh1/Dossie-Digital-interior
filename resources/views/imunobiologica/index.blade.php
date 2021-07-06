@extends('layouts.app')
@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>IMUNOBIOLÓGICA</h1>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm mt-1" href="{{route('coberturaVacinal.index')}}" role="button">LISTA</a>
            <a class="btn btn-primary btn-sm mt-1" href="{{route('imunobiologica.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-lg table-sm" id="table">
            <thead>
            <tr style="background:lavenderblush">
                <th scope="col">IMUNOBIOLÓGICA</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($imunobiologica as $i)
            <tr>
                <td>{{$i->nome}}</td>
                <td>
                    <span class="text-right">
                        <form action="{{route('imunobiologica.destroy',$i)}}" method="post" class="mr-1 ml-1">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$i->id}}">
                            <button class="btn btn-sm btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                    </span>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

