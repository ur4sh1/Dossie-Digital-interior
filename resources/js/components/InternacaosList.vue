<template>
  <div class="container">
      <span v-if="internacaos" v-for="int in internacaos">
        <label><b>Internação</b></label>
          <div class="row">
            <div class="col-12">
              <table>
                <tr>
                  <td style="width: 80px">Média dia</td>
                  <td class="inf badge badge-secondary">{{int.media_dia}}</td>
                </tr>
                <tr>
                  <td style="width: 80px">Média mês</td>
                  <td class="inf badge badge-secondary">{{int.media_mes}}</td>
                </tr>
              </table>
            </div>
          </div>
      </span>
  </div>
</template>
<script>
export default {
  props: ['internacaos']
}
</script>

<style>

</style>
