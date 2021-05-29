import axios from 'axios';
// import app from './main'
import Echo from 'laravel-echo'
import VueSimpleAlert from 'vue-simple-alert'

console.log('apit token', sessionStorage.getItem("Authorization"))

const api = axios.create({
    baseURL: `http://localhost:8000/`,
    headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*'
    },
    xsrfCookieName: 'XSRF-TOKEN',
    xsrfHeaderName: 'X-XSRF-TOKEN',
    withCredentials: true
});

api.interceptors.request.use(function (config) {
    const token = sessionStorage.getItem("Authorization")
    config.headers.Authorization = `Bearer ` + token;
    console.log('apiiiiiiiii token', token)
    return config;
});

api.interceptors.response.use(
    function (response) {
        // Call was successful, don't do anything special.
        return response;
    },
    function (error) {
        switch (error.response.status) {
            case 401: // Not logged in
                VueSimpleAlert.alert("Session expired, Please Log in again", "Session Expired", "warning")
                api.post('api/logout').then(() => {
                    sessionStorage.clear();
                    window.location.reload();

                })
                break;
            case 419: // Session expired
                VueSimpleAlert.alert("Session expired, Please Log in again", "Session Expired", "warning")
                api.post('api/logout').then(() => {
                    sessionStorage.clear();
                    window.location.reload();
                })
                break;
            case 429:
                VueSimpleAlert.alert("Too many, requests", "Throttled", "error")
                break;
            case 503: // Down for maintenance
                // Bounce the user to the login screen with a redirect back
                VueSimpleAlert.alert("We're sorry, our site is down for maintenance, Thank you", "Down for maintenance", "info")
                api.post('api/logout').then(() => {
                    sessionStorage.clear();
                    window.location.reload();
                })
                window.location.reload();
                break;
            case 500:
                // VueSimpleAlert.alert('Oops, something went wrong!  The team have been notified.', 'Error', 'error')
                break;
            default:
                // Allow individual requests to handle other errors
                return Promise.reject(error);
        }
    });

window.Pusher = require('pusher-js');
window.Echo = new Echo({
    broadcaster: "pusher",
    cluster: 'ap1',
    encrypted: true,
    forceTLS: true,
    key: '410753cda4969a0b8071',
    // activityTimeout:1000000,
    authorizer: (channel) => {
        return {
            authorize: (socketId, callback) => {
                api.post('/api/broadcasting/auth', {
                    socket_id: socketId,
                    channel_name: channel.name
                })
                    .then(response => {
                        callback(false, response.data);
                    })
                    .catch(error => {
                        callback(true, error);
                    });
            }
        };
    },
})
// api.interceptors.request.use((config) => {
//     app.VueProgressBar.start(); // for every request start the progress
//     console.log("laoding")
//     return config;
// });
// api.interceptors.response.use((response) => {
//     console.log("done")
//     app.VueProgressBar.finish(); // finish when a response is received
//     return response;
// });

export default api