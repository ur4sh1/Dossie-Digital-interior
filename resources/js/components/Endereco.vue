<template>
    <div class="row">
        <div class="col-sm-3 mt-2">
            <label><h5><b>CEP</b></h5></label>
            <div class="input-group">
                <input type="text" id="cep" name="cep" class="form-control cep mb-3" v-model="cep">
                <div class="input-group-append">
                    <button class="btn btn-primary mb-3" type="button" id="button-addon2" @click="localizaCep()">
                        Localizar
                    </button>
                </div>
            </div>
        </div>

       <div class="col-sm-3 mt-2">
            <label for="municipio_id"><h5><b>Município</b></h5></label>
            <select class="form-control" id="municipio_id" name="municipio_id" required>
                <option>Selecione</option>
                <option v-for="(m,i) in municipios" :value="i+1" :selected="selecionado(m.nome, cidade)" >{{ m.nome }}</option>
            </select>
        </div>

        <div class="col-sm-5 mt-2">
            <label><h5><b>Logradouro</b></h5></label>
            <input v-model="endereco" id="rua" name="rua" class="form-control mb-3 text-uppercase"/>
        </div>

        <div class="col-sm-2 mt-2">
            <label><h5><b>Bairro</b></h5></label>
            <input type="text" v-model="bairro" class="form-control" name="bairro" id="bairro">
        </div>

    </div>
</template>

<script>
export default {
    props:[
        "cep",
        "bairro",
        "endereco",
        "cidade",
        "municipios"
    ],
    data(){
        return{
            cep:"",
            endereco:"",
            cidade:"",
            bairro:"",
            selected:this.municipios
        }
    },
    methods:{
        localizaCep(){
            // this.loadingCep=true
            this.$api.get('https://viacep.com.br/ws/'+this.cep+'/json')
                .then(res=>{
                    if(res.data.erro){
                        window.alert('Nenhuma informação encontrada, prossiga com o preenchimento manual')
                    }
                    this.endereco = res.data.logradouro
                    this.bairro = res.data.bairro
                    this.cidade = res.data.localidade
                    this.$forceUpdate();
                    console.log(res.data)
                })
        },
        selecionado(n1,n2){
            if(n1===n2){
                return "true"
            }
        }
    }
}
</script>
