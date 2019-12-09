import Vue from 'vue';
import VueRouter from 'vue-router'
import Home from './components/Home'

Vue.use(VueRouter)

const routes = [   
    {
        component: Home,
        path: '/',
        name: "Home"
    }
]


const router = new VueRouter({routes, mode:'history'})

export default router