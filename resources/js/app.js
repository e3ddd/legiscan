import './bootstrap';

import {createApp} from "vue";

import router from "./routers.js";
import vuex from "./vuex/vuex.js";

import App from "./App.vue";

const app = createApp(App);

app.use(router);
app.use(vuex);

app.mount('#app');
