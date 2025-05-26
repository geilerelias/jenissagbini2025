// filepath: c:\dev\jenissagbini\resources\js\stores\drawer.js
import { defineStore } from "pinia";

export const useDrawerStore = defineStore("drawer", {
    state: () => ({
        drawer: false,
    }),
    actions: {
        change() {
            this.drawer = !this.drawer; // Cambia el estado del drawer
        },
    },
});