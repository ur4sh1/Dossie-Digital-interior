@if($ho->folha->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>FOLHA SESAM</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>FOLHA SESAM</b></label></td>
        </tr>
        <tr>
            <td class="text-left">Profissionais de Saúde</td>
            <td class="text-right">Salário Unitário R$</td>
            <td class="text-right">Qtd</td>
            <td class="text-right">Valor R$</td>
        </tr>
        @foreach($ho->folha as $hof)
            <tr>
                <td class="text-left">{{$hof->profissional->nome}}</td>
                <td class="text-right">{{$hof->salario()}}</td>
                <td class="text-right">{{$hof->SUSAM}}</td>
                <td class="text-right">{{$hof->msalario()}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2" class="text-center">Total</td>
            <td class="text-right">{{$ho->folha->sum('SUSAM')}}</td>
            <td class="text-right">{{number_format($ho->folha->sum('total'),2,',','.')}}</td>
        </tr>
    </table>
@endif
