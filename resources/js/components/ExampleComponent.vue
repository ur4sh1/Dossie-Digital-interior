<template>
    <div class="container">
        <h3>LISTA</h3>
        <table id="municipios" class="table-sm">
            <tr>
                <td>NOME</td>
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
</script>
