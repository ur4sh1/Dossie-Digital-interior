@if($m->recursoEstadual->count()==0)
    <i>Informações não Cadastradas</i>
@else
    <?php
    $data=date('Y');
    global $tre1;
    $tre1=0;
    global $tre2;
    $tre2=0;
    global $tre3;
    $tre3=0;
    ?>
    <div class="desktop">
        <div class="row mt-2" style="background:lavenderblush">
            <div class="col-sm-12">
                <label style="color: #1b1e21"><b>RECURSO ESTADUAL</b></label>
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
        @foreach($itemRecursoEstadual as $i)
        <span hidden>{{ $t0=0 }}</span>
            <div class="row table-responsive-sm">
                <div class="col-sm-4">
                    <div class="text-left descricaogrande">{{ $i->descricao }}</div>
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoEstadual as $mr)
                        @if($mr->ano->ano == ($data-2) and $mr->item_recurso_estadual_id == $i->id)
                            <div class="text-right">{{ $mr->valor() }}</div>
                            <span hidden>{{$tre1 += $mr->valor}}</span>
                            <span hidden>{{$t0 += $mr->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoEstadual as $mr)
                        @if($mr->ano->ano == ($data-1) and $mr->item_recurso_estadual_id == $i->id)
                            <div class="text-right">{{ $mr->valor() }}</div>
                            <span hidden>{{$tre2 += $mr->valor}}</span>
                            <span hidden>{{$t0 += $mr->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoEstadual as $mr)
                        @if($mr->ano->ano == ($data) and $mr->item_recurso_estadual_id == $i->id)
                            <div class="text-right">{{ $mr->valor() }}</div>
                            <span hidden>{{$tre3 += $mr->valor}}</span>
                            <span hidden>{{$t0 += $mr->valor}}</span>
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
                <div class="text-right"><b>{{number_format($tre1,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($tre2,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($tre3,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format(($tre1+$tre2+$tre3),2,',','.')}}</b></div>
            </div>
        </div>
    </div>
    <!--     versão mobie-->
    @include('recursoEstadual.mobile')
@endif
<style>
    div.descricaogrande {
        width: 350px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
</style>
