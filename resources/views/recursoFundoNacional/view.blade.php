@if($m->recursoFundoNacional->count()==0)
    <i>Informações não Cadastradas</i>
@else
    <?php
    $data=date('Y');
    $totalline1=0;
    $totalline2=0;
    $t1=0;
    $t2=0;
    $t3=0;
    $t11=0;
    $t22=0;
    $t33=0;
    ?>
    <div class="desktop">
        <div class="row mt-2" style="background:lavenderblush">
            <div class="col-sm-12">
                <label style="color: #1b1e21"><b>RECURSO FUNDO NACIONAL</b></label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12" style="background: #64d5ca">
                <div id="grafic"></div>
            </div>
        </div>
        <div class="row" style="background: #a8f3c4">
            <div class="col-sm-4">
                <label><b>ITEM - CUSTEIO</b></label>
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
        @foreach($itemRecursoFundoNacional as $i)
            <span hidden>{{ $totalline1=0 }}</span>
            <div class="row table-responsive-sm">
                <div class="col-sm-4">
                    <div class="text-left">{{ $i->descricao }}</div>
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data-2) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t3 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline1 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data-1) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t2 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline1 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t1 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline1 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2 text-right">
                    <div class="text-right"><b>{{number_format($totalline1,2,',','.')}}</b></div>
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

        <!--modicicado-->
        <div class="row" style="background: #a8f3c4">
            <div class="col-sm-4">
                <label><b>ITEM - INVESTIMENTO</b></label>
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
        @foreach($itemRecursoFundoNacional as $i)
            <span hidden>{{ $totalline2=0 }}</span>
            <div class="row">
                <div class="col-sm-4">
                    <div class="text-left">{{ $i->descricao }}</div>
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data-2) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t33 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline2 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data-1) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t22 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline2 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2">
                    @foreach($m->recursoFundoNacional as $mrfn)
                        @if($mrfn->ano->ano == ($data) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                            <div class="text-right">{{ $mrfn->valor() }}</div>
                            <span hidden>{{$t11 += $mrfn->valor}}</span>
                            <span hidden>{{$totalline2 += $mrfn->valor}}</span>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-2 text-right">
                    <div class="text-right"><b>{{number_format($totalline2,2,',','.')}}</b></div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-sm-4">
                <label><b>TOTAL</b></label>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t33,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t22,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format($t11,2,',','.')}}</b></div>
            </div>
            <div class="col-sm-2">
                <div class="text-right"><b>{{number_format(($t11+$t22+$t33),2,',','.')}}</b></div>
            </div>
        </div>
    </div>
    <!--     versão mobie-->
    @include('recursoFundoNacional.mobile')
@endif
