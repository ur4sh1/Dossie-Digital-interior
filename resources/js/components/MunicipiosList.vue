<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <div class="text-info">
                    <h1>Municípios</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 busca d-flex">
                <the-mask class="form-control mr-sm-2" type="text" :mask="['SSSSSSSSSSSSSSSSS']" id="seach" v-model="pesquisa" placeholder="Filtro" aria-label="Search"></the-mask>
            </div>
        </div>
        <div class="row" v-for="m in filterdados">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-toggle="modal" :data-target="`#m${m.id}`">
                    {{ m.nome }}
                </button>
                <!-- Modal -->
                <div class="modal fade" :id="`m${m.id}`" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><img :src="'/img/images/bandeira'+`${m.id}`+'.png'" class="img-fluid mb-3" width="50px"> {{ m.nome }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!--modal tablist menu-->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" :href="`#infor${m.id}`" role="tab" aria-controls="home" aria-selected="true">Gerais</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" :href="`#auto${m.id}`" role="tab" aria-controls="profile" aria-selected="false">Autoridades</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" :href="`#hosp${m.id}`" role="tab" aria-controls="contact" aria-selected="false">Hospital</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <!--tab hinformações gerais-->
                                    <div class="tab-pane fade show active" :id="`infor${m.id}`" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img :src="'/img/images/mapa'+`${m.id}`+'.jpg'" class="img-fluid mt-3" width="400px">
                                            </div>
                                            <div class="col-sm-6">
                                                <dados-list :dados=" dados.filter(da => {
                                                    return da.id===m.id
                                                })"></dados-list>
                                                <detalhes-list :detalhes=" detalhes.filter(de =>{
                                                    return de.id===m.id
                                                })"></detalhes-list>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab autoridades-->
                                    <div class="tab-pane fade" :id="`auto${m.id}`" role="tabpanel" aria-labelledby="profile-tab">
                                        <autoridades-list :partidos=" partidos " :cargos=" cargos" :autoridades=" autoridades.filter(a => {
                                        return a.municipio_id===m.id
                                        })"></autoridades-list>
                                    </div>
                                    <!--tab hospital-->
                                    <div class="tab-pane fade" :id="`hosp${m.id}`" role="tabpanel" aria-labelledby="contact-tab">
                                         <div class="row">
                                                <div class="col-sm-12">
                                                    <hospital-list :profissionals="profissionals" :folhas="folhas" :internacaos=" internacaos "
                                                                   :leitos=" leitos " :tipo_equipamentos="tipo_equipamentos" :equipamentos="equipamentos"
                                                                   :veiculos="veiculos" :hospital=" hospitals.filter(h => {
                                                    return h.municipio_id===m.id
                                                    })"></hospital-list>
                                               </div>
                                         </div>
                                    </div>
                                </div>
                                <!--fim modal tablist-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import LeitosList from "./LeitosList";
import AutoridadesList from "./AutoridadesList";
import HospitalList from "./HospitalList";
import DadosList from "./DadosList";
import DetalhesList from "./DetalhesList";
import EquipamentosList from "./EquipamentosList";

export default {
    components: {DadosList, HospitalList, AutoridadesList, LeitosList, DetalhesList, EquipamentosList},
    props: ['municipios','hospitals','regional','dados','detalhes','leitos',
        'autoridades','cargos','partidos','internacaos','equipamentos','tipo_equipamentos',
    'folhas','profissionals','veiculos'],
    data(){
        return{
            pesquisa:''
        }
    },
    watch:{
    },
    created() {

    },
    methods: {
    },
    computed: {
        filterdados(){
            if(this.pesquisa !== ""){
                return this.municipios.filter(res => {
                    if(res.nome.toLowerCase().match(this.pesquisa.toLowerCase()))
                        return true;
                });
            } else return this.municipios
        }
    }
}
</script>

<style>
.busca{
    justify-content: flex-end;
}
#seach{
    width: 300px;
    background: #ccdfe7;
    justify-content: center;
}
</style>


