@if($ho->rh->count()==0)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#rh{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>CATEGORIAS</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-responsive-sm table-sm">
        <tr style="background:lavenderblush">
            <td colspan="5">
                <a data-toggle="collapse" href="#rh{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>CATEGORIAS</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="col">Total por Categoria</th>
            <th scope="col">SES-AM Estatutário</th>
            <th scope="col">SES-AM Contrato</th>
            <th scope="col">Prefeitura</th>
            <th scope="col" class="text-right">Cobertura</th>
        </tr>
        @foreach($ho->rh as $r)
            <tr>
                <td>{{$r->rhcategoria->nome}}:</td>
                <td>{{$r->susam_estatutario}}</td>
                <td>{{$r->susam_contrato}}</td>
                <td>{{$r->prefeitura}}</td>
                <td class="text-right">{{ intval($r->susam_estatutario+$r->susam_contrato+$r->prefeitura) == 0?0:
            number_format($r->somaCat()*100/ intval($r->susam_estatutario+$r->susam_contrato+$r->prefeitura),0,'.',',')
            }}%</td>
            </tr>
        @endforeach
        <tr>
            <td><b>SubTotal</b></td>
            <td>{{$ho->rh->sum('susam_estatutario')}}</td>
            <td>{{$ho->rh->sum('susam_contrato')}}</td>
            <td>{{$ho->rh->sum('prefeitura')}}</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2"><b>Total</b></td>
            <td colspan="2">{{$ho->rh->sum('susam_estatutario')+$ho->rh->sum('susam_contrato')+$ho->rh->sum('prefeitura')}}</td>
            <td></td>
        </tr>
    </table>
@endif
