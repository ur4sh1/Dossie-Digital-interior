<template>
    <div class="container">
            <span v-if="leitos" v-for="l in leitos">
  <button  class="btn btn-link" @click="show = !show">
    <label class="titulo"><b>Leitos</b></label>
  </button>
  <transition name="slide-fade">
       <table class="mt-2" v-if="show">
           <tr>
               <td>Clínico</td>
               <td class="inf badge badge-secondary">{{l.leito_clinico}}</td>
               <td>Obstétrico</td>
               <td class="inf badge badge-secondary">{{l.leito_obstetrico}}</td>
               <td>Cirúrgico</td>
               <td class="inf badge badge-secondary">{{l.leito_cirurgico}}</td>
           </tr>
           <tr>
               <td>Pediátrico</td>
               <td class="inf badge badge-secondary">{{l.leito_pediatrico}}</td>
               <td>Outro</td>
               <td class="inf badge badge-secondary">{{l.outro}}</td>
           </tr>
       </table>
  </transition>
            </span>
    </div>
</template>
<script>
export default {
    props: ['leitos'],
    data() {
        return {
            show: false
        }
    }
}
</script>

<style>

</style>
