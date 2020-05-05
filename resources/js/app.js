import Vue from "vue";
import Parallax from 'vue-parallaxy';

require('./bootstrap');

const app = new Vue({
  el: '#website',
  components: {
    Parallax
  }
});
