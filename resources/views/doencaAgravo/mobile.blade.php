<?php
$data=date('Y')
?>
@if($m->coberturaVacinal->count()>0)
    <div style="color: #1b1e21; background:lavenderblush"><b>CASOS</b></div>
    <div id="carouselExampleIndicatorsRecursoEstadual" class="carousel slide" data-ride="carousel"  data-interval="0">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" data-interval="0">
            <div class="carousel-item active" data-interval="0">
                <div class="car text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-2 }}</b></div>
                @foreach($doencas as $d)
                        @foreach($m->doencasAgravos as $md)
                            @if($md->ano->ano==$data-2 and $md->doenca_id==$d->id)
                                <div class="d-flex justify-content-between"><label>{{$d->nome}}</label>{{$md->casos}}</div>
                            @endif
                        @endforeach
                @endforeach
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="car text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-1 }}</b></div>
                @foreach($doencas as $d)
                    @foreach($m->doencasAgravos as $md)
                        @if($md->ano->ano==$data-1 and $md->doenca_id==$d->id)
                            <div class="d-flex justify-content-between"><label>{{$d->nome}}</label>{{$md->casos}}</div>
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="car text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data }}</b></div>
                @foreach($doencas as $d)
                    @foreach($m->doencasAgravos as $md)
                        @if($md->ano->ano==$data and $md->doenca_id==$d->id)
                            <div class="d-flex justify-content-between"><label>{{$d->nome}}</label>{{$md->casos}}</div>
                        @endif
                    @endforeach
                @endforeach
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
@else
    <i>Não existe informações cadastradas</i>
@endif

