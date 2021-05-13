@if($ho->veiculo->count()==0)
    <table class="table table-sm">
        <tr>
            <td><label><b>VEÍCULOS</b></label></td>
            <td><label><i>Informações não Cadastradas</i></label></td>
        </tr>
    </table>
@else
    <div class="table-responsive-sm">
    <table class="table table-sm">
        <tr>
            <td><label><b>VEÍCULOS</b></label></td>
        </tr>
        <tr>
            <td class="text-center" colspan="2">Administrativo</td>
            <td class="text-center" colspan="2">Ambulância Terrestre</td>
            <td class="text-center" colspan="2">Ambulância Flúvia</td>
        </tr>
        <tr>
            <td class="text-center" >Existente</td>
            <td class="text-center" >Funcional</td>
            <td class="text-center" >Existente</td>
            <td class="text-center" >Funcional</td>
            <td class="text-center" >Existente</td>
            <td class="text-center" >Funcional</td>
        </tr>
        @foreach($ho->veiculo as $hv)
            <tr>
                <td class="text-center">{{ $hv->administrativo_existente }}</td>
                <td class="text-center">{{ $hv->administrativo_funcional }}</td>
                <td class="text-center">{{ $hv->ambulancia_terrestre_existente }}</td>
                <td class="text-center">{{ $hv->ambulancia_terrestre_funcional }}</td>
                <td class="text-center">{{ $hv->ambulancia_fluvial_existente }}</td>
                <td class="text-center">{{ $hv->ambulancia_fluvial_funcional }}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endif
