

require('./bootstrap');

import Vue from 'vue';
import router from './routes'
import store from './store'
import MainApp from './components/MainApp'




const app = new Vue({
    el: '#app',
    components: {
        MainApp
    },
    router,
    store
});
