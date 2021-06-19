<template>
    <div class="container">
        <input disabled hidden :value="municipio.id" id="municipio_id" name="municipio_id" required>
        <input disabled hidden :value="id_repasse" id="id" name="id" required>
        <div class="form-group">
            <div class="form-row">
                <div class="form-col-6">
                    <label for="item_recurso_nacional_id"><b>ITEM</b></label>
                    <select class="form-control" id="item_recurso_nacional_id" name="item_recurso_nacional_id" v-model="item_repasse" disabled required>
                        <option v-for="item in itemrecursofundonacional" :value="item.id">{{item.descricao}}</option>
                    </select>
                </div>
                <div class="form-col-2">
                    <label for="tipo_recurso_nacional_id"><b>TIPO</b></label>
                    <select class="form-control" id="tipo_recurso_nacional_id" name="tipo_recurso_nacional_id" v-model="tipo_repasse" disabled required>
                        <option v-for="trn in tiporecursonacional" :value="trn.id">{{trn.nome}}</option>
                    </select>
                </div>
                <div class="form-col-2">
                    <label for="valor"><b>VALOR</b></label>
                    <input class="form-control text-right" v-model="valor_repasse" id="valor" name="valor" required>
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
                <label style="color: #1b1e21"><b>ITEM</b> - <b>CUSTEIO</b></label>
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
        <div class="row" v-for="irfn in itemrecursofundonacional">
            <div class="col-sm-6">
                <div>{{ irfn.descricao }}</div>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===(anoatual-2) && rfn.tipo_recurso_nacional_id===1">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{new Intl.NumberFormat('pt-BR').format(rfn.valor)}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===(anoatual-1) && rfn.tipo_recurso_nacional_id===1">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{new Intl.NumberFormat('pt-BR').format(rfn.valor)}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===anoatual && rfn.tipo_recurso_nacional_id===1">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{new Intl.NumberFormat('pt-BR').format(rfn.valor)}}</a>
                    </div>
                </span>
            </div>
        </div>
        <div class="row table-responsive-sm" style="background: #a8f3c4">
            <div class="col-sm-6">
                <label style="color: #1b1e21"><b>ITEM</b> - <b>INVESTIMENTO</b></label>
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
        <div class="row" v-for="irfn in itemrecursofundonacional">
            <div class="col-sm-6">
                <div>{{ irfn.descricao }}</div>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===(anoatual-2) && rfn.tipo_recurso_nacional_id===2">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{rfn.valor}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===(anoatual-1) && rfn.tipo_recurso_nacional_id===2">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{rfn.valor}}</a>
                    </div>
                </span>
            </div>
            <div class="col-2">
                <span v-for="a in ano">
                    <div class="text-right" v-for="rfn in recursofundonacional" v-if="rfn.item_recurso_fundo_nacional_id===irfn.id && rfn.ano_id===a.id && a.ano===anoatual && rfn.tipo_recurso_nacional_id===2">
                        <a class="link" v-on:click="editaValor(rfn.id,rfn.item_recurso_fundo_nacional_id,rfn.tipo_recurso_nacional_id,rfn.valor,rfn.ano_id)">{{rfn.valor}}</a>
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
        itemrecursofundonacional: Array,
        recursofundonacional: Array,
        tiporecursonacional: Array,
        url: String
    },
    data() {
        return {
            anoatual : new Date().getFullYear(),
            valor_repasse: '',
            item_repasse: 0,
            tipo_repasse: 0,
            ano_repasse: 0,
            id_repasse: 0,
        }
    },
    methods: {
        editaValor(id,item,tipo,valor,ano){
            this.id_repasse=id;
            this.item_repasse=item;
            this.tipo_repasse=tipo;
            this.valor_repasse= new Intl.NumberFormat('pt-BR').format(valor).toFixed(2);
            this.ano_repasse=ano;

        },
        salvarDados(){
            axios.post(this.url,{
                municipio_id: this.municipio.id,
                id: this.id_repasse,
                item_recurso_fundo_nacional: this.item_repasse,
                tipo_recurso_nacional: this.tipo_repasse,
                valor: this.valor_repasse,
                ano_id: this.ano_repasse,
            })
                .then(response=>{
                   window.location.reload();
                })
            .catch(response=>{
                window.location.reload();
            })
        }
    }
}
</script>
