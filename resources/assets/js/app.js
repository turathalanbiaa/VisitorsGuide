require('./bootstrap');
window.Vue = require('vue');
window.Vue.use(require('vue-moment'));
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
import VueRouter from 'vue-router';
import { routes } from './routes';
Vue.use(VueRouter);

const router = new VueRouter({
    routes:routes,
});

Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};

const app = new Vue({
    el:'#app',
    router:router,
});
