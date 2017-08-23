import Vue from 'vue';
import { sync } from 'vuex-router-sync';

import store from './store';
import router from './router';

sync(store, router);

document.addEventListener('DOMContentLoaded', () => {
    const app = new Vue({
        store,
        el: '#app',
        mounted() {
            $(this.$el).foundation();
        }
    });
});
