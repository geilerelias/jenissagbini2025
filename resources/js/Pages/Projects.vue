<script setup>
import { ref, computed, onMounted } from "vue";
import { useDisplay } from "vuetify";
import { Link } from "@inertiajs/vue3";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import Logo from "@/Components/Logo.vue";
import SectionHeading from "@/Components/SectionHeading.vue";
import {
    defaultEntrepreneurships,
    defaultSoftwares,
    defaultBusiness,
} from "@/data/pages/projectsData.js";

import lazyBg1 from "@images/bg/lazy-home.png";
import bgHome from "@images/bg/bg-home-2.png";
import img9688 from "@images/bg/DSC_9688.jpg";
import img9732 from "@images/bg/DSC_9732.jpg";

const { mobile } = useDisplay();

const activeTab = ref(0);
const accent = { accentColor: "#F5F5F5", accentDark: "#9E9E9E" };

const addAccent = (arr, icons) =>
    (arr || []).map((item, i) => ({
        ...accent,
        ...item,
        icon: icons[i % icons.length] || "mdi-briefcase",
    }));

const entrepreneurship = ref([...defaultEntrepreneurships]);
const softwares = ref([...defaultSoftwares]);
const business = ref([...defaultBusiness]);

const tabs = computed(() => [
    {
        label: "Emprendimientos",
        icon: "mdi-briefcase",
        count: entrepreneurship.value.length,
    },
    {
        label: "Software",
        icon: "mdi-code-braces",
        count: softwares.value.length,
    },
    { label: "Planes", icon: "mdi-chart-line", count: business.value.length },
]);

const getProjectsByTab = computed(() => {
    const all = [entrepreneurship.value, softwares.value, business.value];
    return all[activeTab.value] || [];
});

const getTabBgColor = (i) =>
    ["#F9F9F9", "#F7F7F7", "#F9F9F9", "#F7F7F7", "#F9F9F9"][i] ?? "#FAFAFA";
const getTabColor = (i) =>
    ["#9E9E9E", "#757575", "#9E9E9E", "#757575", "#212121"][i] ?? "#9E9E9E";

onMounted(async () => {
    try {
        const [ent, sw, bus] = await Promise.allSettled([
            axios.get("/admin/entrepreneurship/all"),
            axios.get("/admin/software/all"),
            axios.get("/admin/business/all"),
        ]);
        if (ent.status === "fulfilled" && ent.value?.data?.length)
            entrepreneurship.value = addAccent(
                ent.value.data,
                PROJECT_ICONS.entrepreneurship,
            );
        if (sw.status === "fulfilled" && sw.value?.data?.length)
            softwares.value = addAccent(sw.value.data, PROJECT_ICONS.software);
        if (bus.status === "fulfilled" && bus.value?.data?.length)
            business.value = addAccent(bus.value.data, PROJECT_ICONS.business);
    } catch (_) {}
});
</script>

