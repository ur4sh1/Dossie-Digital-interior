<template>
    <div class="container">
            <span v-if="veiculos.length">
  <button  class="btn btn-link" @click="show = !show">
    <label><b>Veículos</b></label>
  </button>
  <transition name="slide-fade">
       <table class="table table-sm tabela mt-2" v-if="show">
           <tr>
               <td colspan="2"><b>Administrativo</b></td>
               <td colspan="2" class="text-center"><b>Ambulância Terrestre</b></td>
               <td colspan="2" class="text-center"><b>Ambulância Flúvial</b></td>
           </tr>
           <tr>
               <td><b>Existente</b></td>
               <td><b>Funcional</b></td>
               <td><b>Existente</b></td>
               <td><b>Funcional</b></td>
               <td><b>Existente</b></td>
               <td><b>Funcional</b></td>
           </tr>
           <tr v-for="v in veiculos">
               <td>{{ v.administrativo_existente }}</td>
               <td>{{ v.administrativo_funcional }}</td>
               <td>{{ v.ambulancia_terrestre_existente }}</td>
               <td>{{ v.ambulancia_terrestre_funcional }}</td>
               <td>{{ v.ambulancia_fluvial_existente }}</td>
               <td>{{ v.ambulancia_fluvial_funcional }}</td>
           </tr>
       </table>
  </transition>
            </span>
    </div>
</template>
<script>
export default {
    props: ['veiculos'],
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
