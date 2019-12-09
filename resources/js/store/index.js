import Vue from 'vue'
import Vuex from 'vuex'
import sections from './modules/sections'


Vue.use(Vuex);

export default new Vuex.Store({

    modules:{
        sections
    }

})