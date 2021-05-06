@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Municípios</h1>
        </div>
        <div class="text-right mb-2">
        <!--            <div class="form-group">
                <a class="btn btn-primary" href="{{action('MunicipiosController@indexAlternativo')}}" role="button">VIEW</a>
            </div>-->
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
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#t{{$m->id}}" role="tab" aria-controls="home" aria-selected="true">Informações Gerais</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t2{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Autoridades</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t3{{$m->id}}" role="tab" aria-controls="profile" aria-selected="false">Hospitais</a>
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
                                            <i class="fa fa-area-chart "></i> Área Territorial : {{number_format($m->dados->area_territorial?? '',0,'.','.')}} Km²<br>
                                            <i class="fa fa-globe"></i> Densidade Demográfica: {{$m->dados->densidade_demografica?? ''}} hab/Km²<br>
                                            <i class="fa fa-globe"></i> Latitude Decimal: {{$m->dados->latitude_decimal?? ''}}<br>
                                            <i class="fa fa-globe"></i> Longitude Decimal: {{$m->dados->longitude_decimal?? ''}}<br>
                                        <!--<i class="fa fa-globe"></i> Latitude Sexagesimal: {{$m->dados->latitude_sexagesimais?? ''}}<br>
                                            <i class="fa fa-globe"></i> Longitude Sexagesimal: {{$m->dados->longitude_sexagesimais?? ''}}<br><br>-->
                                            <i class="fa fa-group"></i> População Estimada: {{number_format($m->detalhe->populacao_estimada??'',0,'.','.')}}<br>
                                            <i class="fa fa-arrow-up"></i>PIB: {{$m->detalhe->pib_percapita??''}}<br>
                                            <i class="fa fa-arrow-up"></i>IDH: {{$m->detalhe->idh??''}}<br>
                                            <i class="fa fa-dollar"></i>População em extrema pobreza: {{$m->detalhe->pop_plan_saude??''}}% em({{$m->detalhe->pop_plan_saude_ano??''}})<br>
                                            <i class="fa fa-dollar"></i>População com plano de saúde: {{$m->detalhe->pop_extr_pobreza??''}}% em({{$m->detalhe->pop_extr_pobreza_ano??''}})<br>
                                            <div class="row">
                                                <div class="col-sm-12 text-right">
                                                    <a class="btn btn-outline-primary mt-2" href="{{route('dados.edit',$m->id)}}" role="button">EDITAR</a>
                                                </div>
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
                                                <div class="col-sm-7">

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
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <a class="btn btn-outline-primary mt-2" href="{{route('autoridades.index')}}" role="button">LISTA</a>
                                            </div>
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
                                                                            @if($auto->cargo_id==12)
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
                                                    <!--internação-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Internação</b><br>
                                                    </a>
                                                    <!--leitos-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#lei{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Leitos</b><br>
                                                    </a>
                                                    <!--exames realizados-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#exa{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Exame Realizados</b><br>
                                                    </a>
                                                    <!--exames realizados-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#sal{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Salas Cirúrgicas</b><br>
                                                    </a>
                                                    <!--exames RH-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#rh{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>RH</b><br>
                                                    </a>
                                                    <!--exames Folha-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#fo{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Folha SESAM</b><br>
                                                    </a>
                                                    <!--exames Folha-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#equi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Equipamentos</b><br>
                                                    </a>
                                                    <!--servicos-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#ser{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Serviços</b><br>
                                                    </a>
                                                    <!--servidor-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#servi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Servidor</b><br>
                                                    </a>
                                                    <!--veiculos-->
                                                    <a class="btn btn-link" data-toggle="collapse" href="#veicu{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <b>Veículos</b><br>
                                                    </a>

                                                    <!--COLAPSE-->
                                                    <!--colapse internação-->
                                                    <div class="collapse" id="int{{$ho->id}}">
                                                        @if(!$ho->internacao)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>INTERNAÇÃO</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <td>
                                                                    <label><b>INTERNAÇÃO</b></label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Média / dia:</td>
                                                                <td>{{$ho->internacao->media_dia??''}}</td>
                                                                <td>Média / mês:</td>
                                                                <td>{{$ho->internacao->media_mes??''}}</td>
                                                            </tr>
                                                        </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse Leitos-->
                                                    <div class="collapse" id="lei{{$ho->id}}">
                                                        @if(!$ho->leito)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>LEITOS</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <td>
                                                                    <label><b>LEITOS</b></label>
                                                                </td>
                                                            </tr>
                                                            <tr class="table">
                                                                <td>Clínicos:</td>
                                                                <td>{{$ho->leito->leito_clinico ?? 'Informações não cadastradas'}}</td>
                                                                <td>Cirúrgicos:</td>
                                                                <td>{{$ho->leito->leito_cirurgico ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Obstétrico:</td>
                                                                <td>{{$ho->leito->leito_obstetrico ?? 'Informações não cadastradas'}}</td>
                                                                <td>Pediádrico:</td>
                                                                <td>{{$ho->leito->leito_pediatrico ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Outros:</td>
                                                                <td>{{$ho->leito->leito_outro ?? 'Informações não cadastradas'}}</td>
                                                                <td>Suporte Ventilátorio</td>
                                                                <td>{{$ho->leito->suporte_ventilatorio ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>UCI Adulto:</td>
                                                                <td>{{$ho->leito->uci_adulto ?? 'Informações não cadastradas'}}</td>
                                                                <td>UCI Pediátrico</td>
                                                                <td>{{$ho->leito->uci_pediatrico ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total: </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{$ho->leito->total ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                        </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse exames realizados-->
                                                    <div class="collapse" id="exa{{$ho->id}}">
                                                        @if(!$ho->exame)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>EXAMES REALIZADOS</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <td><label><b>EXAMES REALIZADOS</b></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mamografia:</td>
                                                                <td>{{$ho->exame->mamografia ?? 'Informações não cadastradas'}}</td>
                                                                <td>Ultrassonografia</td>
                                                                <td>{{$ho->exame->ultrassonografia ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Raio X:</td>
                                                                <td>{{$ho->exame->raio_x ?? 'Informações não cadastradas'}}</td>
                                                                <td>Eletrocardiograma</td>
                                                                <td>{{$ho->exame->eletrocardiograma ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                        </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse salas cirurgicas-->
                                                    <div class="collapse" id="sal{{$ho->id}}">
                                                        @if(!$ho->salacirurgica)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>SALAS CIRÚRGICAS</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <td><label><b>SALAS CIRÚRGICAS</b></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Existente</td>
                                                                <td>{{$ho->salacirurgica->sala_cirurgicas_existentes ?? 'Informações não cadastradas'}}</td>
                                                                <td>Funcional</td>
                                                                <td>{{$ho->salacirurgica->sala_cirurgicas_funcionais ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                        </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse RH-->
                                                    <div class="collapse" id="rh{{$ho->id}}">
                                                        @if($ho->rh->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>RH</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>RH</b></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categoria</td>
                                                                    <td>SESAM Estatutário</td>
                                                                    <td>SESAM Contrato</td>
                                                                    <td>Prefeitura</td>
                                                                </tr>
                                                                @foreach($ho->rh as $r)
                                                                    <tr>
                                                                        <td>{{$r->rhcategoria->nome}}:</td>
                                                                        <td>{{$r->susam_estatutario}}</td>
                                                                        <td>{{$r->susam_contrato}}</td>
                                                                        <td>{{$r->prefeitura}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td>SubTotal</td>
                                                                    <td>{{$ho->rh->sum('susam_estatutario')}}</td>
                                                                    <td>{{$ho->rh->sum('susam_contrato')}}</td>
                                                                    <td>{{$ho->rh->sum('prefeitura')}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Total</td>
                                                                    <td colspan="2">{{$ho->rh->sum('susam_estatutario')+$ho->rh->sum('susam_contrato')+$ho->rh->sum('prefeitura')}}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse folha-->
                                                    <div class="collapse" id="fo{{$ho->id}}">
                                                        @if($ho->folha->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>FOLHA SESAM</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>FOLHA SESAM</b></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Profissionais de Saúde</td>
                                                                    <td class="text-right">Salário Unitário R$</td>
                                                                    <td class="text-right">Qtd</td>
                                                                    <td class="text-right">Valor R$</td>
                                                                </tr>
                                                                @foreach($ho->folha as $hof)
                                                                    <tr>
                                                                        <td class="text-left">{{$hof->profissional->nome}}</td>
                                                                        <td class="text-right">{{$hof->salario()}}</td>
                                                                        <td class="text-right">{{$hof->SUSAM}}</td>
                                                                        <td class="text-right">{{$hof->msalario()}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td colspan="2" class="text-center">Total</td>
                                                                    <td class="text-right">{{$ho->folha->sum('SUSAM')}}</td>
                                                                    <td class="text-right">{{number_format($ho->folha->sum('total'),2,',','.')}}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse equipamentos-->
                                                    <div class="collapse" id="equi{{$ho->id}}">
                                                        @if($ho->equipamento->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>EQUIPAMENTOS</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>EQUIPAMENTOS</b></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td class="text-center">Existente</td>
                                                                    <td class="text-center">Funcional</td>
                                                                </tr>
                                                                @foreach($ho->equipamento as $equip)
                                                                    <tr>
                                                                        <td>{{$equip->tipoequipamento->nome}}:</td>
                                                                        <td class="text-center">{{$equip->existente}}</td>
                                                                        <td class="text-center">{{$equip->funcional}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse Servicos-->
                                                    <div class="collapse" id="ser{{$ho->id}}">
                                                        @if($ho->servico->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>SERVIÇOS</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>SERVIÇOS</b></label></td>
                                                                </tr>
                                                                @foreach($ho->servico as $se)
                                                                    <tr>
                                                                        <td>{{$se->tiposervico->nome}}</td>
                                                                        <td>{{$se->ativo?"Sim":"Não"}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse Servidor-->
                                                    <div class="collapse" id="servi{{$ho->id}}">
                                                        @if($ho->folha->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>SERVIDOR</b></label></td>
                                                                    <td><i>Informações não Cadastradas</i></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>SERVIDOR</b></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-left">Profissional</td>
                                                                    <td class="text-center">SESAM</td>
                                                                    <td class="text-center">Prefeitura</td>
                                                                    <td class="text-center">Cedido</td>
                                                                    <td class="text-center">Aposentado</td>
                                                                    <td class="text-center">Ativo</td>
                                                                </tr>
                                                                @foreach($ho->folha as $hof)
                                                                    <tr>
                                                                        <td class="text-left">{{$hof->profissional->nome}}</td>
                                                                        <td class="text-center">{{$hof->SUSAM}}</td>
                                                                        <td class="text-center">{{$hof->prefeitura}}</td>
                                                                        <td class="text-center">{{$hof->cedidos}}</td>
                                                                        <td class="text-center">{{$hof->aponsetadoria}}</td>
                                                                        <td class="text-center">{{$hof->servidores_ativos}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td class="text-center">{{$ho->folha->sum('SUSAM')}}</td>
                                                                    <td class="text-center">{{$ho->folha->sum('prefeitura')}}</td>
                                                                    <td class="text-center">{{$ho->folha->sum('cedidos')}}</td>
                                                                    <td class="text-center">{{$ho->folha->sum('aponsetadoria')}}</td>
                                                                    <td class="text-center">{{$ho->folha->sum('servidores_ativos')}}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    </div>
                                                    <!--colapse veiculos-->
                                                    <div class="collapse" id="veicu{{$ho->id}}">
                                                        @if($ho->veiculo->count()==0)
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><label><b>VEÍCULOS</b></label></td>
                                                                    <td><label><i>Informações não Cadastradas</i></label></td>
                                                                </tr>
                                                            </table>
                                                        @else
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <td><label><b>VEÍCULOS</b></label></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center" colspan="2">Administrativo</td>
                                                                <td class="text-center" colspan="2">Ambulância Terrestre</td>
                                                                <td class="text-center" colspan="2">Ambulância Flúvia</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center" >Existente</td>
                                                                <td class="text-center" >Funcional</td>
                                                                <td class="text-center" >Existente</td>
                                                                <td class="text-center" >Funcional</td>
                                                                <td class="text-center" >Existente</td>
                                                                <td class="text-center" >Funcional</td>
                                                            </tr>
                                                            @foreach($ho->veiculo as $hv)
                                                                <tr>
                                                                    <td class="text-center">{{ $hv->administrativo_existente }}</td>
                                                                    <td class="text-center">{{ $hv->administrativo_funcional }}</td>
                                                                    <td class="text-center">{{ $hv->ambulancia_terrestre_existente }}</td>
                                                                    <td class="text-center">{{ $hv->ambulancia_terrestre_funcional }}</td>
                                                                    <td class="text-center">{{ $hv->ambulancia_fluvial_existente }}</td>
                                                                    <td class="text-center">{{ $hv->ambulancia_fluvial_funcional }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                        @endif
                                                    </div>


                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!--fimcolapse-->
                </div>
            </div><!--Fimlinha2-->
        @endforeach
    </div>
@endsection
<script>
    export default {
        props: ['municipio'],
        data(){
            return{
                pesquisa:''
            }
        },
        computed: {
            filterdados(){
                if(this.pesquisa !== ""){
                    return this.municipio.filter(res => {
                        if(res.nome.toLowerCase().match(this.pesquisa.toLowerCase()))
                            return true;
                    });
                } else return this.municipio
            }
        }
    }
</script>
<style>
    @media screen and (max-width: 442px) {
        div.container {
            font-size: 20px;
        }
    }
    @media screen and (max-width: 442px) {
        button.redime{
            font-size: 20px;
            text-align: left;
        }
    }
    @media screen and (min-width: 442px) {
        div.container {
            font-size: 15px;
        }
    }
    @media screen and (min-width: 442px) {
        button.redime{
            font-size: 15px;
            text-align: left;
        }
    }
</style>
