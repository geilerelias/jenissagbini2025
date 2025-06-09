<script setup>
import {Link} from '@inertiajs/vue3'

// Información de contacto y enlaces personalizados para Jenis Sagbini
const year = new Date().getFullYear();
const email = 'contacto@jenissagbini.com';

const redesSociales = [
    {
        name: "facebook",
        icon: "mdi-facebook",
        route: "https://www.facebook.com/jenis.sagbini.9",
    },
    {
        name: "twitter",
        icon: "mdi-twitter",
        route: "https://twitter.com/JenisSagbini",
    },
    {
        name: "linkedin",
        icon: "mdi-linkedin",
        route: "https://www.linkedin.com/in/jenis-del-carmen-sagbini-ech%C3%A1vez-b66a1410a/",
    },
    {
        name: "instagram",
        icon: "mdi-instagram",
        route: "https://www.instagram.com/jenis_sagbini/",
    },
    {
        name: 'Contacto',
        icon: 'mdi-email',
        route: `mailto:${email}`
    },
];
</script>

<template>
    <v-divider class="bg-grey pa-1"></v-divider>
    <v-footer
        :app="true"
        name="app-footer"
        class="bg-primary"
    >
        <v-container>
            <div class="h-100 d-flex align-center justify-center  justify-space-around flex-wrap">
                <span class="text-center text-wrap">
                    © jenissagbini.com 2018 - {{ year }} Todos los derechos reservados.
                </span>

                <div
                    class="d-flex align-content-center flex-wrap justify-space-around mt-4  mt-sm-4 mt-md-0 mt-lg-0"
                >
                    <a v-for="link in redesSociales" :key="link.id" :href="link.route"
                       class="text-decoration-none  px-2 d-flex align-center"
                       target="_blank" rel="noopener noreferrer">
                        <v-icon size="20" class="mr-1">{{ link.icon }}</v-icon>
                        <v-tooltip
                            activator="parent"
                            location="top"
                        >
                            {{ link.name }}
                        </v-tooltip>
                    </a>
                </div>
            </div>
        </v-container>
    </v-footer>
</template>
