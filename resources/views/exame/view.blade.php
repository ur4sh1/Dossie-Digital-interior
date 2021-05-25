@if(!$ho->exame)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#exa{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>EXAMES REALIZADOS</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="4">
                <a data-toggle="collapse" href="#exa{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>EXAMES REALIZADOS</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <td>Mamografia:</td>
            <td>{{$ho->exame->mamografia ?? 'Informações não cadastradas'}}</td>
            <td>Ultrassonografia</td>
            <td>{{$ho->exame->ultrassonografia ?? 'Informações não cadastradas'}}</td>
        </tr>
        <tr>
            <td>Raio X:</td>
            <td>{{$ho->exame->raio_x ?? 'Informações não cadastradas'}}</td>
            <td>Eletrocardiograma</td>
            <td>{{$ho->exame->eletrocardiograma ?? 'Informações não cadastradas'}}</td>
        </tr>
    </table>
@endif
