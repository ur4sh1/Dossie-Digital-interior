@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Municípios</h1>
        </div>
        <div class="text-right mb-2">
            <div class="form-group">
                <a class="btn btn-primary" href="{{action('MunicipiosController@indexAlternativo')}}" role="button">VIEW</a>
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
                                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#end{{$ho->id}}">
                                                            {{$ho->nome}}
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="end{{$ho->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ...TEXTO TESTE
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

                                                    <!--COLAPSE-->
                                                        <!--colapse internação-->
                                                        <div class="collapse" id="int{{$ho->id}}">
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
                                                        </div>
                                                        <!--colapse Leitos-->
                                                        <div class="collapse" id="lei{{$ho->id}}">
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
