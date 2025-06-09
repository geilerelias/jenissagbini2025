import {defineStore} from 'pinia';

export const useAuthLinksStore = defineStore('authLinks', {
    state: () => ({
        isAuthenticated: false,
        user: null,
        authLinks: [
            {
                route: "dashboard",
                icon: 'mdi-view-dashboard',
                title: "Dashboard",
                can: 'view dashboard'
            },
            {
                route: "notices.index",
                icon: 'mdi-bulletin-board',
                title: "Noticias",
                can: 'view notices'
            },
            {
                route: "about.index",
                title: "Quien soy",
                icon: "mdi-account-question",
                can: 'view about'
            },
            {
                route: "articles.admin",
                title: "Artículos",
                icon: "mdi-file-tree",
                can: 'view articles'
            },
            {
                route: "project.admin",
                title: "Proyectos",
                icon: "mdi-card-text",
                can: 'view project'
            },
            {
                route: "services.admin",
                icon: 'mdi-face-agent',
                title: "Servicios",
                can: 'view services'
            },
            {
                route: "subjects.index",
                icon: "mdi-book-open-variant",
                title: "Asignaturas",
                //can: 'view subjects'
            },

            // {route: "posts.index", icon: 'mdi-note-text-outline', title: "Post"},
            {
                route: "user.index",
                icon: 'mdi-account-tie',
                title: "User",
                can: 'view user'
            },
            {
                route: "role.index",
                icon: 'mdi-shield-account',
                title: "Roles",
                can: 'view rol'
            },
            {
                route: "permission.index",
                icon: 'mdi-badge-account-outline',
                title: "Permisos",
                can: 'view permission'
            },

        ],

    }),
    actions: {
        login(user) {
            this.isAuthenticated = true;
            this.user = user;
        },
        logout() {
            this.isAuthenticated = false;
            this.user = null;
        },
    },
});
