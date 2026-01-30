<script setup>
import { ref, computed } from "vue";
import { useDisplay } from "vuetify";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";

const { mobile, mdAndUp } = useDisplay();

// Tab management
const activeTab = ref(0);

// Projects data with pastel colors
const entrepreneurship = ref([
    {
        id: "0",
        title: "HUMUS DEL CESAR S.A.S.",
        description:
            "Socia de una empresa privada tipo S.A.S. dedicada a la producción y comercialización de abonos orgánicos y a la prestación de servicios en diseño y elaboración de jardines.",
        state: "Cerrado",
        period: "2010-2017",
        icon: "mdi-leaf",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "1",
        title: "PRACTIKA BOUTIQUE",
        description:
            "Socia de empresa privada del Régimen Simplificado dedicada al alquiler de ropa de gala para toda la familia.",
        state: "Cerrado",
        period: "2009-2011",
        icon: "mdi-shopping",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "2",
        title: "HOSTAL VALLEDUPAR",
        description:
            "Socia de empresa privada del Régimen Simplificado dedicada a la prestación del servicio hotelero y/o turístico.",
        state: "Cerrado",
        period: "2008-2009",
        icon: "mdi-hotel",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
]);

const softwares = ref([
    {
        id: "0",
        title: "SOFTWARE DE GESTIÓN PARA CITAS MÉDICAS E HISTORIAS CLÍNICAS",
        description:
            "Software para el sector salud dirigido al Consultorio Particular de Neumología. Desarrollado en PHP y MySQL.",
        state: "Terminado",
        entity: "Fundación Universitaria San Martín",
        year: "2006",
        icon: "mdi-hospital-box",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "1",
        title: 'SOFTWARE PARA LA COMERCIALIZACIÓN DE PRODUCTOS AGRARIOS "GANAVENTAS"',
        description:
            "Implementación de una empresa digital regional en el sector agrario para comercialización y asesorías.",
        state: "Terminado",
        entity: "Universidad Jorge Tadeo Lozano",
        year: "2009",
        icon: "mdi-sprout",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "2",
        title: "PÁGINA WEB DE ULTRALINE DE LA COSTA",
        description:
            "Diseño e Implementación de la Página Institucional para comercialización de productos electrónicos.",
        state: "Terminado",
        entity: "Ultraline Electrónica",
        year: "2012",
        icon: "mdi-web",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
]);

const business = ref([
    {
        id: "0",
        title: "PLAN DE NEGOCIO - COMERCIALIZADORA DE SEMOVIENTES",
        description:
            "Plan de Negocios orientado a la creación de una empresa digital regional en el sector agrario.",
        state: "Terminado",
        entity: "Universidad Jorge Tadeo Lozano",
        year: "2009",
        icon: "mdi-chart-line",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "1",
        title: "PLAN DE NEGOCIOS - ABONO ORGÁNICO Y REFORESTACIÓN",
        description:
            "Plan de negocios para la creación de una empresa productora de abono orgánico.",
        state: "Terminado",
        entity: "Instituto Eurothecnology - España",
        year: "2011",
        icon: "mdi-tree",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
]);

const thesis = ref([
    {
        id: "0",
        title: 'EMPRENDIMIENTO DIGITAL "SOMOS UNO"',
        entity: "Universidad Popular del Cesar",
        year: "2018",
        people: "Aldair Nuñez Florian",
        icon: "mdi-graduation-cap",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
    {
        id: "1",
        title: "LA REALIDAD AUMENTADA EN COMERCIALIZACIÓN DE PRODUCTOS",
        entity: "Universidad Popular del Cesar",
        year: "2018",
        people: "Yesid Linares y Sergio Luis Barragán",
        icon: "mdi-vr-box",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
]);

const jurys = ref([
    {
        id: "0",
        title: "APLICATIVO MÓVIL PARA LA GESTIÓN DE PROCESOS JUDICIALES",
        entity: "Universidad Popular del Cesar",
        year: "2017",
        people: "Kevin Luis Florez Lozada y Ricardo Andrés Sanchez",
        icon: "mdi-gavel",
        accentColor: "#F5F5F5",
        accentDark: "#9E9E9E",
    },
]);

const tabs = [
    { label: "Emprendimientos", icon: "mdi-briefcase", count: 3 },
    { label: "Software", icon: "mdi-code-braces", count: 3 },
    { label: "Planes", icon: "mdi-chart-line", count: 2 },
    { label: "Tesis", icon: "mdi-school", count: 2 },
    { label: "Jurado", icon: "mdi-gavel", count: 1 },
];

const getProjectsByTab = computed(() => {
    const projects = [
        entrepreneurship.value,
        softwares.value,
        business.value,
        thesis.value,
        jurys.value,
    ];
    return projects[activeTab.value] || [];
});

const getTabBgColor = (index) => {
    const colors = ["#F9F9F9", "#F7F7F7", "#F9F9F9", "#F7F7F7", "#F9F9F9"];
    return colors[index] || "#FAFAFA";
};

const getTabColor = (index) => {
    const colors = ["#9E9E9E", "#757575", "#9E9E9E", "#757575", "#212121"];
    return colors[index] || "#9E9E9E";
};
</script>

<template>
    <page-layout>
        <Head title="Proyectos" />

        <!-- Header Section -->
        <section
            class="py-md-16 py-12 position-relative overflow-hidden"
            style="
                background: linear-gradient(135deg, #fafafa 0%, #f5f5f5 100%);
            "
        >
            <v-container>
                <v-row class="justify-center align-center">
                    <v-col class="v-col-md-8 v-col-12 text-center">
                        <div
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            class="mb-6"
                        >
                            <h6
                                class="text-subtitle-2 font-weight-600 text-grey-darken-2"
                                style="letter-spacing: 1.5px"
                            >
                                PORTAFOLIO PROFESIONAL
                            </h6>
                        </div>
                        <h1
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            class="text-h3 font-weight-300 text-grey-darken-4 mb-5"
                            style="letter-spacing: -0.5px"
                        >
                            Proyectos y Realizaciones
                        </h1>
                        <p
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="text-body-1 text-grey-darken-1 mx-auto"
                            style="max-width: 600px; line-height: 1.6"
                        >
                            Emprendimientos, desarrollos tecnológicos, planes de
                            negocio y dirección académica con impacto
                            profesional
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Statistics Section -->
        <section class="py-md-12 py-8" style="background-color: #fafafa">
            <v-container>
                <v-row class="justify-center">
                    <v-col
                        v-for="(tab, index) in tabs"
                        :key="index"
                        class="v-col-md-2 v-col-sm-4 v-col-6"
                    >
                        <v-card
                            variant="tonal"
                            elevation="12"
                            :data-aos="mobile ? 'fade-up' : 'zoom-in'"
                            :data-aos-delay="200 + index * 100"
                            data-aos-duration="1000"
                            class="elevation-0 text-center pa-6 fill-height d-flex flex-column justify-center rounded-xl"
                            @click="activeTab = index"
                            :style="{
                                cursor: 'pointer',
                                backgroundColor: getTabBgColor(index),
                                borderLeft: `3px solid ${getTabColor(index)}`,
                                transition:
                                    'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)',
                            }"
                        >
                            <v-avatar
                                :color="getTabColor(index)"
                                size="48"
                                class="mx-auto mb-4"
                                style="opacity: 0.9"
                            >
                                <v-icon
                                    :icon="tab.icon"
                                    size="28"
                                    color="white"
                                ></v-icon>
                            </v-avatar>
                            <h3
                                class="text-h6 font-weight-600 text-grey-darken-3 mb-2"
                            >
                                {{ tab.count }}
                            </h3>
                            <p
                                class="text-body-2 text-grey-darken-1 mb-0 font-weight-500"
                            >
                                {{ tab.label }}
                            </p>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Projects Tabs Section -->
        <section
            class="py-md-16 py-12 container"
            style="background-color: #ffffff"
        >
            <v-container>
                <v-row class="justify-center mb-md-12 mb-8">
                    <v-col class="v-col-md-10 v-col-12">
                        <div class="text-center mb-10">
                            <h2
                                class="text-h3 font-weight-300 text-grey-darken-4 mb-6"
                                style="letter-spacing: -0.5px"
                            >
                                {{ tabs[activeTab].label }}
                            </h2>
                            <v-divider
                                class="mx-auto"
                                style="
                                    max-width: 80px;
                                    background-color: #e0e0e0;
                                    border: none;
                                    height: 2px;
                                "
                            ></v-divider>
                        </div>

                        <!-- Tab content with smooth transition -->
                        <transition name="fade" mode="out-in">
                            <v-row :key="activeTab" class="justify-center">
                                <v-col
                                    v-for="(project, index) in getProjectsByTab"
                                    :key="`${activeTab}-${index}`"
                                    class="v-col-md-6 v-col-12 mb-6"
                                >
                                    <v-card
                                        :data-aos="
                                            mobile ? 'fade-up' : 'fade-up'
                                        "
                                        :data-aos-delay="200 + index * 100"
                                        data-aos-duration="1000"
                                        class="elevation-0 fill-height rounded-xl overflow-hidden"
                                        style="
                                            transition: all 0.4s
                                                cubic-bezier(0.4, 0, 0.2, 1);
                                            border: 1px solid #efefef;
                                        "
                                    >
                                        <!-- Color bar header -->
                                        <div
                                            :style="{
                                                backgroundColor:
                                                    project.accentColor,
                                                borderLeft: `4px solid ${project.accentDark}`,
                                            }"
                                            class="pa-5"
                                        >
                                            <div
                                                class="d-flex align-center ga-3 mb-3"
                                            >
                                                <v-avatar
                                                    :color="project.accentColor"
                                                    size="40"
                                                    style="
                                                        border: 2px solid
                                                            #ffffff;
                                                    "
                                                >
                                                    <v-icon
                                                        :icon="
                                                            project.icon ||
                                                            'mdi-check'
                                                        "
                                                        size="24"
                                                        :color="
                                                            project.accentDark
                                                        "
                                                    ></v-icon>
                                                </v-avatar>
                                                <div>
                                                    <h4
                                                        class="text-subtitle-2 font-weight-600 text-grey-darken-3"
                                                    >
                                                        {{
                                                            tabs[activeTab]
                                                                .label
                                                        }}
                                                    </h4>
                                                    <p
                                                        class="text-caption mb-0 text-grey-darken-1"
                                                    >
                                                        {{
                                                            project.period ||
                                                            project.year
                                                        }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card content -->
                                        <v-card-text class="pa-6">
                                            <h3
                                                class="text-h6 font-weight-600 text-grey-darken-3 mb-4"
                                                style="line-height: 1.4"
                                            >
                                                {{ project.title }}
                                            </h3>

                                            <p
                                                class="text-body-2 text-grey-darken-1 mb-5"
                                                style="
                                                    line-height: 1.6;
                                                    color: #757575;
                                                "
                                            >
                                                {{ project.description }}
                                            </p>

                                            <v-divider
                                                class="my-4"
                                                style="border-color: #f0f0f0"
                                            ></v-divider>

                                            <!-- Additional Info -->
                                            <div
                                                class="text-caption text-grey-darken-1"
                                                style="color: #9e9e9e"
                                            >
                                                <div
                                                    v-if="project.state"
                                                    class="d-flex align-center ga-2 mb-3"
                                                >
                                                    <v-icon
                                                        size="16"
                                                        :color="
                                                            project.state ===
                                                            'Terminado'
                                                                ? '#212121'
                                                                : '#9E9E9E'
                                                        "
                                                        >mdi-check-circle</v-icon
                                                    >
                                                    <span
                                                        class="font-weight-500"
                                                        >Estado:</span
                                                    >
                                                    <v-chip
                                                        size="x-small"
                                                        :color="
                                                            project.state ===
                                                            'Terminado'
                                                                ? '#F5F5F5'
                                                                : '#F5F5F5'
                                                        "
                                                        :text-color="
                                                            project.state ===
                                                            'Terminado'
                                                                ? '#424242'
                                                                : '#9E9E9E'
                                                        "
                                                        style="font-weight: 500"
                                                    >
                                                        {{ project.state }}
                                                    </v-chip>
                                                </div>
                                                <div
                                                    v-if="project.entity"
                                                    class="d-flex align-center ga-2 mb-3"
                                                >
                                                    <v-icon
                                                        size="16"
                                                        color="#9E9E9E"
                                                        >mdi-office-building</v-icon
                                                    >
                                                    <span
                                                        class="font-weight-500"
                                                        >{{
                                                            project.entity
                                                        }}</span
                                                    >
                                                </div>
                                                <div
                                                    v-if="project.people"
                                                    class="d-flex align-center ga-2"
                                                >
                                                    <v-icon
                                                        size="16"
                                                        color="#9E9E9E"
                                                        >mdi-account-group</v-icon
                                                    >
                                                    <span
                                                        class="font-weight-500"
                                                        >{{
                                                            project.people
                                                        }}</span
                                                    >
                                                </div>
                                            </div>
                                        </v-card-text>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </transition>
                    </v-col>
                </v-row>

                <!-- Tab Navigation Buttons -->
                <v-row class="justify-center mt-md-14 mt-10">
                    <v-col
                        class="v-col-12 d-flex justify-center flex-wrap ga-3"
                    >
                        <v-btn
                            v-for="(tab, index) in tabs"
                            :key="index"
                            :color="
                                activeTab === index
                                    ? getTabColor(index)
                                    : '#E0E0E0'
                            "
                            :text="activeTab !== index"
                            :variant="activeTab === index ? 'flat' : 'outlined'"
                            @click="activeTab = index"
                            class="rounded-xl"
                            :prepend-icon="tab.icon"
                            style="font-weight: 500; letter-spacing: 0.3px"
                        >
                            {{ tab.label }}
                        </v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Summary Section -->
        <section class="py-md-16 py-12" style="background-color: #fafafa">
            <v-container>
                <v-row class="justify-center">
                    <v-col class="v-col-md-8 v-col-12 text-center">
                        <div
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            class="mb-8"
                        >
                            <v-icon size="48" color="#9E9E9E" class="mb-4"
                                >mdi-star-circle-outline</v-icon
                            >
                            <h2
                                class="text-h4 font-weight-300 text-grey-darken-4 mb-4"
                                style="letter-spacing: -0.5px"
                            >
                                Proyectos con Impacto
                            </h2>
                            <p
                                class="text-body-1 text-grey-darken-1"
                                style="line-height: 1.6"
                            >
                                Con más de 20 años de experiencia en
                                emprendimiento, tecnología y educación, he
                                desarrollado proyectos innovadores que combinan
                                visión empresarial con responsabilidad social.
                            </p>
                        </div>

                        <v-row class="justify-center mt-8">
                            <v-col class="v-col-md-3 v-col-sm-6 v-col-6">
                                <div
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                                    data-aos-duration="1000"
                                >
                                    <h3
                                        class="text-h4 font-weight-300 text-grey-darken-4"
                                    >
                                        {{ entrepreneurship.length }}
                                    </h3>
                                    <p class="text-body-1 text-grey-darken-1">
                                        Emprendimientos
                                    </p>
                                </div>
                            </v-col>
                            <v-col class="v-col-md-3 v-col-sm-6 v-col-6">
                                <div
                                    data-aos="fade-up"
                                    data-aos-delay="300"
                                    data-aos-duration="1000"
                                >
                                    <h3
                                        class="text-h4 font-weight-300 text-grey-darken-4"
                                    >
                                        {{ softwares.length }}
                                    </h3>
                                    <p class="text-body-1 text-grey-darken-1">
                                        Desarrollos
                                    </p>
                                </div>
                            </v-col>
                            <v-col class="v-col-md-3 v-col-sm-6 v-col-6">
                                <div
                                    data-aos="fade-up"
                                    data-aos-delay="400"
                                    data-aos-duration="1000"
                                >
                                    <h3
                                        class="text-h4 font-weight-300 text-grey-darken-4"
                                    >
                                        {{ business.length + thesis.length }}
                                    </h3>
                                    <p class="text-body-1 text-grey-darken-1">
                                        Planes y Tesis
                                    </p>
                                </div>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Call to Action Section -->
        <section class="py-md-16 py-12">
            <v-container>
                <v-row class="justify-center">
                    <v-col class="v-col-md-8 v-col-12 text-center">
                        <div data-aos="zoom-in" data-aos-duration="1000">
                            <h2
                                class="text-h4 font-weight-300 text-grey-darken-4 mb-6"
                                style="letter-spacing: -0.5px"
                            >
                                ¿Quieres colaborar en un proyecto?
                            </h2>
                            <p
                                class="text-body-1 text-grey-darken-1 mb-8"
                                style="line-height: 1.6"
                            >
                                Estoy disponible para asesoría, dirección de
                                proyectos y formación en emprendimiento digital.
                            </p>
                            <v-btn
                                color="#212121"
                                size="large"
                                class="rounded-xl white--text"
                                prepend-icon="mdi-email"
                                style="font-weight: 500; letter-spacing: 0.3px"
                            >
                                Contáctame
                            </v-btn>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </section>
    </page-layout>
</template>

<style scoped>
.position-relative {
    position: relative;
}

.overflow-hidden {
    overflow: hidden;
}

.ga-2 {
    gap: 8px;
}

.ga-3 {
    gap: 12px;
}

.rounded-xl {
    border-radius: 12px;
}

.text-grey-darken-1 {
    color: #616161;
}

.text-grey-darken-3 {
    color: #212121;
}

.text-grey-darken-4 {
    color: #1a1a1a;
}

/* Fade transition */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Hover effects */
:deep(.v-card:hover) {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08) !important;
}

@media (max-width: 960px) {
    .text-h3 {
        font-size: 1.75rem !important;
    }

    .text-h4 {
        font-size: 1.5rem !important;
    }
}
</style>
