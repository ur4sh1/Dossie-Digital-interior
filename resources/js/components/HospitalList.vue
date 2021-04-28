<template>
    <div class="container">
        <div class="row">

            <span v-if="hospital.length===0">
                <b><i>Não há Hospital cadastrado.</i></b>
            </span>
            <span v-if="hospital.length>0">
               <select v-model="info" class="custom-select mt-3 mb-3">
                   <option disabled value="">Selecione</option>
                   <option v-for="hos in hospital" :value="hos.id" >{{ hos.nome }}</option>
               </select>
            </span>

        </div>
        <span v-if="info > 0">
            <div class="row">
                <div class="col-6">
                            <internacaos-list :internacaos=" internacaos.filter(int => {
                            return info===int.hospital_id
                            })"></internacaos-list>

                            <equipamentos-list :tipo_equipamentos="tipo_equipamentos" :equipamentos=" equipamentos.filter(eq => {
                            return info===eq.hospital_id
                            })"></equipamentos-list>


                </div>
                <div class="col-6">
                            <leitos-list :leitos=" leitos.filter(le => {
                            return info===le.hospital_id
                            })"></leitos-list>

                            <folha-list :folhas="folhas.filter(fo =>{
                                return info===fo.hospital_id
                            })"></folha-list>
                </div>
            </div>
        </span>
    </div>
</template>
<script>
import LeitosList from "./LeitosList";
import InternacaosList from "./InternacaosList";
import EquipamentosList from "./EquipamentosList";
import FolhaList from "./FolhaList";
export default {
    components: {FolhaList, EquipamentosList, InternacaosList, LeitosList},
    props: ['hospital','leitos','internacaos','equipamentos','tipo_equipamentos','folhas','profissionals'],
    data(){
        return {
            info:''
        }
    },
    methods:{
    }
}
</script>

<style>

</style>
