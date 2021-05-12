@if($ho->servico->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>SERVIÇOS</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>SERVIÇOS</b></label></td>
        </tr>
        @foreach($ho->servico as $se)
            <tr>
                <td>{{$se->tiposervico->nome}}</td>
                <td>{{$se->ativo?"Sim":"Não"}}</td>
            </tr>
        @endforeach
    </table>
@endif
