@if($ho->folha->count()==0)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#fo{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>FOLHA SES-AM</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table-responsive-sm">
        <tr style="background:lavenderblush">
            <td colspan="4">
                <a data-toggle="collapse" href="#fo{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>FOLHA SES-AM</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="col" class="text-left">Profissionais de Saúde</th>
            <th scope="col" class="text-right">Salário Unitário R$</th>
            <th scope="col" class="text-right">Qtd</th>
            <th scope="col" class="text-right">Valor R$</th>
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
            <td colspan="2"><b>Total</b></td>
            <td class="text-right">{{$ho->folha->sum('SUSAM')}}</td>
            <td class="text-right">{{number_format($ho->folha->sum('total'),2,',','.')}}</td>
        </tr>
    </table>
@endif
