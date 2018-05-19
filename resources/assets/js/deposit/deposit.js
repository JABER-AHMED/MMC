import router from './route';
import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter)
import CxltToastr from 'cxlt-vue2-toastr'
Vue.use(CxltToastr)
var toastrConfigs = {
    position: 'bottom right',
    showDuration: 2000
}
Vue.use(CxltToastr, toastrConfigs)

new Vue({
    router,
}).$mount('#app');