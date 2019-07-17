require('./bootstrap');

window.Vue = require('vue');
//importing vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//using router to navigate between components
let routes = [
    { path: '/home', component: require('./components/HomeComponent.vue').default },
    { path: '/notification', component: require('./components/NotificationComponent.vue').default },
    { path: '/profile', component: require('./components/ProfileComponent.vue').default },
    { path: '/reports', component: require('./components/ReportsComponent.vue').default },
    { path: '/emergency-unit', component: require('./components/EmergencyComponent.vue').default },

]

//registering the routes
const router = new VueRouter({
    routes,
    mode: 'history'
})

//component registration

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('notification', require('./components/NotificationComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});