<template>
    <div class="container">
            <span v-if="veiculos.length">
                  <button  class="btn btn-link" @click="show = !show">
                    <label><b>Veículos</b></label>
                  </button>
                  <transition name="slide-fade">
                       <table class="mt-2" v-if="show" v-for="v in veiculos" :key="v">
                           <thead>
                               <tr>
                                   <td></td>
                                   <td><b>Existente</b></td>
                                   <td><b>Funcional</b></td>
                               </tr>
                           </thead>
                           <t-body>
                               <tr>
                                   <td>Administrativo</td>
                                   <td><label class="badge badge-secondary">{{ v.administrativo_existente }}</label></td>
                                   <td><label class="badge badge-secondary">{{ v.administrativo_funcional }}</label></td>
                               </tr>
                               <tr>
                                   <td>Ambulância Terrestre</td>
                                   <td><label class="badge badge-secondary">{{ v.ambulancia_terrestre_existente }}</label></td>
                                   <td><label class="badge badge-secondary">{{ v.ambulancia_terrestre_funcional }}</label></td>
                               </tr>
                               <tr>
                                   <td>Ambulância Flúvial</td>
                                   <td><label class="badge badge-secondary">{{ v.ambulancia_fluvial_existente }}</label></td>
                                   <td><label class="badge badge-secondary">{{ v.ambulancia_fluvial_funcional }}</label></td>
                               </tr>
                           </t-body>
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
    }
}
</script>

<style>

</style>
