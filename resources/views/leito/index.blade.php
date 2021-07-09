@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="text-info">
            <h1>Leitos</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
            <a class="btn btn-primary btn-sm" href="{{route('leito.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-responsive-sm" id="table">
            <thead>
                <tr style="background:lavenderblush">
                    <th>HOSPITAL</th>
                    <th>Clínicos</th>
                    <th>Cirúrgicos</th>
                    <th>Obstétrico</th>
                    <th>Pediádrico</th>
                    <th>Outros</th>
                    <th>Suporte Ventilátorio</th>
                    <th>LSV Adulto</th>
                    <th>LSV Pediátrico</th>
                </tr>
            </thead>
            <tbody>
            @foreach($leito as $l)
                <tr>
                    <td>@foreach($hospital as $h)
                            @if($h->id===$l->hospital_id)
                                {{$h->nome}}
                            @endif
                        @endforeach</td>
                    <td>{{$l->leito_clinico}}</td>
                    <td>{{$l->leito_cirurgico}}</td>
                    <td>{{$l->leito_obstetrico}}</td>
                    <td>{{$l->leito_pediatrico}}</td>
                    <td>{{$l->leito_outro}}</td>
                    <td>{{$l->suporte_ventilatorio}}</td>
                    <td>{{$l->uci_adulto}}</td>
                    <td>{{$l->uci_pediatrico}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
