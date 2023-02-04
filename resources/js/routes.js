import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomePage from "./views/pages/HomePage.vue";
import AboutUs from "./views/pages/AboutUs.vue";

import PostsIndex from "./views/pages/posts/PostsIndex.vue";
import PostShow from "./views/pages/posts/PostShow.vue";

import TagsIndex from "./views/pages/tags/TagsIndex.vue";
import TagShow from "./views/pages/tags/TagShow.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: HomePage,
        },
        {
            path: "/about-us",
            name: "about-us",
            component: AboutUs,
        },
        {
            path: "/posts",
            name: "posts",
            component: PostsIndex,
        },
        {
            path: "/posts/:id",
            name: "postshow",
            component: PostShow,
        },
        {
            path: "/tags",
            name: "tags",
            component: TagsIndex,
        },
        {
            path: "/tags/:name",
            name: "singleTag",
            component: TagShow,
        },
    ],
});

export default router;
