@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>RECURSO FUNDO NACIONAL</h1>
                    <h2><a href="{{route('itemRecursoFundoNacionalIndex',$id)}}">ITEM</a> / Alteração</h2>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('itemRecursoFundoNacionalIndex',$id)}}"  role="button">VOLTAR</a>
        </div>
        <form action="{{route('itemRecursoFundoNacionalUpdate',array('id'=>$itemRecursoFundoNacional->id,'mid'=>$id))}}" method="post">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-12">
                    <label for="descricao"><b>ITEM DESCRIÇÃO</b></label>
                    <input value="{{ $itemRecursoFundoNacional->descricao }}" class="form-control" type="text" id="descricao" name="descricao" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-right">
                    <button class="btn btn-sm btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-sm btn-danger" title="CANCELAR" href="{{route('itemRecursoFundoNacionalIndex',$id)}}"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
