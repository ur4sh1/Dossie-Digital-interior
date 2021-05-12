@if(!$ho->leito)
    <table class="table table-sm">
        <tr>
            <td><label><b>LEITOS</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td>
                <label><b>LEITOS</b></label>
            </td>
        </tr>
        <tr class="table">
            <td>Clínicos:</td>
            <td>{{$ho->leito->leito_clinico ?? 'Informações não cadastradas'}}</td>
            <td>Cirúrgicos:</td>
            <td>{{$ho->leito->leito_cirurgico ?? 'Informações não cadastradas'}}</td>
        </tr>
        <tr>
            <td>Obstétrico:</td>
            <td>{{$ho->leito->leito_obstetrico ?? 'Informações não cadastradas'}}</td>
            <td>Pediádrico:</td>
            <td>{{$ho->leito->leito_pediatrico ?? 'Informações não cadastradas'}}</td>
        </tr>
        <tr>
            <td>Outros:</td>
            <td>{{$ho->leito->leito_outro ?? 'Informações não cadastradas'}}</td>
            <td>Suporte Ventilátorio</td>
            <td>{{$ho->leito->suporte_ventilatorio ?? 'Informações não cadastradas'}}</td>
        </tr>
        <tr>
            <td>UCI Adulto:</td>
            <td>{{$ho->leito->uci_adulto ?? 'Informações não cadastradas'}}</td>
            <td>UCI Pediátrico</td>
            <td>{{$ho->leito->uci_pediatrico ?? 'Informações não cadastradas'}}</td>
        </tr>
        <tr>
            <td>Total: </td>
            <td></td>
            <td></td>
            <td>{{$ho->leito->total ?? 'Informações não cadastradas'}}</td>
        </tr>
    </table>
@endif
