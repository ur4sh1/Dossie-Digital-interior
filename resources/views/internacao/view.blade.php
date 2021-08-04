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
    <table class="table table-sm table-responsive-lg">
        <tr style="background:lavenderblush">
            <th colspan="6">
                <a data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>INTERNAÇÃO</b></label>
                </a>
            </th>
        </tr>
        @foreach($ho->internacao as $hoi)
        <tr>
            <td>Ano: {{$hoi->ano_id}}</td>
            <td>Média / dia: {{$hoi->media_dia??''}}</td>
            <td>Média / mês: {{$hoi->media_mes??''}}</td>
            <td>Fonte: {{$hoi->fonte??''}}</td>
        </tr>
        @endforeach
    </table>
@endif
