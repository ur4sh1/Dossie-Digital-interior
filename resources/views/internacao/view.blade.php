@if(!$ho->internacao)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>INTERNAÇÃO</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="4">
                <a data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>INTERNAÇÃO</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <td>Média / dia:</td>
            <td>{{$ho->internacao->media_dia??''}}</td>
            <td>Média / mês:</td>
            <td>{{$ho->internacao->media_mes??''}}</td>
        </tr>
    </table>
@endif
