require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('csrf_token');

import Vuetify from 'vuetify';
Vue.use(Vuetify);


import VueTextareaAutosize from 'vue-textarea-autosize';
Vue.use(VueTextareaAutosize);
import 'material-design-icons-iconfont/dist/material-design-icons.css'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./components/App.vue').default);
Vue.component('calendario', require('./components/Calendario.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),

}).$mount('#app');
