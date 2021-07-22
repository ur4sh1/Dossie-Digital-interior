<div class="mobile">
    <?php
    $data=date('Y');
    $m1=0;
    $m2=0;
    $m3=0;
    $n1=0;
    $n2=0;
    $n3=0;
    ?>
    <div style="color: #1b1e21; background:lavenderblush"><b>RECURSO FUNDO NACIONAL</b></div>

    <div id="carouselExampleIndicatorsRecursoFundoNacional" class="carousel slide" data-ride="carousel"  data-interval="0">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicatorsRecursoFundoNacional" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicatorsRecursoFundoNacional" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicatorsRecursoFundoNacional" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" data-interval="0">
            <div class="carousel-item active" data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>CUSTEIO-{{ $data-2 }}</b></div>
                @foreach($itemRecursoFundoNacional as $i)
                    @foreach($municipio->recursoFundoNacional as $mfnm)
                        @if($mfnm->ano->ano == ($data-2) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 1)
                            @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                <div style="background:#b3e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                                <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                            <span hidden>{{$m3 += $mfnm->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m3,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>CUSTEIO-{{ $data-1 }}</b></div>
                @foreach($itemRecursoFundoNacional as $i)
                    @foreach($municipio->recursoFundoNacional as $mfnm)
                        @if($mfnm->ano->ano == ($data-1) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 1)
                            @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                <div style="background:#b2e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                                <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                            <span hidden>{{$m2 += $mfnm->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m2,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>CUSTEIO-{{ $data }}</b></div>
                @foreach($itemRecursoFundoNacional as $i)
                    @foreach($municipio->recursoFundoNacional as $mfnm)
                        @if($mfnm->ano->ano == ($data) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 1)
                            @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                <div style="background:#b1e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                                <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                            <span hidden>{{$m1 += $mfnm->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m1,2,',','.')}}</b></div>
            </div>
        </div>
        <a class="carousel-control-prev"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoNacional" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoNacional" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--    INVESTIMENTO    -->
        <div class="mt-3" style="color: #1b1e21; background:lavenderblush"><b>RECURSO FUNDO NACIONAL</b></div>
        <div id="carouselExampleIndicatorsRecursoFundoNacional2" class="carousel slide" data-ride="carousel"  data-interval="0">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicatorsRecursoFundoNacional2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicatorsRecursoFundoNacional2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicatorsRecursoFundoNacional2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" data-interval="0">
                <div class="carousel-item active" data-interval="0">
                    <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>INVESTIMENTO-{{ $data-2 }}</b></div>
                    @foreach($itemRecursoFundoNacional as $i)
                        @foreach($municipio->recursoFundoNacional as $mfnm)
                            @if($mfnm->ano->ano == ($data-2) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 2)
                                @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                    <div style="background:#b3e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                                @endif
                                    <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                                <span hidden>{{$n3 += $mfnm->valor}}</span>
                            @endif
                        @endforeach
                    @endforeach
                    <div><b>TOTAL</b></div>
                    <div class="text-right"><b>{{number_format($n3,2,',','.')}}</b></div>
                </div>
                <div class="carousel-item"  data-interval="0">
                    <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>INVESTIMENTO-{{ $data-1 }}</b></div>
                    @foreach($itemRecursoFundoNacional as $i)
                        @foreach($municipio->recursoFundoNacional as $mfnm)
                            @if($mfnm->ano->ano == ($data-1) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 2)
                                @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                    <div style="background:#b2e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                                @endif
                                    <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                                <span hidden>{{$n2 += $mfnm->valor}}</span>
                            @endif
                        @endforeach
                    @endforeach
                    <div><b>TOTAL</b></div>
                    <div class="text-right"><b>{{number_format($n2,2,',','.')}}</b></div>
                </div>
                <div class="carousel-item"  data-interval="0">
                    <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>INVESTIMENTO-{{ $data }}</b></div>
                    @foreach($itemRecursoFundoNacional as $i)
                        @foreach($municipio->recursoFundoNacional as $mfnm)
                            @if($mfnm->ano->ano == ($data) and $mfnm->item_recurso_fundo_nacional_id == $i->id and $mfnm->tipo_recurso_nacional_id == 2)
                                @if($mfnm->item_recurso_fundo_nacional_id == $i->id)
                                    <div style="background:#b1e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                                @endif
                                    <div class="text-right"><a href="{{route('recursoFundoNacionalEditValor',array('id'=>$mrfn->id,'mid'=>$municipio->id))}}" class="text-right">{{ $mfnm->valor() }}</a></div>
                                <span hidden>{{$n1 += $mfnm->valor}}</span>
                            @endif
                        @endforeach
                    @endforeach
                    <div><b>TOTAL</b></div>
                    <div class="text-right"><b>{{number_format($n1,2,',','.')}}</b></div>
                </div>
            </div>
            <a class="carousel-control-prev"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoNacional2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoNacional2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>
