@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Municípios</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">PAINEL DE CONTROLE</a>
        </div>
        @foreach($municipio as $m)
            <div class="row"><!--linha1-->
                <div class="col-lg-7">
                    <button class="btn btn-link redime" type="button" data-toggle="collapse" data-target="#expander{{$m->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$m->nome}}
                    </button>
                </div>
            </div><!--Fimlinha1-->
            <div class="row"><!--linha2-->
                <div class="col-lg-12">
                    <div class="collapse" id="expander{{$m->id}}"><!--colapse-->
                        <div class="card card-body">
                            <div class="row text-right">
                                <div class="col-12">
                                    <button class="btn btn-outline-secondary btn-sm" style=" width: 100px" type="button" data-toggle="collapse" data-target="#expander{{$m->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        FECHAR
                                    </button>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#t{{$m->id}}" role="tab" aria-controls="home" aria-selected="true">Gerais</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t2{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Autoridades</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t3{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Hospital</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t7{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Hospital RH</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t4{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Programas e Ações</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t5{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Cobertura Vacinal</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t6{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Doenças e Agravos</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t8{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Financeiro</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="t{{$m->id}}" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row mt-3">
                                        <div class="col-sm-5">
                                            <label>Localização:</label><br>
                                            <img src="{{ asset('img/images/mapa'.$m->id.'.jpg')  }}" class="img-fluid" alt="{{$m->nome}}" width="500px">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Bandeira:</label><br>
                                            <img src="{{ asset('img/images/bandeira'.$m->id.'.png')  }}" class="img-fluid" alt="{{$m->nome}}" width="200px"><br>
                                            <br><i class="fa fa-map-marker"></i> Regional: {{$m->regional->nome?? ''}}<br>
                                            <i class="fa fa-map-marker"></i> Estado: {{$m->regional->estado->nome?? ''}}<br>
                                            <br><label>Distância de Manaus</label><br>
                                            <i class="fa fa-globe"></i> Linha Reta: {{$m->dados->linha_reta?? ''}}Km<br>
                                            <i class="fa fa-globe"></i> Linha Fluvial: {{$m->dados->linha_fluvial?? ''}}Km<br>
                                        </div>
                                        <div class="col-sm-4">
                                            <br>
                                            @include('dado.view')
                                            @include('detalhe.view')
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t2{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    @if($m->autoridade->count()==0)
                                        <i>Informações não cadastradas</i>
                                    @else
                                        <div class="row mt-3">
                                            @foreach ($m->autoridade as $auto)
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-link redime text-left" data-toggle="modal" data-target="#detail{{$auto->id}}">
                                                        <b>{{$auto->cargo->nome}}:</b> {{$auto->nome}} ({{$auto->partido->sigla}})
                                                    </button>
                                                    <!-- Modal Detalhes adicionais-->
                                                    <div class="modal fade" id="detail{{$auto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Informações adicionais</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    E-mail: {{$auto->email}}<br> <!--email-->
                                                                    Contato: {{$auto->tel}}<br>{{$auto->cel}}<br> <!--tel-->
                                                                    Partido: {{$auto->partido->sigla}}<br> <!--partido-->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="t3{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                @if($m->hospital->count()==0)<!--aba hospital-->
                                    <i>Informações não cadastradas</i>
                                    @else
                                        @foreach ($m->hospital as $ho)
                                            <div class="row">
                                                <div class="col">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-link redime" data-toggle="modal" data-target="#end{{$ho->id}}">
                                                        {{$ho->nome}}
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="end{{$ho->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">{{$ho->nome}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <b>Endereço: </b>{{ $ho->rua }}, {{ $ho->numero }}, {{ $ho->bairro }}<br>
                                                                    <b>Contato: </b>{{ $ho->tel }}<br>
                                                                    <b>E-mail: </b>{{ $ho->email }}<br>
                                                                    @foreach($ho->municipio->autoridade as $auto)
                                                                        @if($auto->cargo_id==12 and $auto->hospital_id==$ho->id)
                                                                            <b>Diretor Geral: </b>{{ $auto->nome }}<br>
                                                                            <b>Contato: </b>{{ $auto->tel }} _ {{ $auto->cel }}<br>
                                                                            <b>E-mail: </b>{{ $auto->email }}
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--MENU-->
                                                    <!--leitos-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#lei{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Leitos</b><br>
                                                    </a>
                                                    <!--Internação-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Internação</b><br>
                                                    </a>
                                                    <!--servicos-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#ser{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Serviços</b><br>
                                                    </a>
                                                    <!--Equipamentos-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#equi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Equipamentos</b><br>
                                                    </a>
                                                    <!--exames realizados-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#exa{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Exame Realizados</b><br>
                                                    </a>
                                                    <!--Salas Cirúrgicas-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#sal{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Salas Cirúrgicas</b><br>
                                                    </a>
                                                    <!--veiculo-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#veicu{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Veículos</b><br>
                                                    </a>

                                                    <!--COLAPSE-->
                                                    <!--colapse Leitos-->
                                                    <div class="collapse" id="lei{{$ho->id}}">
                                                        @include('leito.view')
                                                    </div>
                                                    <!--colapse Internação-->
                                                    <div class="collapse" id="int{{$ho->id}}">
                                                        @include('internacao.view')
                                                    </div>
                                                    <!--colapse Servicos-->
                                                    <div class="collapse" id="ser{{$ho->id}}">
                                                        @include('servico.view')
                                                    </div>
                                                    <!--colapse equipamentos-->
                                                    <div class="collapse" id="equi{{$ho->id}}">
                                                        @include('equipamentos.view')
                                                    </div>
                                                    <!--colapse exames realizados-->
                                                    <div class="collapse" id="exa{{$ho->id}}">
                                                        @include('exame.view')
                                                    </div>
                                                    <!--colapse salas cirurgicas-->
                                                    <div class="collapse" id="sal{{$ho->id}}">
                                                        @include('salacirugica.view')
                                                    </div>
                                                    <!--colapse veiculo-->
                                                    <div class="collapse" id="veicu{{$ho->id}}">
                                                        @include('veiculo.view')
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="t4{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('programa.view')
                                </div>
                                <div class="tab-pane fade" id="t5{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('coberturaVacinal.view')
                                </div>
                                <div class="tab-pane fade" id="t6{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('doencaAgravo.view')
                                </div>
                                <div class="tab-pane fade" id="t7{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                <!--aba hospital RH-->
                                @if($m->hospital->count()==0)
                                    <i>Informações não cadastradas</i>
                                    @else
                                        @foreach ($m->hospital as $ho)
                                            <div class="row">
                                                <div class="col">
                                                    <button disabled type="button" style="color: #1b1e21" class="btn btn-link redime" data-toggle="modal">
                                                        {{$ho->nome}}
                                                    </button>
                                                <!--MENU-->
                                                    <!--exames RH-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#rh{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Categoria</b><br>
                                                    </a>
                                                    <!--servidor-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#servi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>RH</b><br>
                                                    </a>
                                                    <!--exames Folha-->
                                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#fo{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Folha SES-AM</b><br>
                                                    </a>

                                                    <!--COLAPSE-->
                                                    <!--colapse Categorias-->
                                                    <div class="collapse" id="rh{{$ho->id}}">
                                                        @include('rh.view')
                                                    </div>
                                                    <!--colapse RH-->
                                                    <div class="collapse" id="servi{{$ho->id}}">
                                                        @include('servidor.view')
                                                    </div>
                                                    <!--colapse folha-->
                                                    <div class="collapse" id="fo{{$ho->id}}">
                                                        @include('folha.view')
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="t8{{$m->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('financeiro.tabelatotalrepasse')
                                    <!--MENU-->
                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#rest{{$m->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>RECURSO ESTADUAL</b><br>
                                    </a>
                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#rfest{{$m->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>RECURSO FUNDO ESTADUAL</b><br>
                                    </a>
                                    <a class="btn teste btn-link collapsed" data-toggle="collapse" href="#rfna{{$m->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <b>RECURSO FUNDO NACIONAL</b><br>
                                    </a>
                                    <!--COLAPSE-->
                                    <!--colapse recurso estadual-->
                                    <div class="collapse" id="rest{{$m->id}}">
                                        @include('recursoEstadual.view')
                                    </div>
                                    <!--colapse recurso fundo estadual-->
                                    <div class="collapse" id="rfest{{$m->id}}">
                                        @include('recursoFundoEstadual.view')
                                    </div>
                                    <!--colapse recurso fundo nacional-->
                                    <div class="collapse" id="rfna{{$m->id}}">
                                        @include('recursoFundoNacional.view')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--fimcolapse-->
                </div>
            </div><!--Fimlinha2-->
        @endforeach
    </div>
@endsection
<style>
    /*Mobile e Desktop*/
    @media screen and (max-width: 442px) {
        div.container {
            font-size: 20px;
        }
        div.car {
            font-size: 15px;
        }
    }
    @media screen and (min-width: 442px) {
        div.container {
            font-size: 15px;
        }
        div.car {
            font-size: 10px;
        }
    }
    @media screen and (max-width: 442px) {
        button.redime{
            font-size: 20px;
            text-align: left;
        }
    }
    @media screen and (min-width: 442px) {
        button.redime{
            font-size: 15px;
            text-align: left;
        }
    }
    @media screen and (max-width: 442px) {
        div.tituloVac{
            display: none;
        }
    }
    @media screen and (min-width: 442px) {
        div.tituloVac {
            display: run-in;
        }
    }
    @media screen and (max-width: 442px) {
        div.nomeDoenca{
            display: run-in;
        }
    }
    @media screen and (min-width: 442px) {
        div.nomeDoenca {
            display: none;
        }
    }
    /*link modificado*/
    a.btn-link.teste.collapsed {
        background-color: white;
        color: #4aa0e6;
    }
    a.btn-link.teste {
        background-color: #9ba2ab;
        color: white;
    }
    /*Mobile e Desktop resolução*/
    @media screen and (max-width: 800px) {
        div.desktop{
            display: none;
        }
    }
    @media screen and (min-width: 800px) {
        div.mobile {
            display: none;
        }
    }
    div.descricaogrande {
        width: 350px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
</style>
