@if($municipio->recursoEstadual->count()==0)
    <i>Informações não Cadastradas</i>
@else
    <div class="row mt-2" style="background:lavenderblush">
        <div class="col-sm-12">
            <label style="color: #1b1e21"><b>RECURSO ESTADUAL</b></label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label><b>ITEM</b></label>
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
    @foreach($itemRecursoEstadual as $i)
        <div class="row table-responsive-sm">
            <div class="col-sm-6">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoEstadual as $mre)
                    @if($mre->ano->ano == ($data-3) and $mre->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mre->valor() }}</div>
                        <span hidden>{{$t3 += $mre->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoEstadual as $mre)
                    @if($mre->ano->ano == ($data-2) and $mre->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mre->valor() }}</div>
                        <span hidden>{{$t2 += $mre->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($municipio->recursoEstadual as $mre)
                    @if($mre->ano->ano == ($data-1) and $mre->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mre->valor() }}</div>
                        <span hidden>{{$t1 += $mre->valor}}</span>
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
@endif

