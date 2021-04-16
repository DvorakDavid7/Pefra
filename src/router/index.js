import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'





Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/pokryti',
        name: 'pokryti',
        component: () => import('../views/Pokryti')
    },
    {
        path: '/novinky',
        name: 'novinky',
        component: () => import('../views/Novinky.vue')
    },
    {
        path: '/galerie',
        name: 'galerie',
        component: () => import('../views/Galerie.vue')
    },
    {
        path: '/dilenske-prace',
        name: 'dilenskePrace',
        component: () => import('../views/DilenskePrace.vue')
    },
    {
        path: '/povrchove-upravy',
        name: 'povrchoveUpravy',
        component: () => import('../views/PovrchoveUpravy.vue')
    },
    {
        path: '/zamecnictvi',
        name: 'zamecnictvi',
        component: () => import('../views/Zamecnictvi.vue')
    },
    {
        path: '/ostatni',
        name: 'ostatni',
        component: () => import('../views/Ostatni.vue')
    },

]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
