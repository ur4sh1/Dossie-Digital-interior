<template>
    <div class="container">
            <span v-for="l in leitos">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <table class="mr-2">
                                    <tr>
                                        <td>Clínico</td>
                                        <td class="inf">{{l.leito_clinico}}</td>
                                    </tr>
                                    <tr>
                                        <td>Cirúrgico</td>
                                        <td class="inf">{{l.leito_cirurgico}}</td>
                                    </tr>
                                    <tr>
                                        <td>Outro</td>
                                        <td class="inf">{{l.outro}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="ml-2">
                                    <tr>
                                        <td>Obstétrico</td>
                                        <td class="inf">{{l.leito_obstetrico}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pediátrico</td>
                                        <td class="inf">{{l.leito_pediatrico}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
       </span>
    </div>
</template>
<script>
export default {
    props: ['leitos']
}
</script>

<style>
.inf{
    color: blue;
    text-align: right;
}
</style>
