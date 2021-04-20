<template>
    <div class="container">
        <span v-for="de in detalhes">
            <div class="row">
                <div class="col-6">
                   <label>População: </label>
                </div>
                <div class="col-6 infor">
                    {{ de.populacao_estimada }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                   <label>PIB: </label>
                </div>
                <div class="col-6 infor">
                    {{ de.pib_percapita}}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label>IDH: </label>
                </div>
                <div class="col-6 infor">
                    {{ de.idh}}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label>População com plano de Saúde: </label>
                </div>
                <div class="col-6 infor">
                    {{ de.pop_plan_saude}} {{ de.pop_plan_saude_ano}}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label>População em extrema pobreza: </label>
                </div>
                <div class="col-6 infor">
                    {{ de.pop_extr_pobreza}} {{ de.pop_extr_pobreza_ano}}
                </div>
            </div>
       </span>
    </div>
</template>
<script>
export default {
    props: ['detalhes']
}
</script>

<style>
label{


}
.infor{
    color: blue;
    text-align: left;
}
</style>
