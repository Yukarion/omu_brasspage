import { createRouter, createWebHistory } from "vue-router";
import Top from "../views/Top.vue";

const routes = [
  {
    path: "/",
    name: "Top",
    component: Top
  },
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue"),
  },
  {
    path: "/greeting",
    name: "Greeting",
    component: () => import("../views/Greeting.vue"),
  },
  {
    path: "/news",
    name: "News",
    component: () => import("../views/News.vue"),
  },
  {
    path: "/advertise",
    name: "Advertise",
    component: () => import("../views/Advertise.vue"),
  },
  {
    path: "/request",
    name: "Request",
    component: () => import("../views/Request.vue"),
  },
  {
    path: "/archive",
    name: "Archive",
    component: () => import("../views/Archive.vue"),
  },
  {
    path: "/link",
    name: "Link",
    component: () => import("../views/Link.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
