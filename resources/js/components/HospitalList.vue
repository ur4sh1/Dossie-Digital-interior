<template>
    <div class="container">
        <div v-for="hos in hospital">
            {{hos.nome}}
            <br><label>Média Internação</label><br>
            <internacaos-list :internacaos=" internacaos.filter(int => {
                return hos.id===int.hospital_id
            })"></internacaos-list>
            <label>Leitos</label><br>
            <leitos-list :leitos=" leitos.filter(le => {
                return hos.id===le.hospital_id
            })"></leitos-list>
        </div>
    </div>
</template>
<script>
import LeitosList from "./LeitosList";
import InternacaosList from "./InternacaosList";
export default {
    components: {InternacaosList, LeitosList},
    props: ['hospital','leitos','internacaos'],
}
</script>

<style>

</style>
