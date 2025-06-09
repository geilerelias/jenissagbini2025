<script setup>
import {useDrawerStore} from "../stores/drawer";
import {useLinksStore} from "../stores/links";
import {useDisplay} from "vuetify";
import Logo from "./../Components/Logo.vue";
import {Link} from "@inertiajs/vue3";
import {computed, onMounted, onUnmounted, ref} from "vue";
import SettingsDropdown from "@/Components/SettingsDropdown.vue";
/*import SettingsDropdown from "../Components/SettingsDropdown.vue";*/

const drawerStore = useDrawerStore();
const linksStore = useLinksStore();

const {
    xsOnly,
    xs,
    mobile,
    md,
    mdAndDown,
    mdAndUp,
    lgAndUp,
    smAndUp,
    smAndDown,
} = useDisplay();
// URL actual

const isHomePage = computed(() => route().current("home"));

const isTransparent = ref(true);

const fav = ref(true);
const menu = ref(false);
const message = ref(false);
const hints = ref(true);

// Función para manejar el evento de scroll
const handleScroll = () => {
    isTransparent.value = window.scrollY < 320;
};
const isCurrentRoute = (item) => {
    return route().current(item);
};

const hoveredIndex = ref(null);

const isActive = (item) => route().current(item);

// Registra el evento de scroll al montar el componente
onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

// Elimina el evento de scroll al desmontar el componente para evitar pérdidas de memoria
onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});

// const changeDrawer = (value) => {
//     drawerStore.change(!value);
// };

function changeDrawer() {
    drawerStore.change(); // Llama al método change del store
}

const back = () => {
    window.history.back();
};

const showText = ref({});
</script>
<template>
    <v-app-bar
        :class="{
            'bg-transparent text-white': isTransparent && isHomePage,
            'bg-primary': !isTransparent || !isHomePage,
        }"
        class="px-sm-12 px-auto container"
        scroll-behavior="elevate"
    >
        <div class="container d-flex justify-center align-center">
            <v-btn
                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                data-aos-delay="200"
                data-aos-duration="1000"
                :class="{
                    'text-black': isTransparent && isHomePage,
                }"
                class="d-md-none d-flex"
                icon
                tile
                @click="changeDrawer(drawerStore.drawer)"
            >
                <v-icon dark icon="mdi-menu" size="30"></v-icon>
            </v-btn>
            <transition mode="out-in" name="custom-transition">
                <div
                    key="logo-section"
                    class="d-flex align-center"
                    style="max-width: 170px"
                >
                    <logo
                        class="mr-3"
                        v-if="!(isTransparent && isHomePage)"
                        :size="45"
                        :data-aos="mobile ? 'fade-up' : 'fade-right'"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    ></logo>
                    <div
                        style="font-size: x-large"
                        :class="{
                            'text-subtitle-1': mobile,
                            'text-3xl': !mobile,
                            'text-black': isTransparent && isHomePage,
                            'text-white': !(isTransparent && isHomePage),
                        }"
                        v-if="!(isTransparent && isHomePage) || smAndDown"
                        :data-aos="mobile ? 'fade-up' : 'fade-left'"
                        alt="logo"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        class="font-poppins text-2xl text-no-wrap"
                    >
                        Jenis Sagbini
                    </div>
                </div>
            </transition>

            <v-spacer></v-spacer>

            <template v-if="mdAndUp">
                <Link
                    v-for="(item, index) in linksStore.links"
                    :key="item.id"
                    :href="route(item.route)"
                    class="text-decoration-none d-md-flex d-none py-0 menu text-capitalize justify-center"
                    @mouseover="hoveredIndex = index"
                    @mouseleave="hoveredIndex = null"
                >
                    <div>
                        <v-btn
                            tile
                            :class="[
                                'px-2 text-capitalize menu-zoom',
                                {
                                    'active text-black font-weight-black menu-zoom-active':
                                        isTransparent &&
                                        isHomePage &&
                                        isCurrentRoute(item.route),
                                    'active text-white menu-zoom-active':
                                        isCurrentRoute(item.route) &&
                                        !isTransparent,
                                    'text-secondary':
                                        !isCurrentRoute(item.route) &&
                                        (!isTransparent || !isHomePage),
                                    'text-black': isTransparent && isHomePage,
                                },
                            ]"
                            :icon="item.fab"
                            variant="text"
                        >
                            <v-tooltip location="top" :text="item.title">
                                <template v-slot:activator="{ props }">
                                    <span
                                        v-bind="props"
                                        v-if="
                                            (md &&
                                                !isCurrentRoute(item.route)) ||
                                            item.fab
                                        "
                                    >
                                        <v-icon :icon="item.icon"/>
                                    </span>
                                    <span
                                        v-else
                                        class="d-flex align-center justify-space-between"
                                    >
                                        <v-icon
                                            v-if="md"
                                            :icon="item.icon"
                                            class="mr-1"
                                        />
                                        {{ item.title }}
                                    </span>
                                </template>
                            </v-tooltip>
                        </v-btn>

                        <!-- ✅ Animación suave del divider desde abajo -->
                        <transition name="fade-up">
                            <v-responsive
                                v-if="
                                    isCurrentRoute(item.route) ||
                                    hoveredIndex === index
                                "
                                style="width: 100%; max-width: 160px"
                                :class="{
                                    'bg-gradient-black':
                                        isTransparent && isHomePage,
                                    'bg-gradient-white': !(
                                        isTransparent && isHomePage
                                    ),
                                }"
                                class="rounded-lg mx-auto"
                            >
                                <v-divider class="pb-0.5 rounded-lg" light/>
                            </v-responsive>
                        </transition>
                    </div>
                </Link>
            </template>

            <div v-else>
                <v-btn
                    :data-aos="mobile ? 'fade-up' : 'fade-right'"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                    class="text-capitalize font-weight-bold"
                    variant="text"
                    :color="isTransparent && isHomePage ? 'black' : 'white'"
                >
                    {{
                        linksStore.links.find((item) =>
                            isCurrentRoute(item.route)
                        )?.title || ""
                    }}
                </v-btn>
            </div>
            <settings-dropdown
                color="white" :size="40" :transparent="isTransparent"
                :homepage="isHomePage">
            </settings-dropdown>
        </div>
    </v-app-bar>
