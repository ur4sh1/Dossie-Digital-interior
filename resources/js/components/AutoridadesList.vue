<template>
    <div class="container">
        <div v-for="aut in autoridades">
            <button class="btn btn-link text-left" type="button" data-toggle="collapse" :data-target="`#collapse${aut.id}`" aria-expanded="false" aria-controls="collapseExample">
                <span v-for="car in cargos" v-if="aut.cargo_id===car.id"><b>{{ car.nome}}:</b></span>
                {{aut.nome}}
                <span v-for="par in partidos" v-if="aut.partido_id===par.id">({{ par.sigla }})</span>
            </button>
            <div class="collapse" :id="`collapse${aut.id}`">
                <div class="card card-body">
                    <div class="row">{{ aut.cel}}<br>{{ aut.tel}}</div>
                    <div class="row">{{ aut.email }}</div>
                    <div class="row" v-for="par in partidos" v-if="aut.partido_id===par.id"><b>Partido: </b> {{ par.sigla }}</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['autoridades','cargos','partidos'],
}
</script>

<style>

</style>
