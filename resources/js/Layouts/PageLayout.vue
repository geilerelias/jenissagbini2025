<script setup>
import Header from "@/base/Header.vue";
import Footer from "@/base/Footer.vue";
import Drawer from "@/base/Drawer.vue";

import { Head } from "@inertiajs/vue3";
import { onBeforeUnmount, onMounted, ref } from "vue";
import AOS from "aos";

defineProps({
    title: String,
});

onMounted(() => {
    AOS.init();
});

const mostrarBoton = ref(false);

// Función para manejar el evento de scroll
const handleScroll = () => {
    mostrarBoton.value = window.scrollY > 100; // Ajusta el valor según tu preferencia
};
const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
};
// Agrega el evento de scroll cuando el componente está montado
onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

// Elimina el evento de scroll cuando el componente se va a desmontar
onBeforeUnmount(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <v-app>
        <Head :title="title" />
        <Header />
        <Drawer app />
        <v-main>
            <slot />
            <div
                class="position-fixed right-0 bottom-0 mb-10 mr-5"
                style="z-index: 1000"
            >
                <v-btn
                    v-if="mostrarBoton"
                    class="bg-primary rounded-circle"
                    fab
                    icon="mdi-chevron-up"
                    scroll-to="'#scrolltop'"
                    variant="elevated"
                    @click="scrollToTop"
                >
                </v-btn>
            </div>
        </v-main>
        <Footer style="z-index: 100"/>
    </v-app>
</template>
