@if($ho->rh->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>RH</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>RH</b></label></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>SESAM Estatutário</td>
            <td>SESAM Contrato</td>
            <td>Prefeitura</td>
        </tr>
        @foreach($ho->rh as $r)
            <tr>
                <td>{{$r->rhcategoria->nome}}:</td>
                <td>{{$r->susam_estatutario}}</td>
                <td>{{$r->susam_contrato}}</td>
                <td>{{$r->prefeitura}}</td>
            </tr>
        @endforeach
        <tr>
            <td>SubTotal</td>
            <td>{{$ho->rh->sum('susam_estatutario')}}</td>
            <td>{{$ho->rh->sum('susam_contrato')}}</td>
            <td>{{$ho->rh->sum('prefeitura')}}</td>
        </tr>
        <tr>
            <td colspan="2">Total</td>
            <td colspan="2">{{$ho->rh->sum('susam_estatutario')+$ho->rh->sum('susam_contrato')+$ho->rh->sum('prefeitura')}}</td>
        </tr>
    </table>
@endif
