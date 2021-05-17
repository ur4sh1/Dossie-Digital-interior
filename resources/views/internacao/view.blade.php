@if(!$ho->internacao)
    <table class="table table-sm">
        <tr>
            <td><label><b>INTERNAÇÃO</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="4"><label><b>INTERNAÇÃO</b></label></td>
        </tr>
        <tr>
            <td>Média / dia:</td>
            <td>{{$ho->internacao->media_dia??''}}</td>
            <td>Média / mês:</td>
            <td>{{$ho->internacao->media_mes??''}}</td>
        </tr>
    </table>
@endif
