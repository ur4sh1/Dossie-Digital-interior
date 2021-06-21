<?php
$data=date('Y')
?>
@if($m->coberturaVacinal->count()>0)
    <div class="row table-sm">
        <div class="col-2 tituloVac">
            <label><b>IMUNOBIOLÓGICA</b></label><br>
            @foreach($imunobiologicas as $i)
                <di>{{$i->nome}}</di><br>
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data-2}}</b></label></div>
            @foreach($m->coberturaVacinal as $mc)
                @if($mc->ano->ano == ($data-2))
                    <div class="nome" style="background: #a8f3c4">{{$mc->imunobiologica->nome}}</div>
                    <div class="text-right">{{$mc->porcentagem}}%</div>
                @endif
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data-1}}</b></label></div>
            @foreach($m->coberturaVacinal as $mc)
                @if($mc->ano->ano == ($data-1))
                    <div class="nome" style="background: #a8f3c4">{{$mc->imunobiologica->nome}}</div>
                    <div class="text-right">{{$mc->porcentagem}}%</div>
                @endif
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data}}</b></label></div>
            @foreach($m->coberturaVacinal as $mc)
                @if($mc->ano->ano == ($data))
                    <div class="nome" style="background: #a8f3c4">{{$mc->imunobiologica->nome}}</div>
                    <div class="text-right">{{$mc->porcentagem}}%</div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <i>Não existe informações cadastradas</i>
@endif
