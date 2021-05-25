@if(!$ho->salacirurgica)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#sal{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>SALAS CIRÚRGICAS</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="4">
                <a data-toggle="collapse" href="#sal{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>SALAS CIRÚRGICAS</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <td>Existente</td>
            <td>{{$ho->salacirurgica->sala_cirurgicas_existentes ?? 'Informações não cadastradas'}}</td>
            <td>Funcional</td>
            <td>{{$ho->salacirurgica->sala_cirurgicas_funcionais ?? 'Informações não cadastradas'}}</td>
        </tr>
    </table>
@endif
