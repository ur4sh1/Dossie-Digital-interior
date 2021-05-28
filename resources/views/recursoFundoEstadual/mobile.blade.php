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
    <div style="color: #1b1e21; background:lavenderblush"><b>RECURSO FUNDO ESTADUAL</b></div>

    <div id="carouselExampleIndicatorsRecursoFundoEstadual" class="carousel slide" data-ride="carousel"  data-interval="0">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicatorsRecursoFundoEstadual" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicatorsRecursoFundoEstadual" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicatorsRecursoFundoEstadual" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" data-interval="0">
            <div class="carousel-item active" data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-3 }}</b></div>
                @foreach($itemRecursoFundoEstadual as $i)
                    @foreach($m->recursoFundoEstadual as $mfem)
                        @if($mfem->ano->ano == ($data-3) and $mfem->item_recurso_fundo_estadual_id == $i->id)
                            @if($mfem->item_recurso_fundo_estadual_id == $i->id)
                                <div style="background:#b3e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                            <div class="text-right">{{ $mfem->valor() }}</div>
                            <span hidden>{{$m3 += $mfem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m3,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-2 }}</b></div>
                @foreach($itemRecursoFundoEstadual as $i)
                    @foreach($m->recursoFundoEstadual as $mfem)
                        @if($mfem->ano->ano == ($data-2) and $mfem->item_recurso_fundo_estadual_id == $i->id)
                            @if($mfem->item_recurso_fundo_estadual_id == $i->id)
                                <div style="background:#b2e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                            <div class="text-right">{{ $mfem->valor() }}</div>
                            <span hidden>{{$m2 += $mfem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m2,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-1 }}</b></div>
                @foreach($itemRecursoFundoEstadual as $i)
                    @foreach($m->recursoFundoEstadual as $mfem)
                        @if($mfem->ano->ano == ($data-1) and $mfem->item_recurso_fundo_estadual_id == $i->id)
                            @if($mfem->item_recurso_fundo_estadual_id == $i->id)
                                <div style="background:#b1e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                            <div class="text-right">{{ $mfem->valor() }}</div>
                            <span hidden>{{$m1 += $mfem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m1,2,',','.')}}</b></div>
            </div>
        </div>
        <a class="carousel-control-prev"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoEstadual" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"  data-interval="0" href="#carouselExampleIndicatorsRecursoFundoEstadual" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
