import frontendApp from './frontendApp.vue';
import VueRouter from 'vue-router';

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'frontend',
            component: frontendApp,
        }
    ]
});