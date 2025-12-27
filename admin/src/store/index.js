import {createStore} from "vuex"
import * as mutations from './mutations'
import * as actions from './actions'
import state from "./state"
import notifications from "./modules/notifications";
import bookings from "./modules/bookings";

const store=createStore({
    modules:{
        notifications:notifications,
        bookings:bookings
    },
    state,
    getters:{},
    actions,
    mutations,
})
export default store

