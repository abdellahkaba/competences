import  { createRouter, createWebHistory} from 'vue-router'
import Login from '../components/auth/login.vue'
import Register from '../components/auth/register.vue'
import homeAdminIndex from '../components/admin/home/index.vue'
import homePageIndex from '../components/pages/home/index.vue'
import Experiences from '../components/admin/experiences/index.vue'

import notFound from '../components/notFound.vue'

const routes = [
     //admin
     {
        path: '/admin/home',
        name: 'adminHome',
        component: homeAdminIndex,
        meta:{
            requiresAuth:true
        }
    },
    //pages
    {
        path: '/',
        name: 'Home',
        component: homePageIndex,
        meta:{
            requiresAuth:false
        }
    },
    //notFound
    {
        path: '/:pathMatch(.*)*',
        name: 'notFound',
        component: notFound,
        meta:{
            requiresAuth:false
        }
    },

    //login
    {
        path: '/login',
        name: 'Login',
        component: Login,
        meta:{
            requiresAuth:false
        }
    },

    //Register

    {
        path: '/register',
        name: 'Register',
        component: Register,
        meta:{
            requiresAuth:false
        }
    },
    //Experience

    {
        path: '/experiences',
        name: 'Experiences',
        component: Experiences,
        meta:{
            requiresAuth:false
        }
    }
]






const router = createRouter({
    history: createWebHistory(),
    routes
});

router.beforeEach((to,from) => {
    if(to.meta.requiresAuth && !localStorage.getItem('token')){
        return { name: 'Login'}
    }
})

export default router;
