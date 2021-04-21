import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import 'bootstrap'
import AOS from 'aos';
import 'aos/dist/aos.css'
import VueGtag from "vue-gtag";


Vue.use(VueGtag, {
  config: { id: "G-KDP8XEC2V7" }
}, router);

AOS.init()

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
