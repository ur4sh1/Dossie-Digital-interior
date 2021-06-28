<template>
    <div class="container">
        <input hidden disabled :value="municipio.id" id="municipio_id" name="municipio_id" required>
        <input hidden disabled :value="id_repasse" id="id" name="id" required>
        <div class="form-group">
            <div class="form-row">
                <div class="form-col-8">
                    <label for="item_recurso_estadual_id"><b>ITEM</b></label>
                    <select class="form-control" id="item_recurso_estadual_id" name="item_recurso_estadual_id" v-model="item_repasse" disabled required>
                        <option v-for="item in itemrecursoestadual" :value="item.id">{{item.descricao}}</option>
                    </select>
                </div>
                <div class="form-col-2">
                    <label for="valor"><b>VALOR</b></label>
                    <input type="text" class="form-control text-right" v-model.number="valor_repasse" id="valor" name="valor" required>
                </div>
                <div class="form-col-2">
                    <label for="ano_id"><b>ANO</b></label>
                    <select class="form-control" id="ano_id" name="ano_id" v-model="ano_repasse" disabled required>
                        <option v-for="a in ano" :value="a.id">{{a.ano}}</option>
                    </select>
                </div>
            </div>
            <div class="form-row text-right"><!--buttonsAções-->
                <div class="col-sm-12 mt-3">
                    <button class="btn btn-sm btn-primary" v-on:click="salvarDados()"><span class="fa fa-save"></span></button>
                    <a class="btn btn-sm btn-danger" title="CANCELAR" href="javascript:history.back()"><span class="fa fa-window-close"></span></a>
                </div>
            </div><!--buttonsAções-->
        </div>
        <div class="row text-center">
            <div class="col text-center">
                <i>Selecione o valor que deseja alterar</i>
            </div>
        </div>
        <div class="row table-responsive-sm" style="background: #a8f3c4">
            <div class="col-sm-6">
                <label style="color: #1b1e21"><b>ITEM</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{anoatual-2}}</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{anoatual-1}}</b></label>
            </div>
            <div class="col-sm-2 text-right">
                <label><b>{{anoatual}}</b></label>
            </div>
        </div>
        <div class="row" v-for="ire in itemrecursoestadual">
            <div class="col-sm-6">
                <div>{{ ire.descricao }}</div>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="re in recursoestadual" v-if="re.item_recurso_estadual_id===ire.id && re.ano_id===a.id && a.ano===anoatual-2">
                        <a class="link" v-on:click="editaValor(re.id,re.valor,re.item_recurso_estadual_id,re.ano_id)">{{formata(re.valor)}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="re in recursoestadual" v-if="re.item_recurso_estadual_id===ire.id && re.ano_id===a.id && a.ano===anoatual-1">
                        <a class="link" v-on:click="editaValor(re.id,re.valor,re.item_recurso_estadual_id,re.ano_id)">{{formata(re.valor)}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="re in recursoestadual" v-if="re.item_recurso_estadual_id===ire.id && re.ano_id===a.id && a.ano===anoatual">
                        <a class="link" v-on:click="editaValor(re.id,re.valor, re.item_recurso_estadual_id,re.ano_id)">{{formata(re.valor)}}</a>
                    </div>
                </span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        municipio: Object,
        ano: Array,
        itemrecursoestadual: Array,
        recursoestadual: Array,
        url: String,
    },
    data() {
        return {
            anoatual : new Date().getFullYear(),
            valor_repasse: '',
            item_repasse: 0,
            ano_repasse: 0,
            id_repasse: 0,
        }
    },
    methods: {
        formata(valor){
            let formatter = new Intl.NumberFormat(['pt-BR'],{
                style: 'currency',
                currency: 'BRL'
            })
            return formatter.format(valor).replace('R$',"");
        },
        formatav2(valor){
            return valor.toLocaleString('pt-BR', {minimumFractionDigits: 2});
        },
        formatav3(valor){
            return new Intl.NumberFormat('pt-BR').format(valor.toFixed(2));
        },
        editaValor(id,valor,item,ano){
            this.valor_repasse=valor;
            this.item_repasse=item;
            this.ano_repasse=ano;
            this.id_repasse=id;
        },
        salvarDados(){
            axios.post(this.url,{
                municipio_id: this.municipio.id,
                id: this.id_repasse,
                item_recurso_estadual: this.item_repasse,
                valor:  this.valor_repasse,
                ano_id: this.ano_repasse,
            })
                .then(response=>{
                   window.location.reload();
                })
            .catch(response=>{
                window.location.reload();
            })
        }
    },
    computed: {
    }
}
</script>
