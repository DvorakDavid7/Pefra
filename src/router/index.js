import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Meta from 'vue-meta'


Vue.use(VueRouter)
Vue.use(Meta)

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
        path: '/okna',
        name: 'okna',
        component: () => import('../views/Okna.vue')
    },

]

const router = new VueRouter({
    routes
})

export default router
