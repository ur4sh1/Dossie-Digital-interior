@if($ho->servico->count()==0)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#ser{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>SERVIÇOS</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="2">
                <a data-toggle="collapse" href="#ser{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>SERVIÇOS</b></label>
                </a>
            </td>
        </tr>
        @foreach($ho->servico as $se)
            <tr>
                <td>{{$se->tiposervico->nome}}</td>
                <td>{{$se->ativo?"Sim":"Não"}}</td>
            </tr>
        @endforeach
    </table>
@endif
