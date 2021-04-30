<template>
  <div class="container">
      <span v-if="internacaos" v-for="int in internacaos">
          <button class="btn btn-link" @click="show = !show">
            <label><b>Internação</b></label>
          </button>
            <transition name="slide-fade">
                <table v-if="show">
                <tr>
                  <td style="width: 80px">Média dia</td>
                  <td class="inf badge badge-secondary">{{int.media_dia}}</td>
                </tr>
                <tr>
                  <td style="width: 80px">Média mês</td>
                  <td class="inf badge badge-secondary">{{int.media_mes}}</td>
                </tr>
              </table>
            </transition>
      </span>
  </div>
</template>
<script>
export default {
  props: ['internacaos'],
    data() {
      return{
          show: false
      }
    }
}
</script>

<style>
.inf{
    text-align: right;
}
.titulo{
    border-radius: 10px;
    background: #ace2ff;
    width: 80px;
}
.slide-fade-enter-active {
    transition: all .5s ease;
}
.slide-fade-leave-active {
    transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active below version 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}
</style>
