import homePage from '../components/Page/homePage.vue';
import UserPage from '../components/Page/UserPage.vue'
import descriptionPage from '../components/Page/descriptionPage.vue';
import addForm from '../components/Page/addForm.vue';
import signIn from '../components/Page/signIn.vue';
import signUp from '../components/Page/signUp.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/",
        name: "homePage",
        component: homePage
    },
    {
        path: "/profile",
        name: "userPage",
        component: UserPage
    },
    {
        path: "/product",
        name: "descriptionPage",
        component: descriptionPage
    },
    {
        path: "/addForm",
        name: "addForm",
        component: addForm
    },
    {
        path: "/signIn",
        name: "signIn",
        component: signIn
    },
    {
        path: "/signUp",
        name: "signUp",
        component: signUp
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;