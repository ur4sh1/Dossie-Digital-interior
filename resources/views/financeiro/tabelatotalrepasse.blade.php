
@if($m->recursoEstadual->count()==0)

@else
    <?php
    $data=date('Y');
    $tre1=0;
    $tre2=0;
    $tre3=0;
    $trfe1=0;
    $trfe2=0;
    $trfe3=0;
    $trfn1=0;
    $trfn2=0;
    $trfn3=0;
    $trfnI1=0;
    $trfnI2=0;
    $trfnI3=0;
    ?>
    {{--REPASSE ESTADUAL--}}
    @foreach($itemRecursoEstadual as $i)
        <span hidden>{{ $tre0=0 }}</span>
        <div hidden class="row table-responsive-sm">
            <div class="col-sm-4">
                <div class="text-left descricaogrande">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoEstadual as $mr)
                    @if($mr->ano->ano == ($data-2) and $mr->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mr->valor() }}</div>
                        <span hidden>{{$tre1 += $mr->valor}}</span>
                        <span hidden>{{$tre0 += $mr->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoEstadual as $mr)
                    @if($mr->ano->ano == ($data-1) and $mr->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mr->valor() }}</div>
                        <span hidden>{{$tre2 += $mr->valor}}</span>
                        <span hidden>{{$tre0 += $mr->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoEstadual as $mr)
                    @if($mr->ano->ano == ($data) and $mr->item_recurso_estadual_id == $i->id)
                        <div class="text-right">{{ $mr->valor() }}</div>
                        <span hidden>{{$tre3 += $mr->valor}}</span>
                        <span hidden>{{$tre0 += $mr->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    {{--REPASSE FUNDO ESTADUAL--}}
    @foreach($itemRecursoFundoEstadual as $i)
        <span hidden>{{ $trfe0=0 }}</span>
        <div hidden class="row table-responsive-sm">
            <div class="col-sm-4">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoEstadual as $mrf)
                    @if($mrf->ano->ano == ($data-2) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                        <div class="text-right">{{ $mrf->valor() }}</div>
                        <span hidden>{{$trfe1 += $mrf->valor}}</span>
                        <span hidden>{{$trfe0 += $mrf->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoEstadual as $mrf)
                    @if($mrf->ano->ano == ($data-1) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                        <div class="text-right">{{ $mrf->valor() }}</div>
                        <span hidden>{{$trfe2 += $mrf->valor}}</span>
                        <span hidden>{{$trfe0 += $mrf->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoEstadual as $mrf)
                    @if($mrf->ano->ano == ($data) and $mrf->item_recurso_fundo_estadual_id == $i->id)
                        <div class="text-right">{{ $mrf->valor() }}</div>
                        <span hidden>{{$trfe3 += $mrf->valor}}</span>
                        <span hidden>{{$trfe0 += $mrf->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    {{--REPASSE FUNDO NACIONAL CUSTEIO--}}
    @foreach($itemRecursoFundoNacional as $i)
        <span hidden>{{ $trfn0=0 }}</span>
        <div hidden class="row table-responsive-sm">
            <div class="col-sm-4">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-2) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfn1 += $mrfn->valor}}</span>
                        <span hidden>{{$trfn0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-1) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfn2 += $mrfn->valor}}</span>
                        <span hidden>{{$trfn0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 1)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfn3 += $mrfn->valor}}</span>
                        <span hidden>{{$trfn0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    {{--REPASSE FUNDO NACIONAL INVESTIMENTO--}}
    @foreach($itemRecursoFundoNacional as $i)
        <span hidden>{{ $trfnI0=0 }}</span>
        <div hidden class="row">
            <div class="col-sm-4">
                <div class="text-left">{{ $i->descricao }}</div>
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-2) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfnI1 += $mrfn->valor}}</span>
                        <span hidden>{{$trfnI0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data-1) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfnI2 += $mrfn->valor}}</span>
                        <span hidden>{{$trfnI0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-2">
                @foreach($m->recursoFundoNacional as $mrfn)
                    @if($mrfn->ano->ano == ($data) and $mrfn->item_recurso_fundo_nacional_id == $i->id and $mrfn->tipo_recurso_nacional_id == 2)
                        <div class="text-right">{{ $mrfn->valor() }}</div>
                        <span hidden>{{$trfnI3 += $mrfn->valor}}</span>
                        <span hidden>{{$trfnI0 += $mrfn->valor}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    <table class="table table-responsive-sm">
        <thead  style="background: #a8f3c4">
            <tr>
                <td style="background:lavenderblush; border-radius: 15px;" colspan="5"><b>TOTAL REPASSE PARA O MUNICÍPIO</b></td>
            </tr>
        <tr>
            <th scope="col"></th>
            <th scope="col" class="text-right">{{ $data-2 }}</th>
            <th scope="col" class="text-right">{{ $data-1 }}</th>
            <th scope="col" class="text-right">{{ $data }}</th>
            <th scope="col" class="text-right">TOTAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><b>Recurso Estadual</b></td>
            <td class="text-right">{{number_format($tre1,2,',','.')}}</td>
            <td class="text-right">{{number_format($tre2,2,',','.')}}</td>
            <td class="text-right">{{number_format($tre3,2,',','.')}}</td>
            <td class="text-right">{{number_format(($tre1+$tre2+$tre3),2,',','.')}}</td>
        </tr>
        <tr>
            <td><b>Recurso fundo Estadual</b></td>
            <td class="text-right">{{number_format($trfe1,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfe2,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfe3,2,',','.')}}</td>
            <td class="text-right">{{number_format(($trfe1+$trfe2+$trfe3),2,',','.')}}</td>
        </tr>
        <tr>
            <td><b>Recurso Fundo Nacional</b></td>
            <td class="text-right">{{number_format($trfn1+$trfnI1,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfn2+$trfnI2,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfn3+$trfnI3,2,',','.')}}</td>
            <td class="text-right">{{number_format(($trfn1+$trfn2+$trfn3+$trfnI1+$trfnI2+$trfnI3),2,',','.')}}</td>
        </tr>
        <tr>
            <td><b>TOTAL</b></td>
            <td class="text-right">{{number_format($trfn1+$trfnI1+$tre1+$trfe1,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfn2+$trfnI2+$tre2+$trfe2,2,',','.')}}</td>
            <td class="text-right">{{number_format($trfn3+$trfnI3+$tre3+$trfe3,2,',','.')}}</td>
            <td class="text-right">{{number_format(($trfn1+$trfnI1+$tre1+$trfe1+$trfn2+$trfnI2+$tre2+$trfe2+$trfn3+$trfnI3+$tre3+$trfe3),2,',','.')}}</td>
        </tr>
        </tbody>
    </table>
@endif
<script>
    export default {
        data() {
            return{

            }
        },
        methods: {

        }
    }
</script>
<style>

</style>
