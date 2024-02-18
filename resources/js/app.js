import "./bootstrap";

// Vue.component(
//     "hello-component",
//     require("./components/HelloComponent.vue").default
// );

import { createApp } from "vue";
import App from "./vue/App.vue";

const buildApp = async () => {
    const app = createApp(App);
    app.mount("#app");
};

buildApp();
