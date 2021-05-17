@if($m->programas->count()>0)
    <div class="table-responsive-sm">
        <table class="table table-sm">
            <thead>
            <tr>
                <td><b>DESCRIÇÃO</b></td>
                <td><b>SIGLA</b></td>
                <td class="text-center"><b>TETO</b></td>
                <td class="text-center"><b>CRED</b></td>
                <td class="text-center"><b>IMPLANTADO</b></td>
                <td class="text-center"><b>REPASSE R$</b></td>
            </tr>
            </thead>
            <tbody>
            @foreach($m->programas as $mp)
                <tr>
                    <td>{{$mp->descricao}}</td>
                    <td>{{$mp->sigla}}</td>
                    <td class="text-right">{{$mp->teto}}</td>
                    <td class="text-right">{{$mp->cred}}</td>
                    <td class="text-center">{{$mp->implant}}</td>
                    <td class="text-right">{{$mp->repasseformat()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@else
    <i>Não existe informações cadastradas</i>
@endif
