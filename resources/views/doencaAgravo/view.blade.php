<?php
$data=date('Y')
?>
@if($m->doencasAgravos->count()>0)
    <div class="desktop">
        <div class="d-inline-flex">
            <table>
                <tr style="background: lavenderblush">
                    <td><label><b>DOENÇAS E AGRAVOS</b></label></td>
                    <td class="text-right"><label><b>{{$data-2}}</b></label></td>
                </tr>
                @foreach($doencas as $d)
                    <tr>
                        <td style="width: 200px">{{$d->nome}}</td>
                        @foreach($m->doencasAgravos as $md)
                            @if($md->ano->ano==$data-2 and $md->doenca_id==$d->id)
                                <td class="text-center">{{$md->casos}}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <table>
                <tr style="background: lavenderblush">
                    <td colspan="2" class="text-right"><label><b>{{$data-1}}</b></label></td>
                </tr>
                @foreach($doencas as $d)
                    <tr>
                        <td style="width: 100px; color: white">-</td>
                        @foreach($m->doencasAgravos as $md)
                            @if($md->ano->ano==$data-1 and $md->doenca_id==$d->id)
                                <td class="text-center">{{$md->casos}}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
            <table>
                <tr style="background: lavenderblush">
                    <td colspan="2" class="text-right"><label><b>{{$data}}</b></label></td>
                </tr>
                @foreach($doencas as $d)
                    <tr>
                        <td style="width: 100px; color: white">-</td>
                        @foreach($m->doencasAgravos as $md)
                            @if($md->ano->ano==$data and $md->doenca_id==$d->id)
                                <td class="text-center">{{$md->casos}}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="mobile">
        @include('doencaAgravo.mobile')
    </div>
@else
    <i>Não existe Informações cadastradas</i>
@endif
