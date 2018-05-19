import mealApp from './mealApp.vue';
import meals from './component/meals.vue';
import save from './component/save.vue';
import view from './component/view.vue';
import VueRouter from 'vue-router';

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: mealApp,

            children: [
                {
                    path: '',
                    name: 'my-meal.dashboard',
                    component: meals
                },
                {
                	path: '/type/:type',
                    name: 'my-meal.save',
                    component: save
                },
                {
                	path: '/type/:type',
                    name: 'my-meal.list',
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