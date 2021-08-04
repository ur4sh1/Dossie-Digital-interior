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
    <?php
    $data=date('Y')
    ?>
    <table class="table table-sm table-responsive-lg">
        <tr style="background:lavenderblush">
            <th colspan="6">
                <a data-toggle="collapse" href="#int{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>INTERNAÇÃO</b></label>
                </a>
            </th>
        </tr>
        <tr>
            <td><b>Ano</b></td>
            <td><b>Média / Dia</b></td>
            <td><b>Média / Mês</b></td>
            <td><b>Fonte</b></td>
        </tr>
        @foreach($ho->internacao as $hoi)
            @if($hoi->ano->ano>=$data-2)
                <tr>
                    <td>{{$hoi->ano['ano']}}</td>
                    <td>{{$hoi->media_dia??''}}</td>
                    <td>{{$hoi->media_mes??''}}</td>
                    <td>{{$hoi->fonte??''}}</td>
                </tr>
            @endif
        @endforeach
    </table>
@endif
