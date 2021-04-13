<template>
    <div class="container">
        <h3>Leitos</h3>
        <table class="table-sm" id="municipios">
            <tr>
                <td><b>ID do Hospital</b></td>
                <td><b>Clinico</b></td>
            </tr>
            <tr v-for="l in leitos">
                <td>{{l.hospital_id}}</td>
                <td>{{l.leito_clinico}}</td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    props: ['leitos'],
}
</script>

<style>

</style>
