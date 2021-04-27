<template>
    <div class="container">
            <span v-if="leitos" v-for="l in leitos">
                        <table class="mt-2">
                            <tr>
                                <label class="titulo"><b>Leitos</b></label>
                            </tr>
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
            </span>
    </div>
</template>
<script>
export default {
    props: ['leitos']
}
</script>

<style>
table{

}
.inf{
    text-align: right;
}
.titulo{
    border-radius: 10px;
    background: #ace2ff;
    width: 80px;
}
</style>
