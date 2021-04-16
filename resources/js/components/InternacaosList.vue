<template>
    <div class="container">
        <table class="table table-sm">
            <tr>
                <td><b>Média por dia</b></td>
                <td><b>Média por mês</b></td>
            </tr>
            <tr v-for="int in internacaos">
                <td>{{int.media_dia}}</td>
                <td>{{int.media_mes}}</td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    props: ['internacaos']
}
</script>

<style>

</style>
