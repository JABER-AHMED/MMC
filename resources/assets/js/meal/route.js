import MealApp from './MealApp.vue';
import VueRouter from 'vue-router';
import view from './component/view.vue';
import save from './component/save.vue';
window.axios = require('axios');

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'meal',
            component: MealApp,

            children: [

                {
                    path: '/type/:type',
                    name: 'meal.create',
                    component: save
                },
                {
                    path: '/type/:type',
                    name: 'meal.list',
                    component: view
                },
                {
                   path: '/edit/:mealId',
                   name: 'meal.edit',
                   component: save
                },
            ]
        }
    ]
});