import Vue from 'vue'
import App from './views/app.vue'
import router from "./router";
import store from "./store";

//Main pages

const app = new Vue({
    el: '#app',
    router,
    store,
    components: { App },

});
