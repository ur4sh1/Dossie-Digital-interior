@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Municípios</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
            </div>
        </div>
        @foreach($municipio as $m)
            <div class="row"><!--linha1-->
                <div class="col-lg-7">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#expander{{$m->id}}" aria-expanded="true" aria-controls="collapseOne">
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
<!--                                        <i class="fa fa-globe"></i> Latitude Sexagesimal: {{$m->dados->latitude_sexagesimais?? ''}}<br>
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

                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#detail{{$auto->id}}">
                                                        <b>{{$auto->cargo->nome}}:</b> {{$auto->nome}}
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
                                    @if($m->hospital->count()==0)
                                        <i>Informações não cadastradas</i>
                                    @else
                                        @foreach ($m->hospital as $ho)
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#exp{{$ho->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                {{$ho->nome}}<br>
                                            </button>
                                            <div class="collapse" id="exp{{$ho->id}}"> <!--comecoColapse-->
                                                <div class="row mt-12"><!--linha-->
                                                    <div class="col-sm-6"> <!--colunaEsquerda-->
                                                        <b>Internação</b><br>
                                                        <table class="table table-sm border">
                                                            <tr>
                                                                <td>Média / dia:</td>
                                                                <td>{{$ho->internacao->media_dia??''}}</td>
                                                                <td>Média / mês:</td>
                                                                <td>{{$ho->internacao->media_mes??''}}</td>
                                                            </tr>
                                                        </table>
                                                        <b>Leitos</b><br>
                                                        <table class="table table-sm border">
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
                                                        <b>Veículos</b><br>
                                                        <table class="table table-sm border">
                                                            <tr>
                                                                <td></td>
                                                                <td>Existente</td>
                                                                <td>Funcional</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Administrativo:</td>
                                                                <td>{{$ho->veiculo->administrativo_existente ?? 'Informações não cadastradas'}}</td>
                                                                <td>{{$ho->veiculo->administrativo_funcional ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ambulância Terrestre:</td>
                                                                <td>{{$ho->veiculo->ambulancia_terrestre_existente ?? 'Informações não cadastradas'}}</td>
                                                                <td>{{$ho->veiculo->ambulancia_terrestre_funcional ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ambulância Fluvial:</td>
                                                                <td>{{$ho->veiculo->ambulancia_fluvial_existente ?? 'Informações não cadastradas'}}</td>
                                                                <td>{{$ho->veiculo->ambulancia_fluvial_funcional ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total: </td>
                                                                <td>{{$ho->veiculo->total ?? 'Informações não cadastradas'}}</td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                        <b>Exames Realizados</b><br>
                                                        <table class="table table-sm border">
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
                                                        <b>Salas Cirúrgicas</b><br>
                                                        <table class="table table-sm border">
                                                            <tr>
                                                                <td>Existente</td>
                                                                <td>{{$ho->salacirurgica->sala_cirurgicas_existentes ?? 'Informações não cadastradas'}}</td>
                                                                <td>Funcional</td>
                                                                <td>{{$ho->salacirurgica->sala_cirurgicas_funcionais ?? 'Informações não cadastradas'}}</td>
                                                            </tr>
                                                        </table>
                                                        <b>RH</b><br>
                                                        @if($ho->rh->count()==0)
                                                            <i>Informações não Cadastradas</i><br>
                                                        @else
                                                            <table class="table table-sm border">
                                                                <tr>
                                                                    <td>Categoria</td>
                                                                    <td>SUSAM Estatutário</td>
                                                                    <td>SUSAM Contrato</td>
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
                                                        <b>Folha SUSAM</b><br>
                                                        @if($ho->folha->count()==0)
                                                            <i>Informações não Cadastradas</i>
                                                        @else
                                                            <table class="table table-sm border">
                                                                <tr>
                                                                    <td>Profissionais de Saúde</td>
                                                                    <td>Salário Unitário R$</td>
                                                                    <td>Qtd</td>
                                                                    <td>Valor R$</td>
                                                                </tr>
                                                                @foreach($ho->folha as $hof)
                                                                    <tr>
                                                                        <td>{{$hof->profissional->nome}}</td>
                                                                        <td class="text-right">{{$hof->salario()}}</td>
                                                                        <td class="text-right">{{$hof->SUSAM}}</td>
                                                                        <td class="text-right">{{$hof->msalario()}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td></td>
                                                                    <td>{{$ho->folha->sum('SUSAM')}}</td>
                                                                    <td class="text-right">{{number_format($ho->folha->sum('total'),2,',','.')}}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    </div> <!--fimcolunaesquerda-->
                                                    <div class="col-sm-6"> <!--colunadireita-->
                                                        <br><b>Equipamentos</b><br>
                                                        @if($ho->equipamento->count()==0)
                                                            <i>Informações não Cadastradas</i><br>
                                                        @else
                                                            <table class="table table-sm border">
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Existente</td>
                                                                    <td>Funcional</td>
                                                                </tr>
                                                                @foreach($ho->equipamento as $equip)
                                                                    <tr>
                                                                        <td>{{$equip->tipoequipamento->nome}}:</td>
                                                                        <td>{{$equip->existente}}</td>
                                                                        <td>{{$equip->funcional}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        @endif
                                                        <b>Serviços</b><br>
                                                        @if($ho->servico->count()==0)
                                                            <i>Informações não Cadastradas</i><br>
                                                        @else
                                                            <table class="table table-sm border">
                                                                @foreach($ho->servico as $se)
                                                                    <tr>
                                                                        <td>{{$se->tiposervico->nome}}</td>
                                                                        <td>{{$se->ativo?"Sim":"Não"}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        @endif
                                                        <b>Servidor</b><br>
                                                        @if($ho->folha->count()==0)
                                                            <i>Informações não Cadastradas</i>
                                                        @else
                                                            <table class="table table-sm border">
                                                                <tr>
                                                                    <td>Profissional</td>
                                                                    <td>SUSAM</td>
                                                                    <td>Prefeitura</td>
                                                                    <td>Cedido</td>
                                                                    <td>Aposentado</td>
                                                                    <td>Ativo</td>
                                                                </tr>
                                                                @foreach($ho->folha as $hof)
                                                                    <tr>
                                                                        <td>{{$hof->profissional->nome}}</td>
                                                                        <td>{{$hof->SUSAM}}</td>
                                                                        <td>{{$hof->prefeitura}}</td>
                                                                        <td>{{$hof->cedidos}}</td>
                                                                        <td>{{$hof->aponsetadoria}}</td>
                                                                        <td>{{$hof->servidores_ativos}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td>{{$ho->folha->sum('SUSAM')}}</td>
                                                                    <td>{{$ho->folha->sum('prefeitura')}}</td>
                                                                    <td>{{$ho->folha->sum('cedidos')}}</td>
                                                                    <td>{{$ho->folha->sum('aponsetadoria')}}</td>
                                                                    <td>{{$ho->folha->sum('servidores_ativos')}}</td>
                                                                </tr>
                                                            </table>
                                                        @endif
                                                    </div><!--fimcolunadireita-->
                                                </div><!--Fimlinha-->
                                            </div><!--fimcolapse-->
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
