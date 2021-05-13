<?php
$data=date('Y')
?>
<div class="row table-sm">
    <div class="col-2 tituloVac">
        <label><b>IMUNOBIOLÓGICA</b></label><br>
        @foreach($imunobiologicas as $i)
            <di>{{$i->nome}}</di><br>
        @endforeach
    </div>
    <div class="col-sm-1">
        <label><b>{{$data-3}}</b></label>
        @foreach($m->coberturaVacinal as $mc)
            @if($mc->ano->ano == ($data-3))
                <div class="nome">{{$mc->imunobiologica->nome}}</div>
                <div class="text-right">{{$mc->porcentagem}}%</div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-1">
        <label><b>{{$data-2}}</b></label>
        @foreach($m->coberturaVacinal as $mc)
            @if($mc->ano->ano == ($data-2))
                <div class="nome">{{$mc->imunobiologica->nome}}</div>
                <div class="text-right">{{$mc->porcentagem}}%</div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-1">
        <label><b>{{$data-1}}</b></label>
        @foreach($m->coberturaVacinal as $mc)
            @if($mc->ano->ano == ($data-1))
                <div class="nome">{{$mc->imunobiologica->nome}}</div>
                <div class="text-right">{{$mc->porcentagem}}%</div>
            @endif
        @endforeach
    </div>
</div>
