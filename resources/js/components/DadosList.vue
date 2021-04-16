<template>
    <div class="container">
            <table class="table table-sm">
                <tr>
                    <td>Área Territorial</td>
                    <td>Densidade Demográfica</td>
                    <td>Linha Reta</td>
                    <td>Linha Fluvial</td>
                    <td>Latitude</td>
                    <td>Longitude</td>
                </tr>
                <tr v-for="d in dados">
                    <td>{{ d.area_territorial }}</td>
                    <td>{{ d.densidade_demografica }}</td>
                    <td>{{ d.linha_reta }}</td>
                    <td>{{ d.linha_fluvial }}</td>
                    <td>{{ d.latitude_decimal }}</td>
                    <td>{{ d.longitude_decimal }}</td>
                </tr>
            </table>
        </div>
</template>
<script>
export default {
    props: ['dados']
}
</script>

<style>

</style>
