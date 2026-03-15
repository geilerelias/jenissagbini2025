<script setup>
import { useDisplay } from "vuetify";
import { Link } from "@inertiajs/vue3";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";
import Logo from "@/Components/Logo.vue";
import SectionHeading from "@/Components/SectionHeading.vue";
import { SERVICES } from "@/data/pages/servicesData";

import lazyBg1 from "@images/bg/lazy-home.png";
import bgHome from "@images/bg/bg-home-2.png";
import bgAbout from "@images/bg/bg-about.jpg";
import img9688 from "@images/bg/DSC_9688.jpg";
import img9732 from "@images/bg/DSC_9732.jpg";

const { mobile } = useDisplay();
</script>

<template>
    <PageLayout title="Servicios">
        <Head title="Servicios" />

        <!-- Hero -->
        <v-img
            :lazy-src="lazyBg1"
            :src="bgHome"
            alt="Servicios"
            class="z-index2 mt-n16 hero-with-gradient"
            cover
            height="60vh"
            width="100%"
            gradient="to bottom, rgba(39,39,39,0.35), rgba(39,39,39,0.85)"
        >
            <v-container class="fill-height d-flex align-center">
                <v-row>
                    <v-col cols="12" class="text-center">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <h6
                                class="text-subtitle-2 font-weight-600 mb-2"
                                style="letter-spacing: 2px; color: rgba(255,255,255,0.9)"
                            >
                                LO QUE OFREZCO
                            </h6>
                            <h1
                                class="font-poppins text-h3 text-lg-h2 font-weight-bold text-white"
                                style="letter-spacing: -0.5px"
                            >
                                Servicios Profesionales
                            </h1>
                            <v-responsive class="mx-auto mt-4 rounded-lg" style="max-width: 120px">
                                <v-divider class="bg-white pb-1 rounded-lg" />
                            </v-responsive>
                            <p
                                class="text-body-1 mt-4 mx-auto"
                                style="max-width: 500px; color: rgba(255,255,255,0.9)"
                            >
                                Formación, consultoría y acompañamiento para impulsar tu crecimiento
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <!-- Sección Servicios - Estilo Valores de About -->
        <section class="bg-primary py-md-15 py-8">
            <v-container>
                <SectionHeading
                    icon="mdi-face-agent"
                    title-light="Servicios"
                    title-bold="Profesionales"
                    description="Soluciones adaptadas a tus necesidades de formación, consultoría y transformación."
                />
                <v-row class="justify-center">
                    <v-col
                        v-for="(service, index) in SERVICES"
                        :key="index"
                        class="d-flex"
                        cols="12"
                        sm="6"
                        md="4"
                    >
                        <v-card
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :data-aos-delay="200 + index * 80"
                            data-aos-duration="1000"
                            class="elevation-0 text-center py-md-8 py-6 px-md-6 px-4 fill-height rounded-md d-flex flex-column justify-between"
                            style="min-height: 220px; width: 100%"
                        >
                            <v-avatar color="secondary" size="64" class="mx-auto mb-4">
                                <v-icon :icon="service.icon" size="36" />
                            </v-avatar>
                            <h4 class="text-h6 text-dark font-weight-bold my-3 px-2">{{ service.title }}</h4>
                            <p class="text-muted mb-0">{{ service.description }}</p>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Enfoque personalizado - Estilo Misión/Visión -->
        <section class="bg-secondary py-md-12 py-8">
            <v-container>
                <v-row align="center" justify="space-between">
                    <v-col
                        :data-aos="mobile ? 'fade-up' : 'fade-right'"
                        class="v-col-md-5 v-col-12"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    >
                        <div class="d-flex align-center mb-5">
                            <span class="bg-success pa-2 rounded-circle mr-2" />
                            <h6 class="text-subtitle-1 text-white font-weight-bold">Enfoque</h6>
                        </div>
                        <h2 class="text-h4 text-white font-weight-bold mb-4">
                            Soluciones personalizadas para tu crecimiento
                        </h2>
                        <p class="text-body-1 text-white" style="opacity: 0.9">
                            Cada proyecto es único. Trabajo contigo para adaptar soluciones,
                            combinando experiencia en el sector privado, académico y emprendedor.
                        </p>
                    </v-col>
                    <v-col class="v-col-md-6 v-col-12" v-if="!mobile">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-left'"
                            class="d-flex justify-center"
                            data-aos-delay="400"
                            data-aos-duration="1000"
                        >
                            <v-img
                                :src="bgAbout"
                                alt="Jenis Sagbini"
                                class="rounded-lg"
                                cover
                                max-height="350"
                                max-width="100%"
                            />
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- CTA - Estilo Home -->
        <section class="container py-md-15 py-8">
            <v-container>
                <div class="bg-accent py-sm-15 py-7 px-lg-16 px-4 rounded-lg">
                    <div class="px-sm-6 px-3">
                        <v-row align="center">
                            <v-col class="v-col-md-6 v-col-12">
                                <h2 class="text-h4 mb-4 text-white">¿Hablamos sobre tu proyecto?</h2>
                                <p class="text-body-1 text-white" style="opacity: 0.9">
                                    Cuéntame tu idea, necesidad de formación o asesoría.
                                    Juntos podemos definir el camino más adecuado.
                                </p>
                                <Link :href="route('contact')" class="text-decoration-none">
                                    <v-btn
                                        color="white"
                                        variant="flat"
                                        size="large"
                                        class="mt-4 rounded-md"
                                        prepend-icon="mdi-email"
                                    >
                                        Contáctame
                                    </v-btn>
                                </Link>
                            </v-col>
                            <v-col class="v-col-md-6 v-col-12">
                                <v-row class="d-flex align-center justify-center">
                                    <v-col class="d-flex justify-center">
                                        <v-img :src="img9688" aspect-ratio="4/5" class="rounded-lg w-40" cover />
                                    </v-col>
                                    <v-col class="d-flex justify-center">
                                        <v-img :src="img9732" aspect-ratio="4/5" class="rounded-lg w-40" cover />
                                    </v-col>
                                    <v-col cols="12" class="d-flex justify-center align-center">
                                        <Logo color="grey" class="mr-2" />
                                        <span class="text-white font-weight-medium">Jenis Sagbini</span>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                    </div>
                </div>
            </v-container>
        </section>
    </PageLayout>
</template>

<style scoped>
.container {
    max-width: 1200px;
    margin: 0 auto;
}
</style>