</template>

<style scoped>
.bg-gradient {
    background: linear-gradient(to bottom, #4a4a4a, #fff1f1);
}

.bg-gradient-black {
    background: linear-gradient(to right, #000000, #1a1a1a, #565656);
}

.bg-gradient-white {
    background: linear-gradient(to right, #818181, #a9a9a9, #d4d4d4);
}

.menu-zoom {
    transition: transform 0.3s ease, color 0.3s ease, font-weight 0.3s ease;
}

.menu-zoom:hover,
.menu-zoom-active {
    transform: scale(1.05);
}

/* Transición personalizada para el divider */
.fade-up-enter-active,
.fade-up-leave-active {
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.fade-up-enter-from,
.fade-up-leave-to {
    opacity: 0;
    transform: translateY(10px);
}

.fade-up-enter-to,
.fade-up-leave-from {
    opacity: 1;
    transform: translateY(0);
}

.nav-link {
    position: relative;
    padding: 2px 5px;
    border-radius: 5px 5px 0 0;
    transition: color 0.3s ease;
    display: inline-block;
}

.nav-link::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 100%;
    background: linear-gradient(to right, #4a4a4a, #fff1f1);
    transition: opacity 0.4s ease, transform 0.4s ease;
    transform-origin: left;
    border-radius: 2px;
    transform: scaleX(0);
    opacity: 0;
}

/* Condición especial: home + bg-transparent */
.nav-link.home.bg-transparent::after {
    background: linear-gradient(to right, black, #4a4a4a);
}

.gradient-border::after {
    transform: scaleX(1);
    opacity: 1;
}

/* Puedes colocarlo en tu archivo de estilos globales o en el <style> del componente */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
    transform: translateY(5px);
}

.fade-enter-to,
.fade-leave-from {
    opacity: 1;
    transform: translateY(0);
}

custom-transition-enter-active,
.custom-transition-leave-active {
    transition: opacity 0.5s, transform 0.5s;
}

.custom-transition-enter,
.custom-transition-leave-to {
    opacity: 0;
    transform: scale(0);
}

.custom-transition-enter-to,
.custom-transition-leave {
    opacity: 1;
    transform: scale(1);
}

.custom-btn {
}

.custom-btn span {
    white-space: nowrap;
    transition: opacity 0.3s ease-in-out;
}

.custom-btn:hover span {
    opacity: 1;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
