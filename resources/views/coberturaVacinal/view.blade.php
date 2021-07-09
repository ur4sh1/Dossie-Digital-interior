<?php
$data=date('Y')
?>
@if($m->coberturaVacinal->count()>0)
    <div class="desktop">
        <div class="d-inline-flex">
            <table>
                <tr style="background: lavenderblush">
                    <td><label><b>IMUNOBIOLÓGICA</b></label></td>
                    <td class="text-right"><label><b>{{$data-2}}</b></label></td>
                </tr>
                @foreach($imunobiologica as $i)
                    <tr>
                        <td style="width: 180px">{{$i->nome}}</td>
                        @foreach($m->coberturaVacinal as $mc)
                            @if($mc->ano->ano==$data-2 and $mc->imunobiologica_id==$i->id)
                                <td class="text-right">{{$mc->porcentagem}}%</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <table>
                <tr style="background: lavenderblush">
                    <td colspan="2" class="text-right"><label><b>{{$data-1}}</b></label></td>
                </tr>
                @foreach($imunobiologica as $i)
                    <tr>
                        <td style="width: 100px; color: white">-</td>
                        @foreach($m->coberturaVacinal as $mc)
                            @if($mc->ano->ano==$data-1 and $mc->imunobiologica_id==$i->id)
                                <td class="text-right">{{$mc->porcentagem}}%</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <table>
                <tr style="background: lavenderblush">
                    <td colspan="2" class="text-right"><label><b>{{$data}}</b></label></td>
                </tr>
                @foreach($imunobiologica as $i)
                    <tr>
                        <td style="width: 100px; color: white">-</td>
                        @foreach($m->coberturaVacinal as $mc)
                            @if($mc->ano->ano==$data and $mc->imunobiologica_id==$i->id)
                                <td class="text-right">{{$mc->porcentagem}}%</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="mobile">
        @include('coberturaVacinal.mobile')
    </div>
@else
    <i>Não existe informações cadastradas</i>
@endif

