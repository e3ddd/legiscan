import {createStore} from "vuex";

import legiscan from "./modules/legiscan.js";

const vuex = createStore({
    modules: {
      legiscan
    }
})

export default vuex;
