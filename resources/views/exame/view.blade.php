@if(!$ho->exame)
    <table class="table table-sm">
        <tr>
            <td><label><b>EXAMES REALIZADOS</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>EXAMES REALIZADOS</b></label></td>
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
