import {defineStore} from 'pinia';

export const useAdminDrawerStore = defineStore('adminDrawer', {
    state: () => ({
        isOpen: true,
        rail: null,
    }),
    actions: {
        open() {
            this.isOpen = true;
        },
        close() {
            this.isOpen = false;
        },
        toggle() {
            this.isOpen = !this.isOpen;
        },

        toggleDrawer() {
            this.isOpen = !this.isOpen;
        },
        changeDrawerRail() {
            this.rail = !this.rail;
        },
    },
});
