<script setup>
import {computed, ref} from 'vue';
import {Link, router} from "@inertiajs/vue3";

//import logo from '../../images/logo.jpg'
import {useAdminDrawerStore} from "../stores/adminDrawer.js";
import {useAuthLinksStore} from "../stores/authLinks.js";


import {useDisplay} from 'vuetify';

import bg from "@images/bg/bg-about.jpg";


const {mdAndUp} = useDisplay()

const adminDrawerStore = useAdminDrawerStore();

let drawer = computed({
    get: () => adminDrawerStore.isOpen,
    set: (value) => {
        // Realiza alguna lógica adicional antes de asignar el valor
        adminDrawerStore.isOpen = value;
    }
});

let rail = computed({
    get: () => adminDrawerStore.rail,
    set: (value) => {
        // Realiza alguna lógica adicional antes de asignar el valor
        adminDrawerStore.rail = value;
    }
});
const group = ref(null)
const listNotAuthenticated = [
    {title: 'Login', icon: 'mdi-account-lock', route: "/login"},
    {title: 'Sign Up', icon: 'mdi-account-plus', route: "/register"},
];

const managementLinks = [
    {
        route: "statistics.admin",
        icon: 'mdi-chart-bar',
        title: "Estadísticas",
        can: 'view statistics'
    },
    {
        route: "diagnostic.db",
        icon: 'mdi-database-eye',
        title: "Diagnóstico DB",
        can: 'view statistics'
    }
];

const authLinksStore = useAuthLinksStore();
const links = authLinksStore.authLinks

function goBack() {
    if (typeof window !== 'undefined') {
        window.history.back();
    } else {
        console.warn('window is not defined, cannot go back');
    }
}


function navigateTo(route) {
    router.get(route);
}

function logout() {
    axios.post(route('logout')).then(response => {
        window.location = '/';
    })
}


</script>

<template>
    <v-navigation-drawer
        v-model="drawer"
        :rail="rail"
        :expand-on-hover="rail"
        style="box-shadow: rgb(0 0 0 / 20%) -20px 1px 17px 8px, rgb(0 0 0 / 14%) 0px 2px 2px 0px, rgb(0 0 0 / 12%) 0px 1px 5px 0px;"
    >


        <v-divider></v-divider>



            <v-toolbar  density="compact" class="d-flex ga-2 px-2">
                <v-btn variant="text" icon
                       @click="goBack"
                >
                    <v-icon icon="mdi-arrow-left"></v-icon>
                    <v-tooltip
                        activator="parent"
                    >
                        Regresar
                    </v-tooltip>
                </v-btn>
                <v-spacer></v-spacer>
                <v-btn  icon variant="text" @click="logout">
                    <v-icon icon="mdi-power"></v-icon>
                    <v-tooltip
                        activator="parent"
                    >
                        cerrar sesión
                    </v-tooltip>
                </v-btn>
                <v-btn @click="navigateTo(route('profile.show'))" icon variant="text">
                    <v-icon icon="mdi-dots-vertical"></v-icon>
                    <v-tooltip
                        activator="parent"
                    >
                        Perfil de usuario
                    </v-tooltip>
                </v-btn>

            </v-toolbar>
            <v-list>
                <v-list-item
                    :prepend-avatar="$page.props.auth.user.profile_photo_url"
                    :subtitle="$page.props.auth.user.email"
                    :title="$page.props.auth.user.name"
                ></v-list-item>
            </v-list>


            <v-divider></v-divider>

            <v-list>
                <template v-if="$page.props.auth.user===null">
                    <v-divider></v-divider>
                    <v-list-subheader>Authentication</v-list-subheader>
                    <Link v-for="item in listNotAuthenticated"
                          :key="item.title"
                          :href="item.route">
                        <v-list-item>
                            <template v-slot:prepend>
                                <v-icon :icon="item.icon"></v-icon>
                            </template>
                            <v-list-item-title v-text="item.title"></v-list-item-title>
                        </v-list-item>
                    </Link>
                </template>

                <v-list-subheader>Admin</v-list-subheader>

                <v-list-item
                    v-for="(item, i) in links" :key="i"
                    :active="route().current(item.route)"
                    :class="route().current(item.route)?'active bg-primary':''"
                    :dark="route().current(item.route)"
                    :prepend-icon="item.icon"
                    :title="item.title"
                    class="text-decoration-none mr-1"
                    rounded="e-xl"
                    @click="navigateTo(route(item.route))"
                >

                </v-list-item>

                <v-list-subheader>Gestión de plataforma</v-list-subheader>

                <v-list-item
                    v-for="(item, i) in managementLinks" :key="i"
                    :active="route().current(item.route)"
                    :class="route().current(item.route)?'active bg-primary':''"
                    :dark="route().current(item.route)"
                    :prepend-icon="item.icon"
                    :title="item.title"
                    class="text-decoration-none mr-1"
                    rounded="e-xl"
                    @click="navigateTo(route(item.route))"
                >

                </v-list-item>
            </v-list>



    </v-navigation-drawer>
</template>

