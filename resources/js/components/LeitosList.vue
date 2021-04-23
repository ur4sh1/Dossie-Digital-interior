<template>
    <div class="container">
            <span v-if="leitos" v-for="l in leitos">
                <label><b>Leitos</b></label><br>
                        <table class="mr-2 mt-2">
                              <tr>
                                  <td>Clínico</td>
                                  <td class="inf">{{l.leito_clinico}}</td>
                                  <td>Obstétrico</td>
                                  <td class="inf">{{l.leito_obstetrico}}</td>
                                                                     <td>Cirúrgico</td>
                                   <td class="inf">{{l.leito_cirurgico}}</td>
                              </tr>
                              <tr>
                                  <td>Pediátrico</td>
                                  <td class="inf">{{l.leito_pediatrico}}</td>
                                  <td>Outro</td>
                                  <td class="inf">{{l.outro}}</td>
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
    color: blue;
    text-align: right;
}
</style>
