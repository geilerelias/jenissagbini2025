<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";
import bg from "@images/bg/bg-home.jpg";
import { useDrawerStore } from "../stores/drawer";

import { useLinksStore } from "../stores/links";
import name from "@images/logo/name-white.png";
import slogan from "@images/logo/slogan-white.png";
import lema from "@images/logo/lema-white.png";
const linksStore = useLinksStore();

const drawerStore = useDrawerStore();

const group = ref(null);
const authentication = [
    { title: "Login", icon: "mdi-account-lock", route: "/login" },
    { title: "Sign Up", icon: "mdi-account-plus", route: "/register" },
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
        <v-img
            gradient="to top right, rgba(128, 128, 128, 0.9), rgba(0, 0, 0, 0.9)"
            :lazy-src="lazyBg1"
            :src="bg"
            alt="bg lg"
            class="z-index2"
            cover
        >
            <v-row
                v-if="!mobile"
                class="d-flex fill-height align-center justify-center"
            >
                <v-col class="d-flex justify-center">
                    <div class="d-flex align-center flex-column mt-12">
                        <img
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :src="name"
                            alt="logo"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            style="height: 100px; object-fit: contain"
                        />
                        <!-- <div
                            style="width: 250px"
                            class="mx-auto justify-center align-center rounded-lg"
                        >
                            <div
                                class="px-0 rounded-lg bg-black"
                                style="
                                    padding: 2px;
                                    height: 2px;
                                    border-radius: 1px;
                                    margin: 0;
                                    background-color: white;
                                "
                            ></div>
                        </div> -->
                        <img
                            :data-aos="mobile ? 'fade-down' : 'fade-down'"
                            :src="slogan"
                            alt="logo name"
                            class="h-14 mt-0"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            style="object-fit: contain; width: 70vw"
                        />
                        <img
                            :data-aos="mobile ? 'fade-down' : 'fade-left'"
                            :src="lema"
                            alt="logo name"
                            class="h-14 mt-2"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            style="object-fit: contain; width: 80vw"
                        />
                    </div>
                </v-col>
            </v-row>
        </v-img>

        <v-divider></v-divider>

        <v-list density="compact" nav="">
            <v-list-item
                v-for="link in linksStore.links"
                :key="link.route"
                :class="{
                    'v-list-item--active text-primary font-weight-black':
                        route().current(link.route),
                }"
                :prepend-icon="link.icon"
                :title="link.title"
                @click="redirect(link.route)"
            >
            </v-list-item>
            <v-list-subheader> Autenticación </v-list-subheader>
            <v-list-item
                :title="'Iniciar sesión'"
                prepend-icon="mdi-login"
                @click="redirect('login')"
            >
            </v-list-item>
            <v-list-item
                :title="'Registrarse'"
                prepend-icon="mdi-account-plus"
                @click="redirect('register')"
            >
            </v-list-item>
        </v-list>
    </v-dialog>
</template>

<style scoped></style>
