import DashboardApp from './DashboardApp.vue';
import VueRouter from 'vue-router';

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: DashboardApp,
        }
    ]
});