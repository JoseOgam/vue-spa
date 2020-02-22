/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueAnalytics from 'vue-analytics'

Vue.use(VueAnalytics, {
    id: 'UA-XXX-X'
});

/**
 * vform
 */
import {Form, HasError, AlertError} from 'vform'

/**
 * global component
 */
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

/**
 * progressbar
 */
import VueProgressBar from 'vue-progressbar'

/**
 * gate class
 */
import Gate from "./gate";

Vue.prototype.$gate = new Gate(window.user);


/**
 * Progressbar
 * @type {{inverse: boolean, color: string, thickness: string, failedColor: string, autoRevert: boolean, location: string, transition: {termination: number, opacity: string, speed: string}}}
 */
const options = {
    color: '#ffed4a',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
};

Vue.use(VueProgressBar, options);

/**
 * sweetalert2
 */
import Swal from 'sweetalert2'

window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-right',
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
});

window.Toast = Toast;


/**vue router section */
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    {path: '/index', component: require('./components/Index.vue').default},
    {path: '/profile', component: require('./components/Profile.vue').default},
    {path: '/developer', component: require('./components/Developer.vue').default},
    {path: '/about', component: require('./components/About.vue').default},
    {path: '/portfolio', component: require('./components/Portfolio.vue').default},
    {path: '/contact', component: require('./components/Contact.vue').default},
    {path: '/messages', component: require('./components/Messages.vue').default},
    {path: '/dashboard', component: require('./components/Dashboard.vue').default},
    {path: '/work', component: require('./components/Work.vue').default},
    {path: '/users', component: require('./components/Users.vue').default},
];

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('index', require('./components/Index.vue').default);
Vue.component('about', require('./components/About.vue').default);
Vue.component('portfolio', require('./components/Portfolio.vue').default);
Vue.component('notFound', require('./components/NotFound.vue').default);


Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

window.Fire = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,

    data: {
        search: '',
    }
});
