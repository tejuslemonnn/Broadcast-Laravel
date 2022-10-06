import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import Loginview from "../views/LoginView.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path: "/login",
        name: "login",
        component: Loginview,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
