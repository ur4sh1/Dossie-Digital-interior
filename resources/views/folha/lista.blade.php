@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-info">
                    <h1>FOLHA</h1>
                    <h3>{{$hospital->nome}}</h3>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('folha.create')}}" role="button">ADICIONAR</a>
            <a class="btn btn-primary btn-sm" href="{{route('folha.index')}}" role="button">VOLTAR</a>
        </div>
        @if($folha->count()==0)
            <i>Informações não Cadastradas</i>
        @else
            <table class="table table-sm table-responsive-lg" id="table">
                <thead style="background:lavenderblush">
                <th scope="col">PROFISSIONAL</th>
                <th scope="col" class="text-center">SALÁRIO UNITÁRIO</th>
                <th scope="col">SESAM</th>
                <th scope="col">Valor em Folha</th>
                <th scope="col">Ações</th>
                </thead>
                @foreach($folha as $f)
                    <tr>
                        <td>{{$f->profissional->nome}}</td>
                        <td class="text-right">{{number_format($f->salario_inicial,2,',','.')}}</td>
                        <td class="text-center">{{$f->SUSAM}}</td>
                        <td class="text-right">{{{number_format($f->total,2,',','.')}}}</td>
                        <td style="width: 100px">
                            <span class="row ml-1">
                                <a class="btn btn-primary btn-sm mr-1 ml-1" title="EDITAR" href="{{route('folha.edit',$f)}}" role="button"><span class="fa fa-edit"></span></a>
                                <form action="{{route('folha.destroy',$f)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="${{$f->id}}">
                                    <button class="btn btn-sm btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
