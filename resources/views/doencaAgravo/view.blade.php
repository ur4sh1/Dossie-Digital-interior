<?php
$data=date('Y')
?>
@if($m->doencasAgravos->count()>0)
    <div class="row table-sm">
        <div class="col-2 tituloVac">
            <label><b>CASOS</b></label><br>
            @foreach($doencas as $d)
                <di>{{$d->nome}}</di><br>
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data-2}}</b></label></div>
            @foreach($m->doencasAgravos as $md)
                @if($md->ano->ano == ($data-2))
                    <div class="nome" style="background: #a8f3c4">{{$md->doencas->nome}}</div>
                    <div class="text-right">{{$md->casos}}</div>
                @endif
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data-1}}</b></label></div>
            @foreach($m->doencasAgravos as $md)
                @if($md->ano->ano == ($data-1))
                    <div class="nome" style="background: #a8f3c4">{{$md->doencas->nome}}</div>
                    <div class="text-right">{{$md->casos}}</div>
                @endif
            @endforeach
        </div>
        <div class="col-sm-1">
            <div class="col"><label><b>{{$data}}</b></label></div>
            @foreach($m->doencasAgravos as $md)
                @if($md->ano->ano == ($data))
                    <div class="nome" style="background: #a8f3c4">{{$md->doencas->nome}}</div>
                    <div class="text-right">{{$md->casos}}</div>
                @endif
            @endforeach
        </div>
    </div>
@else
    Não existe Informações cadastradas
@endif

