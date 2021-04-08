<template>
    <div class="container">
        <h3>MUNICÍPIOS</h3>
        <table class="table-sm" id="municipios">
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
</script>
