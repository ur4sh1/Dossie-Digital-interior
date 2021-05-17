@if(!$ho->salacirurgica)
    <table class="table table-sm">
        <tr>
            <td><label><b>SALAS CIRÚRGICAS</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="4"><label><b>SALAS CIRÚRGICAS</b></label></td>
        </tr>
        <tr>
            <td>Existente</td>
            <td>{{$ho->salacirurgica->sala_cirurgicas_existentes ?? 'Informações não cadastradas'}}</td>
            <td>Funcional</td>
            <td>{{$ho->salacirurgica->sala_cirurgicas_funcionais ?? 'Informações não cadastradas'}}</td>
        </tr>
    </table>
@endif
