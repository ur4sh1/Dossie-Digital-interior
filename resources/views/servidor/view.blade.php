@if($ho->folha->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>SERVIDOR</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <div class="table-responsive-sm">
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td scope="col" colspan="6"><label><b>RH</b></label></td>
        </tr>
        <tr>
            <th scope="col" class="text-left">Profissional</th>
            <th scope="col" class="text-center">SES-AM</th>
            <th scope="col" class="text-center">Prefeitura</th>
            <th scope="col" class="text-center">Cedido</th>
            <th scope="col" class="text-center">Aposentado</th>
            <th scope="col" class="text-center">Ativo</th>
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
            <td><b>Total</b></td>
            <td class="text-center">{{$ho->folha->sum('SUSAM')}}</td>
            <td class="text-center">{{$ho->folha->sum('prefeitura')}}</td>
            <td class="text-center">{{$ho->folha->sum('cedidos')}}</td>
            <td class="text-center">{{$ho->folha->sum('aponsetadoria')}}</td>
            <td class="text-center">{{$ho->folha->sum('servidores_ativos')}}</td>
        </tr>
    </table>
    </div>
@endif
