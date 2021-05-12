@if($ho->equipamento->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>EQUIPAMENTOS</b></label></td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <table class="table table-sm">
        <tr>
            <td><label><b>EQUIPAMENTOS</b></label></td>
        </tr>
        <tr>
            <td></td>
            <td class="text-center">Existente</td>
            <td class="text-center">Funcional</td>
        </tr>
        @foreach($ho->equipamento as $equip)
            <tr>
                <td>{{$equip->tipoequipamento->nome}}:</td>
                <td class="text-center">{{$equip->existente}}</td>
                <td class="text-center">{{$equip->funcional}}</td>
            </tr>
        @endforeach
    </table>
@endif
