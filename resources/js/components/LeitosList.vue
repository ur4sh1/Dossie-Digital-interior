<template>
    <div class="container">
            <table class="table table-sm" id="municipios">
                <tr>
                    <td><b>Clínico</b></td>
                    <td><b>Cirúrgicos</b></td>
                    <td><b>Obstétrico</b></td>
                    <td><b>Pediátrico</b></td>
                    <td><b>Outros</b></td>
                </tr>
                <tr v-for="l in leitos">
                    <td>{{l.leito_clinico}}</td>
                    <td>{{l.leito_cirurgico}}</td>
                    <td>{{l.leito_obstetrico}}</td>
                    <td>{{l.leito_pediatrico}}</td>
                    <td>{{l.leito_outro}}</td>
                </tr>
            </table>
        </div>
</template>
<script>
export default {
    props: ['leitos']
}
</script>

<style>

</style>
