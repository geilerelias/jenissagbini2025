<script setup>
import {computed, onMounted, onUnmounted, ref} from "vue";
import {useDisplay, useTheme} from "vuetify";

import {useAdminDrawerStore} from "../stores/adminDrawer.js";
import {useAuthLinksStore} from "../stores/authLinks.js";


import Logo from "@/Components/Logo.vue";

import SettingsDropdown from "@/Components/SettingsDropdown.vue";
import SvgIcon from '@jamescoyle/vue-icon';
import {
    mdiBellOutline,
    mdiCogOutline,
    mdiHeart,
    mdiMagnify,
    mdiMenu,
    mdiMenuOpen,
    mdiWeatherNight,
    mdiWeatherSunny
} from '@mdi/js';

const adminDrawerStore = useAdminDrawerStore();
const authLinksStore = useAuthLinksStore();

const links = authLinksStore.authLinks;

const listNewNotification = [
    {type: "subheader", title: "Today"},
    {
        prependAvatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg",
        title: "Brunch this weekend?",
        subtitle: `<span class="text-primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
    },
    {type: "divider", inset: true},
    {
        prependAvatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        title: "Summer BBQ",
        subtitle: `<span class="text-primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
    },
    {type: "divider", inset: true},
    {
        prependAvatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg",
        title: "Oui oui",
        subtitle:
            '<span class="text-primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
    },
    {type: "divider", inset: true},
    {
        prependAvatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg",
        title: "Birthday gift",
        subtitle:
            '<span class="text-primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?',
    },
    {type: "divider", inset: true},
    {
        prependAvatar: "https://cdn.vuetifyjs.com/images/lists/5.jpg",
        title: "Recipe to try",
        subtitle:
            '<span class="text-primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
    },
];

const toggleDrawer = () => {
    console.log(adminDrawerStore.isOpen)
    adminDrawerStore.toggleDrawer();
};

const rail = computed(() => adminDrawerStore.rail);
const menuNotification = ref(null);

function changeRail() {
    adminDrawerStore.changeDrawerRail();
}

const {mdAndUp} = useDisplay();
const layoutStyle = computed(() => {
    console.error("este es un mensaje: ", mdAndUp && rail);
    if (mdAndUp && rail) {
        return "width: 260px !important";
    } else {
        return "width: 0px !important";
    }
});
let loading = ref(false);

function getRoute(name) {
    // this.$inertia.route(this.$route(name)).url()
    return name;
}

function onClick() {
    loading = true;
    alert("llega");
    setTimeout(() => {
        loading = false;
        let loaded;
        loaded = true;
    }, 2000);
}

const theme = useTheme();

function toggleTheme() {
    theme.global.name.value = theme.global.current.value.dark
        ? "light"
        : "dark";
}

const scrollY = ref(0);

function handleScroll() {
    scrollY.value = window.scrollY;
}

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});
onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
const showMobileToolbar = ref(false);
const menu = ref(false)

const iconPaths = {
    magnify: mdiMagnify,
    sunny: mdiWeatherSunny,
    night: mdiWeatherNight,
    bell: mdiBellOutline,
    menu: mdiMenu,
    menuOpen: mdiMenuOpen,
    cog: mdiCogOutline,
    heart: mdiHeart,
};
</script>

