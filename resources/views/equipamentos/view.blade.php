@if($ho->equipamento->count()==0)
    <table class="table table-sm">
        <tr>
            <td>
                <a data-toggle="collapse" href="#equi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>EQUIPAMENTOS</b></label>
                </a>
            </td>
            <td><i>Informações não Cadastradas</i></td>
        </tr>
    </table>
@else
    <div class="table-responsive-sm">
    <table class="table table-sm">
        <tr style="background:lavenderblush">
            <td colspan="3">
                <a data-toggle="collapse" href="#equi{{$ho->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <label style="color: #1b1e21"><b>EQUIPAMENTOS</b></label>
                </a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-center">Existente</td>
            <td class="text-center">Funcionando</td>
        </tr>
        @foreach($ho->equipamento as $equip)
            <tr>
                <td>{{$equip->tipoequipamento->nome}}:</td>
                <td class="text-center">{{$equip->existente}}</td>
                <td class="text-center">{{$equip->funcional}}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endif
