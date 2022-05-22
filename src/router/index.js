import { createWebHistory, createRouter } from "vue-router";
import LoginAuth from '../components/auth/LoginAuth.vue';
import RegisterAuth from '../components/auth/RegisterAuth.vue';
import ViewProfile from '../components/ViewProfile.vue';

const routes = [
  {
    path: "/",
    name: "ViewProfile",
    component: ViewProfile,
  },
  {
    path: "/register",
    name: "RegisterAuth",
    component: RegisterAuth,
  },
  {
    path: "/login",
    name: "LoginAuth",
    component: LoginAuth,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;