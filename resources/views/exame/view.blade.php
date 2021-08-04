@if($ho->exame->count()>0)
    <?php
    $data=date('Y')
    ?>
    <table class="table table-sm table-responsive-lg">
        <tr style="background:lavenderblush">
            <td colspan="4">
                <a data-toggle="collapse" href="#exa{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>EXAMES REALIZADOS</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <td><b>Ano</b></td>
            <td class="text-center"><b>Mamografia</b></td>
            <td class="text-center"><b>Ultrassonografia</b></td>
            <td class="text-center"><b>Eletrocardiograma</b></td>
        </tr>
        @foreach($ho->exame as $hoe)
            @if($hoe->ano->ano>=$data-2)
                <tr>
                    <td>{{$hoe->ano->ano}}</td>
                    <td class="text-center">{{$hoe->mamografia}}</td>
                    <td class="text-center">{{$hoe->ultrassonografia}}</td>
                    <td class="text-center">{{$hoe->eletrocardiograma}}</td>
                </tr>
            @endif
        @endforeach
    </table>
@else
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
@endif

