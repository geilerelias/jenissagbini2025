import { defineStore } from "pinia";

export const useLinksStore = defineStore("links", {
    state: () => ({
        links: [

            {
                route: "home",
                icon: "mdi-home",
                title: "Inicio",
                array: null
            },
            {
                route: "about",
                icon: "mdi-account-question",
                title: "¿Quien soy?",
                array: null
            },
            {
                route: "projects",
                icon: "mdi-file-tree",
                title: "Proyectos",
                array: null
            },
            {
                route: "articles",
                icon: "mdi-card-text",
                title: "Artículos",
                array: null
            },
            {
                route: "services",
                icon: "mdi-face-agent",
                title: "Servicios",
                array: null
            },
            {
                route: "contact",
                icon: "mdi-card-account-mail",
                title: "Contacto",
                array: null
            },
        ],
    }),
})

