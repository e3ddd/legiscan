import { createRouter, createWebHistory } from 'vue-router';
import { defineAsyncComponent } from "vue";


const Index = defineAsyncComponent(() => import ("./components/Index.vue"));
const Body = defineAsyncComponent(() => import("./components/Body/Body.vue"));


const routes = [
    {
        path: '/',
        component: Index,
        name: 'Index',
        children: [
            {
                path: '/:category',
                name: 'category',
                component: Body,
            }
        ],
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
