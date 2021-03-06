@if($m->recursoFundoEstadual->count()==0)
    <i>Informações não Cadastradas</i>
@else
    <?php
    $data=date('Y');
    $t0=0;
    $t1=0;
    $t2=0;
    $t3=0;
    ?>
    <div class="desktop">
        <div class="row mt-2" style="background:lavenderblush">
            <div class="col-sm-12">
                <label style="color: #1b1e21"><b>RECURSO FUNDO ESTADUAL</b></label>
            </div>
        </div>
        <div class="row" style="background: #a8f3c4">
            <div class="col-sm-4">
                <label><b>ITEM</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{ $data-2 }}</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{ $data-1 }}</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{ $data }}</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>TOTAL</b></label>
            </div>
        </div>
        @foreach($itemRecursoFundoEstadual as $i)
            <span hidden>{{ $t0=0 }}</span>
            <div class="row table-responsive-sm">
                <div class="col-sm-4">
                    <div class="text-left">{{ $i->descricao }}</div>
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoEstadual as $mrf)
                        @if($mrf->ano->ano == ($data-2) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                            <div class="text-right">{{ $mrf->valor() }}</div>
                            <span hidden>{{$t3 += $mrf->valor}}</span>
                            <span hidden>{{$t0 += $mrf->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoEstadual as $mrf)
                        @if($mrf->ano->ano == ($data-1) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                            <div class="text-right">{{ $mrf->valor() }}</div>
                            <span hidden>{{$t2 += $mrf->valor}}</span>
                            <span hidden>{{$t0 += $mrf->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoEstadual as $mrf)
                        @if($mrf->ano->ano == ($data) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                            <div class="text-right">{{ $mrf->valor() }}</div>
                            <span hidden>{{$t1 += $mrf->valor}}</span>
                            <span hidden>{{$t0 += $mrf->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2 text-right">
                    <div class="text-right"><b>{{number_format($t0,2,',','.')}}</b></div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-sm-4">
                <label><b>TOTAL</b></label>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t3,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t2,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t1,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format(($t1+$t2+$t3),2,',','.')}}</b></div>
            </div>
        </div>
    </div>
    <!--     versão mobie-->
    @include('recursoFundoEstadual.mobile')
@endif
<style>
    div.descricaogrande {
        width: 350px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
</style>
