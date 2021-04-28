<template>
    <div class="container">
            <span v-if="folhas">
  <button  class="btn btn-link" @click="show = !show">
    <label class="titulo"><b>Folha</b></label>
  </button>
  <transition name="slide-fade">
       <table class="mt-2" v-if="show">
           <tr>
               <td>Profissionais de Saúde</td>
               <td>Salário Unitário R$</td>
               <td>Qtd</td>
               <td>Valor R$</td>
           </tr>
           <tr v-for="f in folhas">
               <td>{{f.profissional_id}}</td>
               <td class="text-right"></td>
               <td class="text-right"></td>
               <td class="text-right"></td>
           </tr>
           <tr>
               <td>Total</td>
               <td></td>
               <td></td>
               <td class="text-right"></td>
           </tr>
       </table>
  </transition>
            </span>
    </div>
</template>
<script>
export default {
    props: ['folhas'],
    data() {
        return {
            show: false
        }
    }
}
</script>

<style>

</style>
