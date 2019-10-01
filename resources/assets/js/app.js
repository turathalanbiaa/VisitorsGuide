require('./bootstrap');
window.Vue = require('vue');
window.Vue.use(require('vue-moment'));

import {Button, Modal,Form,FormGroup,FormSelect,FormInput  } from 'bootstrap-vue/es/components';
Vue.use(Button);
Vue.use(Modal);
Vue.use(Form);
Vue.use(FormGroup );
Vue.use(FormSelect );
Vue.use(FormInput );
import VueSnackbar from 'vue-snack';
Vue.use(VueSnackbar);

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
import * as VueGoogleMaps from "vue2-google-maps";

window.Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyBYPOqCep_Cx1apaQw8Yz6rsywzNGtwwjc",
        libraries: "places" // necessary for places input
    }
});
const app = new Vue({
    el:'#app',
    router:router,
});
