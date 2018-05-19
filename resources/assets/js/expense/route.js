import ExpenseApp from './ExpenseApp.vue';
import VueRouter from 'vue-router';
import view from './component/view.vue';
import save from './component/save.vue';
window.axios = require('axios');

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'expense',
            component: ExpenseApp,

            children: [

            	{
                	path: '/type/:type',
                    name: 'expense.create',
                    component: save
                },
                {
                	path: '/type/:type',
                    name: 'expense.list',
                    component: view
                },
            ]
        }
    ]
});