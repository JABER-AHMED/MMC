import DepositApp from './DepositApp.vue';
import VueRouter from 'vue-router';
import view from './component/view.vue';
import save from './component/save.vue';
window.axios = require('axios');

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'deposit',
            component: DepositApp,

            children: [

            	{
                	path: '/type/:type',
                    name: 'deposit.create',
                    component: save
                },
                {
                	path: '/type/:type',
                    name: 'deposit.list',
                    component: view
                },
                {
                   path: '/edit/:depositId',
                   name: 'deposit.edit',
                   component: save
                },
            ]
        }
    ]
});