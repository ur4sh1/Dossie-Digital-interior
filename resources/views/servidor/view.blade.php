@if($ho->folha->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>SERVIDOR</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>SERVIDOR</b></label></td>
        </tr>
        <tr>
            <td class="text-left">Profissional</td>
            <td class="text-center">SESAM</td>
            <td class="text-center">Prefeitura</td>
            <td class="text-center">Cedido</td>
            <td class="text-center">Aposentado</td>
            <td class="text-center">Ativo</td>
        </tr>
        @foreach($ho->folha as $hof)
            <tr>
                <td class="text-left">{{$hof->profissional->nome}}</td>
                <td class="text-center">{{$hof->SUSAM}}</td>
                <td class="text-center">{{$hof->prefeitura}}</td>
                <td class="text-center">{{$hof->cedidos}}</td>
                <td class="text-center">{{$hof->aponsetadoria}}</td>
                <td class="text-center">{{$hof->servidores_ativos}}</td>
            </tr>
        @endforeach
        <tr>
            <td>Total</td>
            <td class="text-center">{{$ho->folha->sum('SUSAM')}}</td>
            <td class="text-center">{{$ho->folha->sum('prefeitura')}}</td>
            <td class="text-center">{{$ho->folha->sum('cedidos')}}</td>
            <td class="text-center">{{$ho->folha->sum('aponsetadoria')}}</td>
            <td class="text-center">{{$ho->folha->sum('servidores_ativos')}}</td>
        </tr>
    </table>
@endif
