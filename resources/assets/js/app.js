require('./bootstrap');
window.Vue = require('vue');
window.Vue.use(require('vue-moment'));

import VueRouter from 'vue-router';
window.Vue.use(VueRouter);
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
import LostIndex from './components/Losts.vue';
import FindCenter from './components/FindCenter.vue';

const routes = [
    {
        path: '/',
        components: {lostIndex:LostIndex}
    },
    {
        path: '/find',
        name: 'findCenter',
        component: FindCenter,
    },
];
const router = new VueRouter({
    routes
});

const app = new Vue({
    router
}).$mount('#app');
