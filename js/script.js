"use strict";

const {createApp} = Vue;

const app = createApp({
    data() {
        return {
            message: 'Ready'
        }
    },
}).mount('#app');