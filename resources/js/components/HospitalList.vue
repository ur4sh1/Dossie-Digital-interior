<template>
    <div class="container">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li v-for="hos in hospital" class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" :href="`#home${hos.id}`" role="tab" aria-controls="home" aria-selected="true">{{hos.nome}}</a>
            </li>
        </ul>
        <div v-for="hos in hospital" class="tab-content" id="myTabContent">
            <div  class="tab-pane fade show active" :id="`home${hos.id}`" role="tabpanel" aria-labelledby="home-tab">
                <internacaos-list :internacaos=" internacaos.filter(int => {
                return hos.id===int.hospital_id
            })"></internacaos-list>
                <label>Leitos</label><br>
                <leitos-list :leitos=" leitos.filter(le => {
                return hos.id===le.hospital_id
            })"></leitos-list>
            </div>
        </div>


    </div>
</template>
<script>
import LeitosList from "./LeitosList";
import InternacaosList from "./InternacaosList";
export default {
    components: {InternacaosList, LeitosList},
    props: ['hospital','leitos','internacaos'],
}
</script>

<style>

</style>
