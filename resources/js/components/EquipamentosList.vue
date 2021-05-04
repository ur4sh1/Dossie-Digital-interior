<template>
    <div class="container">
            <span v-if="equipamentos.length" >
                <button class="btn btn-link" @click="show = !show">
                    <label><b>Equipamentos</b></label>
                </button>
                  <transition name="slide-fade">
                   <table class="mt-2" v-if="show">
                    <thead>
                       <tr>
                          <td></td>
                          <td><b>Existente</b></td>
                          <td><b>Funcional</b></td>
                       </tr>
                   </thead>
                   <tbody>
                       <tr v-for="e in equipamentos">
                           <td v-for="tp in tipo_equipamentos" v-if="e.tipo_equipamentos_id===tp.id">{{ tp.nome }}</td>
                           <td><label class="badge badge-secondary">{{ e.existente }}</label></td>
                           <td><label class="badge badge-secondary">{{ e.funcional }}</label></td>
                       </tr>
                   </tbody>
                </table>
              </transition>
            </span>
    </div>
</template>
<script>
export default {
    props: ['equipamentos','tipo_equipamentos'],
    data() {
        return {
            show: false
        }
    }
}
</script>

<style>

</style>
