@if($municipio->recursoFundoNacional->count()==0)
    <i>Informações não Cadastradas</i>
@else
    <div class="row mt-2" style="background:lavenderblush">
        <div class="col-sm-12">
            <label style="color: #1b1e21"><b>RECURSO FUNDO NACIONAL</b></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label><b>ITEM - CUSTEIO</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-3 }}</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-2 }}</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-1 }}</b></label>
        </div>
    </div>
    @foreach($itemRecursoFundoNacional as $i)
        <div class="row table-responsive-sm">
            <div class="col-sm-6">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-3) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t3 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-2) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t2 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-1) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t1 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-sm-6">
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
    </div>

    <div class="row mt-2" style="background:lavenderblush">
        <div class="col-sm-12">
            <label style="color: #1b1e21"><b>RECURSO FUNDO NACIONAL</b></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label><b>ITEM - INVESTIMENTO</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-3 }}</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-2 }}</b></label>
        </div>
        <div class="col-sm-2 text-right">
            <label><b>{{ $data-1 }}</b></label>
        </div>
    </div>
    @foreach($itemRecursoFundoNacional as $i)
        <div class="row table-responsive-sm">
            <div class="col-sm-6">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-3) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t33 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-2) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t22 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-1) and $mrfn->item_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$t11 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-sm-6">
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
    </div>
@endif
