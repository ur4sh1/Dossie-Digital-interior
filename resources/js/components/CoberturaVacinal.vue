<template>
<div class="container">
    <label><b>IMUNOBIOLÓGICA</b></label><br>
    <div class="row" v-for="i in imunobiologicas">
        <div class="col">
            {{ i.nome }}
        </div>
    </div>
    <label><b>2018</b></label><br>
    <div class="row" v-for="c in coberturaVacinal">
        <div class="col">
            {{ c.porcentagem }}
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['imunobiologicas','coberturaVacinal']
}
</script>

<style scoped>

</style>