<template>
    <v-app-bar
        app
        class="container"
        :color="scrollY === 0 ? 'transparent ' : 'primary   d-flex  align-center'"
        scroll-behavior="elevate"
        :style="{
            marginLeft: (!mdAndUp ? '10px' : '0px'),
            marginRight: (!mdAndUp ? '10px' : '0px'),
            borderBottomLeftRadius: '20px',
            borderBottomRightRadius: '20px',
            borderTopLeftRadius: '0px',
            borderTopRightRadius: '0px',
        }"
    >
        <template v-slot:prepend>
            <v-app-bar-nav-icon v-if="mdAndUp" @click="toggleDrawer"/>
            <div
                :style="{ width: !mdAndUp || rail ? '' : '200px !important' }"
                class="d-flex align-center"
            >
                <logo :size="45"></logo>
                <p v-if="!rail && mdAndUp" class="ml-2 text-h6 font-weight-bold">
                    Jenis Sagbini
                </p>
            </div>

        </template>

        <template v-slot:append>
            <template v-if="mdAndUp">
                <v-menu :close-on-content-click="false" location="end" offset-y>
                    <template v-slot:activator="{ props }">
                        <v-btn icon="mdi-magnify" v-bind="props"></v-btn>
                    </template>
                    <v-sheet class="elevation-10 rounded-md" style="width: 360px">
                        <div class="d-flex align-center justify-space-between px-5 pt-5">
                            <v-text-field
                                :loading="loading"
                                append-inner-icon="mdi-magnify"
                                color="primary"
                                density="compact"
                                hide-details
                                label="Search templates"
                                single-line
                                variant="outlined"
                                @click:append-inner="onClick"
                            ></v-text-field>
                        </div>
                        <div class="ps ps--active-y" style="height: 380px">
                            <v-list :lines="false" density="compact" lines="two">
                                <v-list-subheader>Enlaces de página rápida</v-list-subheader>
                                <v-list-item
                                    v-for="(item, i) in links"
                                    :key="i"
                                    :prepend-icon="item.icon"
                                    :subtitle="getRoute(item.route)"
                                    :title="item.title"
                                    :value="item"
                                    color="primary"
                                />
                            </v-list>
                        </div>
                    </v-sheet>
                </v-menu>

                <v-menu
                    v-model="menuNotification"
                    :close-on-content-click="false"
                    location="end"
                >
                    <template v-slot:activator="{ props }">
                        <v-btn class="text-none mr-2" icon v-bind="props">
                            <v-badge color="error" content="2">
                                <svg-icon type="mdi" :path="iconPaths.bell"/>
                            </v-badge>
                        </v-btn>
                    </template>
                    <v-card max-width="450" min-width="300">
                        <v-toolbar>
                            <v-btn icon="mdi-menu" variant="text"></v-btn>
                            <v-toolbar-title>Notifications</v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-btn icon="mdi-magnify" variant="text"></v-btn>
                        </v-toolbar>
                        <v-list :items="listNewNotification" item-props lines="three">
                            <template v-slot:subtitle="{ subtitle }">
                                <div v-html="subtitle"></div>
                            </template>
                        </v-list>
                    </v-card>
                </v-menu>

                <v-menu
                    v-model="menu"
                    :close-on-content-click="false"
                    location="end"
                >

                    <template v-slot:activator="{ props }">
                        <v-btn class="text-none mr-2" icon v-bind="props">
                            <svg-icon type="mdi" :path="iconPaths.cog"/>
                        </v-btn>
                    </template>

                    <v-card min-width="300">
                        <v-list>
                            <v-list-item
                                subtitle="Proyectos & Ingenieria"
                                title="Jenis Sagbini"
                            >
                                <template v-slot:prepend>
                                    <logo class="mr-4"></logo>
                                </template>

                            </v-list-item>
                        </v-list>

                        <v-divider></v-divider>
                        <v-list>
                            <v-list-item>
                                <v-switch
                                    v-model="theme.global.name.value"
                                    :label="theme.global.name.value === 'dark' ? 'Tema Oscuro' : 'Tema Claro'"
                                    :true-value="'dark'"
                                    :false-value="'light'"
                                    hide-details
                                >

                                    <template #prepend>
                                        <v-icon>
                                            <svg-icon type="mdi" :path="iconPaths.sunny"/>
                                        </v-icon>
                                    </template>
                                    <template #append>
                                        <v-icon>
                                            <svg-icon type="mdi" :path="iconPaths.night"/>
                                        </v-icon>
                                    </template>
                                </v-switch>
                            </v-list-item>


                            <v-list-item v-if="adminDrawerStore.isOpen">
                                <v-switch
                                    v-if="mdAndUp"
                                    v-model="adminDrawerStore.rail"
                                    :label="rail ? 'Contraer' : 'Expandir'"
                                    color="secondary"
                                    hide-details
                                >
                                    <template #prepend>
                                        <v-icon>
                                            <svg-icon type="mdi" :path="iconPaths.menuOpen"/>
                                        </v-icon>
                                    </template>
                                    <template #append>
                                        <v-icon>
                                            <svg-icon type="mdi" :path="iconPaths.menu"/>
                                        </v-icon>
                                    </template>
                                </v-switch>
                            </v-list-item>
                        </v-list>

                        <v-card-actions>
                            <v-spacer></v-spacer>

                            <v-btn
                                variant="text"
                                @click="menu = false"
                            >
                                Cerrar
                            </v-btn>

                        </v-card-actions>
                    </v-card>

                </v-menu>
                <settings-dropdown :size="45" class="mr-12"></settings-dropdown>
                <div style="width: 16px"></div>

            </template>

            <template v-else>

                <settings-dropdown :size="45" class="mr-2"></settings-dropdown>
                <v-btn icon @click="showMobileToolbar = !showMobileToolbar">
                    <v-icon>mdi-menu</v-icon>
                </v-btn>
                <v-menu :close-on-content-click="false" location="end" offset-y>
                    <template v-slot:activator="{ props }">
                        <v-btn icon="mdi-magnify" v-bind="props"></v-btn>
                    </template>
                    <v-toolbar
                        v-if="showMobileToolbar"
                        app
                        color="primary"
                        class="mobile-bottom-toolbar"
                        style="position: fixed; bottom: 0; left: 0; right: 0; z-index: 9999; border-radius: 20px 20px 0 0;"
                    >
                        <v-btn icon="mdi-magnify" @click="onClick"></v-btn>
                        <v-btn icon @click="toggleTheme">
                            <v-icon>
                                <svg-icon type="mdi"
                                          :path="$vuetify.theme.name === 'dark' ? iconPaths.sunny : iconPaths.night"/>
                            </v-icon>
                        </v-btn>
                        <v-btn icon @click="menuNotification = !menuNotification">
                            <v-badge color="error" content="2">
                                <v-icon>mdi-bell-outline</v-icon>
                            </v-badge>
                        </v-btn>
                        <v-btn icon @click="toggleDrawer">
                            <v-icon>mdi-menu</v-icon>
                        </v-btn>
                    </v-toolbar>
                </v-menu>
            </template>
        </template>
    </v-app-bar>
</template>

<style scoped>
.custom-app-bar {
    transition: margin 0.2s, border-radius 0.2s;
}

.mobile-bottom-toolbar {
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.08);
    border-top: 1px solid #eee;
}
</style>
