<script setup>
import {ref} from "vue";
import {router} from "@inertiajs/vue3";
import bg from "@images/bg/bg-home.png";
import {useDrawerStore} from "../stores/drawer";

import {useLinksStore} from "../stores/links";

const linksStore = useLinksStore();

const drawerStore = useDrawerStore();

const group = ref(null);
const authentication = [
    {title: "Login", icon: "mdi-account-lock", route: "/login"},
    {title: "Sign Up", icon: "mdi-account-plus", route: "/register"},
];

const logout = () => {
    router.post(route("logout"));
};

function redirect(dir) {
    router.get(route(dir));
    drawerStore.drawer = false;
}
</script>

<template>
    <v-dialog
        transition="dialog-bottom-transition"
        fullscreen
        floating
        location="right"
        v-model="drawerStore.drawer"
        expand-on-hover
        temporary
    >
        <v-card
            class="mx-auto"
        >
            <v-img
                gradient="to top right, rgba(128, 128, 128, 0.9), rgba(0, 0, 0, 0.9)"
                class="text-white"
                height="300px"
                :lazy-src="lazyBg1"
                :src="bg"
                cover
            >
                <div class="d-flex flex-column h-100">
                    <v-card-title class="d-flex ga-2 px-2">
                        <v-btn @click="drawerStore.drawer = false;" icon="mdi-chevron-left" variant="text"></v-btn>
                        <v-spacer></v-spacer>
                        <v-btn @click="redirect('home')" icon="mdi-home" variant="text"></v-btn>
                        <v-btn @click="redirect('profile.show')" icon="mdi-dots-vertical" variant="text"></v-btn>
                    </v-card-title>

                    <v-spacer></v-spacer>

                    <v-card-title class="pb-6 text-left">
                        <div
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            color="black"
                            size="100px"
                            class="font-poppins text-3xl text-wrap"
                        >
                            Jenis Sagbini
                        </div>

                        <div
                            data-aos="fade-down"
                            class="font-poppins text-1xl mt-1 tracking-widest"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            Proyectos & Ingeniería
                        </div>

                        <v-responsive
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            style="width: 30%"
                            class="bg-white rounded-lg mb-3 mt-1 mb-6 mr-auto"
                        >
                            <v-divider class="pb-0.5 rounded-lg"/>
                        </v-responsive>

                        <div
                            data-aos="fade-up"
                            class=" text-wrap mx-auto text-caption"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            ¡Haciendo a la Gente Exitosa en un mundo
                            cambiante!
                        </div>
                    </v-card-title>
                </div>
            </v-img>

            <v-list lines="two">
                <v-list-item
                    v-for="link in linksStore.links"
                    :key="link.route"
                    :class="{
                    'v-list-item--active text-primary font-weight-black':
                        route().current(link.route),
                }"
                    @click="redirect(link.route)"
                >
                    <template v-slot:prepend>
                        <v-avatar>
                            <v-icon :icon="link.icon"></v-icon>
                        </v-avatar>
                    </template>

                    <v-list-item-title>{{ link.title }}</v-list-item-title>
                    <v-list-item-subtitle>{{ link.route }}</v-list-item-subtitle>
                </v-list-item>

                <template v-if="!$page.props.auth.user">
                    <v-divider inset></v-divider>
                    <v-list-subheader> Autenticación</v-list-subheader>
                    <v-list-item
                        @click="redirect('login')"
                    >
                        <template v-slot:prepend>
                            <v-avatar>
                                <v-icon icon="mdi-login"></v-icon>
                            </v-avatar>
                        </template>

                        <v-list-item-title>Iniciar sesión</v-list-item-title>
                        <v-list-item-subtitle>login</v-list-item-subtitle>
                    </v-list-item>


                    <v-list-item
                        @click="redirect('register')"
                    >
                        <template v-slot:prepend>
                            <v-avatar>
                                <v-icon icon="mdi-account-plus"></v-icon>
                            </v-avatar>
                        </template>

                        <v-list-item-title>Registrarse</v-list-item-title>
                        <v-list-item-subtitle>register</v-list-item-subtitle>
                    </v-list-item>

                </template>

                <template v-else>
                    <v-divider inset></v-divider>
                    <v-list-subheader> Gestión</v-list-subheader>
                    <v-list-item
                        :active="route().current('dashboard')"
                        :class="
                            route().current('dashboard')
                                ? 'active bg-primary'
                                : ''
                        "
                        :dark="route().current('dashboard')"
                        class="text-decoration-none mr-1"
                        rounded="lg"
                        @click="navigateTo(route('dashboard'))"
                    >
                        <template v-slot:prepend>
                            <v-avatar>
                                <v-icon icon="mdi-view-dashboard-outline"></v-icon>
                            </v-avatar>
                        </template>

                        <v-list-item-title>Dashboard</v-list-item-title>
                        <v-list-item-subtitle>dashboard</v-list-item-subtitle>
                    </v-list-item>
                </template>

            </v-list>
        </v-card>

    </v-dialog>
</template>

<style scoped></style>
