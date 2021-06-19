<div class="mobile">
    <?php
    $data=date('Y');
    $t0=0;
    $m0=0;
    $m1=0;
    $m2=0;
    $m3=0;
    $n1=0;
    $n2=0;
    $n3=0;
    ?>
    <div style="color: #1b1e21; background:lavenderblush"><b>RECURSO ESTADUAL</b></div>
    <div id="carouselExampleIndicatorsRecursoEstadual" class="carousel slide" data-ride="carousel"  data-interval="0">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicatorsRecursoEstadual" data-slide-to="3"></li>
        </ol>
        @foreach($itemRecursoEstadual as $i)
        <div class="carousel-inner" data-interval="0">
            <div class="carousel-item active" data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-2 }}</b></div>

                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m3,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data-1 }}</b></div>

                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m2,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>{{ $data }}</b></div>

                <div><b>TOTAL</b></div>
                <div class="text-right"><b>{{number_format($m1,2,',','.')}}</b></div>
            </div>
            <div class="carousel-item"  data-interval="0">
                <div class="text-center" style="color: #1b1e21; background:lavenderblush"><b>TOTAL</b></div>

                            <div style="background:#b1e8ca" class="text-left descricaogrande">{{ $i->descricao }}</div>


                <div><b>TOTAL</b></div>

            </div>
        </div>
        @endforeach
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
