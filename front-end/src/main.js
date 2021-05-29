import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/tailwind.css'
// import api from './api'
// import Echo from 'laravel-echo'
import VueTheMask from 'vue-the-mask'
import feather from 'vue-icon'

// import VueProgressBar from "@aacassandra/vue3-progressbar";




// window.Echo = new Echo({
//     authEndpoint : 'http://localhost:8000/broadcasting/auth',
//     broadcaster: 'pusher',
//     key: '410753cda4969a0b8071',
//     cluster: 'ap1',
//     forceTLS: true,
//     auth: {
//         headers: {
//             'X-CSRF-Token': "CSRF_TOKEN"
//          }
//       }
// });
//window.Echo.connector.pusher.config.authEndpoint = `http://localhost:8000/broadcasting/auth`;

// import Echo from 'laravel-echo';

// const client = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: '410753cda4969a0b8071',
//     cluster: 'ap1',
//     client: client
// });
import './assets/css/tailwind.css'
window.$ = window.jQuery = require('jquery');
const app = createApp(App).use(router).use(VueTheMask).use(feather).mount('#app')
export default app