<template>
    <PageLayout title="Proyectos">
        <Head title="Proyectos" />

        <!-- Hero -->
        <v-img
            :lazy-src="lazyBg1"
            :src="bgHome"
            alt="Proyectos"
            class="z-index2 mt-n16"
            cover
            height="60vh"
            width="100%"
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
                                style="
                                    letter-spacing: 2px;
                                    color: rgba(255, 255, 255, 0.9);
                                "
                            >
                                PORTAFOLIO
                            </h6>
                            <h1
                                class="font-poppins text-h3 text-lg-h2 font-weight-bold text-white"
                                style="letter-spacing: -0.5px"
                            >
                                Proyectos y Realizaciones
                            </h1>
                            <v-responsive
                                class="mx-auto mt-4 rounded-lg"
                                style="max-width: 120px"
                            >
                                <v-divider class="bg-white pb-1 rounded-lg" />
                            </v-responsive>
                            <p
                                class="text-body-1 mt-4 mx-auto"
                                style="
                                    max-width: 500px;
                                    color: rgba(255, 255, 255, 0.9);
                                "
                            >
                                Emprendimientos, desarrollos tecnológicos,
                                planes de negocio y dirección académica
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <!-- Sección principal - Estilo Noticias Destacadas -->
        <section class="bg-grey-lighten-3">
            <div class="container">
                <div class="pricing-header px-3 pt-md-5 pb-0 mx-auto">
                    <SectionHeading
                        icon="mdi-file-tree"
                        title-light="Portafolio"
                        title-bold="Profesional"
                        description="Emprendimientos, software, planes de negocio, tesis dirigidas y participación como jurado."
                    />
                </div>

                <!-- Tabs selector -->
                <v-container>
                    <v-row class="justify-center mb-6">
                        <v-col
                            v-for="(tab, index) in tabs"
                            :key="index"
                            class="v-col-md-2 v-col-sm-4 v-col-6"
                        >
                            <v-card
                                :data-aos="mobile ? 'fade-up' : 'zoom-in'"
                                :data-aos-delay="200 + index * 80"
                                data-aos-duration="1000"
                                class="elevation-0 text-center pa-4 fill-height d-flex flex-column justify-center rounded-md cursor-pointer"
                                :style="{
                                    cursor: 'pointer',
                                    backgroundColor: getTabBgColor(index),
                                    borderLeft: `4px solid ${getTabColor(index)}`,
                                }"
                                @click="activeTab = index"
                            >
                                <v-avatar
                                    :color="getTabColor(index)"
                                    size="44"
                                    class="mx-auto mb-3"
                                >
                                    <v-icon
                                        :icon="tab.icon"
                                        size="24"
                                        color="white"
                                    />
                                </v-avatar>
                                <h3
                                    class="text-h6 font-weight-600 text-dark mb-1"
                                >
                                    {{ tab.count }}
                                </h3>
                                <p class="text-caption text-muted mb-0">
                                    {{ tab.label }}
                                </p>
                            </v-card>
                        </v-col>
                    </v-row>

                    <!-- Cards de proyectos -->
                    <transition name="fade" mode="out-in">
                        <v-row :key="activeTab" class="mb-8">
                            <v-col
                                v-for="(project, index) in getProjectsByTab"
                                :key="`${activeTab}-${index}`"
                                cols="12"
                                sm="6"
                                md="4"
                            >
                                <v-card
                                    variant="elevated"
                                    class="elevation-10 fill-height rounded-md hover-card"
                                    :data-aos="mobile ? 'fade-up' : 'fade-up'"
                                    :data-aos-delay="200 + index * 80"
                                    data-aos-duration="1000"
                                >
                                    <div
                                        class="pa-4"
                                        :style="{
                                            backgroundColor:
                                                project.accentColor,
                                            borderLeft: `4px solid ${project.accentDark}`,
                                        }"
                                    >
                                        <div class="d-flex align-center ga-3">
                                            <v-avatar
                                                :color="project.accentDark"
                                                size="40"
                                            >
                                                <v-icon
                                                    :icon="
                                                        project.icon ||
                                                        'mdi-briefcase'
                                                    "
                                                    size="22"
                                                    color="white"
                                                />
                                            </v-avatar>
                                            <div>
                                                <h4
                                                    class="text-subtitle-2 font-weight-600 text-dark"
                                                >
                                                    {{ project.title }}
                                                </h4>
                                                <p
                                                    class="text-caption text-muted mb-0"
                                                >
                                                    {{
                                                        project.period ||
                                                        project.year
                                                    }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <v-card-text class="pa-4">
                                        <p
                                            class="text-body-2 text-muted mb-3"
                                            style="line-height: 1.5"
                                        >
                                            {{ project.description }}
                                        </p>
                                        <div
                                            v-if="project.state"
                                            class="d-flex align-center ga-2"
                                        >
                                            <v-icon size="16" color="primary"
                                                >mdi-check-circle</v-icon
                                            >
                                            <v-chip
                                                size="x-small"
                                                variant="tonal"
                                                >{{ project.state }}</v-chip
                                            >
                                        </div>
                                        <div
                                            v-if="project.entity"
                                            class="d-flex align-center ga-2 mt-2"
                                        >
                                            <v-icon size="16" class="text-muted"
                                                >mdi-office-building</v-icon
                                            >
                                            <span
                                                class="text-caption text-muted"
                                                >{{ project.entity }}</span
                                            >
                                        </div>
                                        <div
                                            v-if="project.people"
                                            class="d-flex align-center ga-2 mt-1"
                                        >
                                            <v-icon size="16" class="text-muted"
                                                >mdi-account-group</v-icon
                                            >
                                            <span
                                                class="text-caption text-muted"
                                                >{{ project.people }}</span
                                            >
                                        </div>
                                    </v-card-text>
                                    <div class="pa-4 pt-0 d-flex align-center">
                                        <Logo :size="36" color="grey" />
                                        <span
                                            class="text-caption text-muted ml-2"
                                            >Jenis Sagbini</span
                                        >
                                    </div>
                                </v-card>
                            </v-col>
                        </v-row>
                    </transition>

                    <!-- Botones de tab -->
                    <v-row class="justify-center mt-6">
                        <v-btn
                            v-for="(tab, index) in tabs"
                            :key="index"
                            :color="
                                activeTab === index
                                    ? getTabColor(index)
                                    : undefined
                            "
                            :variant="activeTab === index ? 'flat' : 'outlined'"
                            class="mx-1 mb-2 rounded-md"
                            :prepend-icon="tab.icon"
                            @click="activeTab = index"
                        >
                            {{ tab.label }}
                        </v-btn>
                    </v-row>
                </v-container>
            </div>
        </section>

        <!-- CTA - Estilo Home -->
        <section class="container">
            <v-container>
                <div
                    class="bg-accent py-sm-15 py-7 px-lg-16 px-4 mt-12 rounded-lg"
                >
                    <div class="px-sm-6 px-3">
                        <v-row align="center">
                            <v-col class="v-col-md-6 v-col-12">
                                <h2 class="text-h4 mb-4 text-white">
                                    ¿Quieres colaborar en un proyecto?
                                </h2>
                                <p
                                    class="text-body-1 text-white"
                                    style="opacity: 0.9"
                                >
                                    Estoy disponible para asesoría, dirección de
                                    proyectos y formación en emprendimiento
                                    digital.
                                </p>
                                <Link
                                    :href="route('contact')"
                                    class="text-decoration-none"
                                >
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
                                <v-row
                                    class="d-flex align-center justify-center"
                                >
                                    <v-col class="d-flex justify-center">
                                        <div class="hover-card">
                                            <v-img
                                                :src="img9688"
                                                aspect-ratio="4/5"
                                                class="zoom-in w-40 h-50 rounded-lg"
                                                cover
                                            />
                                        </div>
                                    </v-col>
                                    <v-col class="d-flex justify-center">
                                        <div class="hover-card">
                                            <v-img
                                                :src="img9732"
                                                aspect-ratio="4/5"
                                                class="zoom-in w-40 h-50 rounded-lg"
                                                cover
                                            />
                                        </div>
                                    </v-col>
                                    <v-col
                                        cols="12"
                                        class="d-flex justify-center align-center"
                                    >
                                        <a
                                            class="text-decoration-none d-flex align-center"
                                            href="mailto:contacto@jenissagbini.com"
                                        >
                                            <v-icon color="white" class="mr-2"
                                                >mdi-email</v-icon
                                            >
                                            <span
                                                class="text-white font-weight-medium"
                                                >contacto@jenissagbini.com</span
                                            >
                                        </a>
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

.hover-card:hover {
    transform: translateY(-4px);
    transition: transform 0.3s ease;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.25s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
