import Vue from 'vue'
import App from './views/app.vue'
import router from "./router";

//Main pages

const app = new Vue({
    el: '#app',
    router,
    components: { App },

});
