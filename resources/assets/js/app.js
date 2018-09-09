require('./bootstrap');
window.Vue = require('vue');
window.Vue.use(require('vue-moment'));

import VueRouter from 'vue-router';
window.Vue.use(VueRouter);
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
import LostIndex from './components/Losts.vue';
import ExampleComponent from './components/ExampleComponent.vue';

const routes = [
    {
        path: '/',
        components: {lostIndex:LostIndex}
    },
    {
        path: '/blog',
        name: 'exampleComponent',
        component: ExampleComponent
    },
];
const router = new VueRouter({
    routes
});

const app = new Vue({
    router
}).$mount('#app');
