<script setup>
import {useDisplay} from "vuetify";
import {Head, Link} from "@inertiajs/vue3";
import logo from "@images/favicon/favicon-96x96.png";
import name from "@images/favicon/favicon-96x96.png";
import {onMounted} from "vue";
import AOS from "aos";
import lazyBg1 from "@images/bg/lazy-home.png";
import bg1 from "@images/bg/bg-home-2.png";
import bgAbout from "@images/bg/bg-about.jpg";

defineProps({
    banner: {
        type: Boolean,
        default: true,
    },
    title: String,
});

onMounted(() => {
    AOS.init();
});

const {smAndDown} = useDisplay();
</script>

<template>
    <v-app>
        <Head>
            <title>{{ title }}</title>
        </Head>

        <v-row class="pa-0 ma-0" no-gutters>
           <v-col
                v-if="banner"
                :order="smAndDown ? '2' : '1'"
                class="d-flex flex-column-reverse align-center justify-center my-0 py-0 align-center relative"
                cols="12"
                lg="7"
                md="6"
                style="position: sticky; left: 0; top: 0; height: 100vh; z-index: 2; overflow: hidden;"
            >
                <v-img
                    :lazy-src="lazyBg1"
                    :src="bg1"
                    alt="bg lg"
                    class="z-index2 h-50"
                    cover
                    gradient="to top right, rgba(39,39,39,0.85), rgba(158,158,158,0.7), rgba(33,33,33,0.85)"
                    width="100%"
                    style="height: 100vh;"
                >
                    <v-row
                        class="d-flex fill-height align-end justify-end"
                    >
                        <v-col>
                            <v-container>
                                <v-row class="d-flex justify-end align-end">
                                    <v-col cols="10">
                                        <h1
                                            class="text-h5 text-lg-h4 text-white mb-6"
                                        >
                                           ¡Haciendo a la gente exitosa en un mundo cambiante!
                                        </h1>
                                        <p
                                            class="text-body-1 text-white text-muted mb-8"
                                        >
                                            Mi propósito es acompañar, formar e inspirar a personas y organizaciones para
                                            que se transformen, se adapten e innoven estratégicamente, utilizando la
                                            tecnología, el conocimiento y la experiencia como motores del éxito
                                            sostenible.
                                        </p>

                                        <Link
                                            class="text-decoration-none"
                                            href="/about"
                                        >
                                            <v-btn
                                                class="mt-4 text-capitalize"
                                                color="white"
                                                dark
                                                depressed
                                                size="x-large"
                                                variant="outlined"
                                            >
                                                Saber más
                                            </v-btn>
                                        </Link>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                    </v-row>
                </v-img>
            </v-col>
            <v-col
                :order="smAndDown ? '1' : '2'"
                class="d-flex align-center bg-accent"
                cols="12"
                lg="5"
                md="6"
                style="overflow-y: auto; max-height: 100vh;"
            >
                <v-container class="py-0 my-0">
                    <slot></slot>
                </v-container>
            </v-col>
        </v-row>
    </v-app>
</template>

<style>
.v-field--variant-outlined .v-field__outline__notch {
    flex: none;
    position: relative;
    border-width: 0px;
}
</style>
