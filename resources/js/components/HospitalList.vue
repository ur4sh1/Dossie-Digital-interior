<template>
    <div class="container">
        <div class="row">
<!--            <div v-for="hos in hospital">
                <button @click="info = hos.id" class="btn btn-light" type="button">{{ hos.nome }}</button>
            </div>-->

            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selecione</button>
                    <div class="dropdown-menu">
                        <a v-for="hos in hospital"  @click="selectHospital(hos.id)" class="dropdown-item" href="#">{{ hos.nome }}</a>
                    </div>
                    <p>{{ nome }}</p>
                </div>
            </div>

        </div>
        <div class="row">
               <span v-if="info > 0">

                    <internacaos-list :internacaos=" internacaos.filter(int => {
                    return info===int.hospital_id
                    })"></internacaos-list>


                    <leitos-list :leitos=" leitos.filter(le => {
                    return info===le.hospital_id
                    })"></leitos-list>

            </span>
        </div>
    </div>
</template>
<script>
import LeitosList from "./LeitosList";
import InternacaosList from "./InternacaosList";
export default {
    components: {InternacaosList, LeitosList},
    props: ['hospital','leitos','internacaos'],
    data(){
        return {
            info:'',
            nome:''
        }

    },
    methods:{
        selectHospital(id){
            return this.info = id
        }
    },


}
</script>

<style>

</style>
