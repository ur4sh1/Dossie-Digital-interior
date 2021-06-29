<div class="mobile">
    <?php
    $data=date('Y');
    $col1=0;
    $col2=0;
    $col3=0;
    $tc1=0;
    $tc2=0;
    $tc3=0;
    ?>
    <div style="color: #1b1e21; background:lavenderblush"><b>RECURSO ESTADUAL</b></div>
    <div id="carouselExampleIndicatorsRecursoEstadual" class="carousel slide" data-ride="carousel"  data-interval="0">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" data-interval="0">
            <div class="carousel-item active" data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-2 }}</b></div>
                @foreach($itemRecursoEstadual as $i)
                    @foreach($m->recursoEstadual as $mrem)
                        @if($mrem->ano->ano == ($data-2) and $mrem->item_recurso_estadual_id == $i->id)
                            @if($mrem->item_recurso_estadual_id == $i->id)
                                <div style="background:#b3e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                            <div class="text-right"><a class="link-primary" href="{{route('recursoEstadualEditvalor',array('id'=>$mr->id,'mid'=>$municipio->id))}}">{{ $mrem->valor() }}</a></div>
                                <span hidden>{{$col1 += $mrem->valor}}</span>
                                <span hidden>{{$tc1 += $mrem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($col1,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-1 }}</b></div>
                @foreach($itemRecursoEstadual as $i)
                    @foreach($m->recursoEstadual as $mrem)
                        @if($mrem->ano->ano == ($data-1) and $mrem->item_recurso_estadual_id == $i->id)
                            @if($mrem->item_recurso_estadual_id == $i->id)
                                <div style="background:#b2e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                                <div class="text-right"><a class="link-primary" href="{{route('recursoEstadualEditvalor',array('id'=>$mr->id,'mid'=>$municipio->id))}}">{{ $mrem->valor() }}</a></div>
                            <span hidden>{{$col2 += $mrem->valor}}</span>
                            <span hidden>{{$tc2 += $mrem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($col2,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data }}</b></div>
                @foreach($itemRecursoEstadual as $i)
                    @foreach($m->recursoEstadual as $mrem)
                        @if($mrem->ano->ano == ($data) and $mrem->item_recurso_estadual_id == $i->id)
                            @if($mrem->item_recurso_estadual_id == $i->id)
                                <div style="background:#b1e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>
                            @endif
                                <div class="text-right"><a class="link-primary" href="{{route('recursoEstadualEditvalor',array('id'=>$mr->id,'mid'=>$municipio->id))}}">{{ $mrem->valor() }}</a></div>
                            <span hidden>{{$col3 += $mrem->valor}}</span>
                            <span hidden>{{$tc3 += $mrem->valor}}</span>
                        @endif
                    @endforeach
                @endforeach
                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($col3,2,',','.')}}</b></div>
            </div>

        </div>
        <a class="carousel-control-prev"  data-interval="0" href="#carouselExampleIndicatorsRecursoEstadual" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next"  data-interval="0" href="#carouselExampleIndicatorsRecursoEstadual" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
