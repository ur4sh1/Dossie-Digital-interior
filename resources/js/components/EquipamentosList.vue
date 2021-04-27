<template>
    <div class="container">
            <span v-if="equipamentos.length" >
                <table class="mt-2">
                    <thead>
                       <tr>
                          <td><label class="titulo"><b>Equipamentos</b></label></td>
                          <td>Existente</td>
                          <td>Funcional</td>
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
            </span>
    </div>
</template>
<script>
export default {
    props: ['equipamentos','tipo_equipamentos']
}
</script>

<style>

</style>
