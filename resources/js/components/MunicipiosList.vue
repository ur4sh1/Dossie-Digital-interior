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
                <input class="form-control mr-sm-2" id="seach" type="search" v-model="pesquisa" placeholder="Filtro" aria-label="Search">
            </div>
        </div>
        <div class="row">
            <div v-for="m in filterdados">
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

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" :href="`#infor${m.id}`" role="tab" aria-controls="home" aria-selected="true">Informações Gerais</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" :href="`#auto${m.id}`" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" :id="`infor${m.id}`" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Localização:</label>
                                                <img :src="'/img/images/mapa'+`${m.id}`+'.jpg'" class="img-fluid mb-3" width="300px">
                                            </div>
                                            <div class="col-6">
                                                <div v-for="d in dados" v-if="m.dados_id===d.id">
                                                    <label><b>Área Territorial:</b></label> {{ d.area_territorial }}<br>
                                                    <label><b>Densidade Demográfica:</b></label> {{d.densidade_demografica}}
                                                </div>
                                                <div v-for="det in detalhes" v-if="m.detalhes_id===det.id">
                                                    <label><b>População:</b></label> {{ det.populacao_estimada }}<br>
                                                    <label><b>PIB:</b></label> {{ det.pib_percapita }}
                                                </div>
                                                <div v-for="r in regional" v-if="m.regional_id===r.id">
                                                    <label><b>Regional:</b></label> {{ r.nome }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" :id="`auto${m.id}`" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>

                                <div v-for="h in hospitals" v-if="m.id===h.municipio_id">
                                    <label><b>Hospital:</b></label> {{ h.nome }}
                                </div>

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
export default {
    components: {LeitosList},
    props: ['municipios','hospitals','regional','dados','detalhes'],
    data(){
        return{
            pesquisa:''
        }
    },
    watch:{
    },
    methods: {
    },
    computed: {
        filterdados(){
            if(this.pesquisa != ""){
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


