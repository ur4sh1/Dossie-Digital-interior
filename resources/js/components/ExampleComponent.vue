<template>
    <div class="container">
        <h3>MUNICÍPIOS</h3>
        <table id="municipios" class="table-sm">
            <tr>
                <td><b>NOME</b></td>
            </tr>
            <tr v-for="m in municipios">
                <td>{{m.nome}}</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    props: ['municipios'],
}

$(document).ready(function () {
    $('#municipios').DataTable({
        "searching": true,
        "aaSorting": [[1, "asc"]],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"

        }
    })});
</script>
