/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import '../../node_modules/@popperjs/core/dist/umd/popper.min.js';
import 'bootstrap/js/dist/dropdown';

require('./bootstrap');

window.Vue = require('vue');

import App from './views/App';

import router from './routes.js'

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App),
});
