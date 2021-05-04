<template>
    <div class="container">
            <span v-if="folhas.length">
              <button  class="btn btn-link" @click="show = !show">
                <label><b>Folha</b></label>
              </button>
              <transition name="slide-fade">
                   <table class="table table-sm tabela mt-2" v-if="show">
                       <tr>
                           <td><b>Profissionais</b></td>
                           <td><b>Salário<br> Unitário R$</b></td>
                           <td><b>Qtd</b></td>
                           <td class="text-left"><b>Valor R$</b></td>
                       </tr>
                       <tr v-for="f in folhas">
                           <td v-for="pro in profissionals" v-if="pro.id === f.profissional_id">{{ pro.nome }}</td>
                           <td class="text-right">{{ new Intl.NumberFormat('pt-BR').format(f.salario_inicial)}}</td>
                           <td class="text-right inf badge badge-secondary">{{ f.SUSAM }}</td>
                           <td class="text-right">{{ new Intl.NumberFormat('pt-BR').format(multiplicaSalario(f.salario_inicial, f.SUSAM).toFixed(2)) }}</td>
                       </tr>
                   </table>
              </transition>
            </span>
    </div>
</template>
<script>
export default {
    props: ['folhas','profissionals'],
    data() {
        return {
            show: false
        }
    },
    methods:{
        multiplicaSalario(a , b){
            let c =a*b;
            return c;
        }
    }
}
</script>

<style>
@media screen and (min-width: 442px) {
    table.tabela td:nth-child(2) {
        display: run-in;
    }
}
@media screen and (min-width: 442px) {
    table.tabela td:nth-child(3) {
        display: run-in;
    }
}
@media screen and (max-width: 442px) {
    table.tabela td:nth-child(2) {
        display: none;
    }
}
@media screen and (max-width: 442px) {
    table.tabela td:nth-child(3) {
        display: none;
    }
}
</style>
