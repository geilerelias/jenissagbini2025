<script setup>
import { ref, onMounted } from "vue";
import { useDisplay } from "vuetify";
import axios from "axios";
import img11 from "@images/11.jpg";
import PageLayout from "@/Layouts/PageLayout.vue";

const { mobile, xs, md, mdAndDown, mdAndUp, lgAndUp, smAndUp, smAndDown } =
    useDisplay();

const tab = ref(null);
const img = ref(img11);
const items = [
    "Emprendimientos",
    "Software desarrollados",
    "Planes de negocio",
    "Tesis dirigidas",
    "Jurado de tesis",
];

const entrepreneurship = ref([]);
const softwares = ref([]);
const business = ref([]);
const thesis = ref([]);
const jurys = ref([]);

const loadEntrepreneurship = () => {
    entrepreneurship.value = [
        {
            id: "0",
            title: "HUMUS DEL CESAR S.A.S.",
            description: "Socia de una empresa privada tipo S.A.S...",
            state: "cerrado",
        },
        {
            id: "1",
            title: "PRACTIKA BOUTIQUE.",
            description: "Socia de empresa privada...",
            state: "cerrado",
        },
        {
            id: "2",
            title: "HOSTAL VALLEDUPAR.",
            description: "Socia de empresa privada...",
            state: "cerrado",
        },
    ];

    axios
        .get("/admin/entrepreneurship/all")
        .then((res) => {
            entrepreneurship.value = entrepreneurship.value.concat(res.data);
        })
        .catch((error) => console.log(error));
};

const loadSoftwares = () => {
    softwares.value = [
        {
            id: "0",
            title: "DISEÑO E IMPLEMENTACIÓN DE UN SOFTWARE DE GESTIÓN...",
            description: "Software para el sector salud...",
            state: "terminado",
            entity: "Fundación Universitaria San Martín",
            year: "2006",
        },
        {
            id: "1",
            title: "DISEÑO E IMPLEMENTACIÓN DE UN SOFTWARE PARA GANAVENTAS",
            description: "Implementación de una empresa digital regional...",
            state: "terminado",
            entity: "Universidad Jorge Tadeo Lozano de Bogotá",
            year: "2009",
        },
        {
            id: "1",
            title: "PÁGINA WEB DE ULTRALINE DE LA COSTA.",
            description:
                "Diseño e Implementación de la Página Institucional...",
            state: "terminado",
            entity: "Ultraline Electrónica. Barranquilla, Colombia.",
            year: "2012",
        },
    ];

    axios
        .get("/admin/software/all")
        .then((res) => {
            softwares.value = softwares.value.concat(res.data);
        })
        .catch((error) => console.log(error));
};

const loadBusiness = () => {
    business.value = [
        {
            id: "0",
            title: "PLAN DE NEGOCIO “CREACIÓN DE UNA COMERCIALIZADORA...”",
            description: "Plan de Negocios orientado a la creación...",
            state: "terminado",
            entity: "Universidad Jorge Tadeo Lozano de Bogotá",
            year: "2009",
        },
        {
            id: "1",
            title: "PLAN DE NEGOCIOS “ABONO ORGÁNICO Y REFORESTACIÓN”.",
            description: "Plan de negocios que consiste en la creación...",
            state: "terminado",
            entity: "Instituto Eurothecnology Empesas IEE. España.",
            year: "2011",
        },
    ];

    axios
        .get("/admin/business/all")
        .then((res) => {
            business.value = business.value.concat(res.data);
        })
        .catch((error) => console.log(error));
};

const loadThesis = () => {
    thesis.value = [
        {
            id: "0",
            title: "EMPRENDIMIENTO DIGITAL “SOMOS UNO”.",
            entity: "Universidad Popular del Cesar.",
            year: "2018",
            People: "Aldair Nuñez Florian.",
        },
        {
            id: "1",
            title: "LA REALIDAD AUMENTADA EN COMERCIALIZACIÓN...",
            entity: "Universidad Popular del Cesar.",
            year: "2018",
            People: "Yesid Linares y Sergio Luis Barragán",
        },
        {
            id: "2",
            title: "SISTEMA DE DIALOGO HUMANO-ROBOT BASADO EN CASOS.",
            entity: "Universidad Popular del Cesar.",
            year: "2017",
            People: "Efraim Alfonso Orozco y Karen Dayana Quiroga.",
        },
        // Resto omitido por brevedad...
    ];

    axios
        .get("/admin/thesis/all")
        .then((res) => {
            thesis.value = thesis.value.concat(res.data);
        })
        .catch((error) => console.log(error));
};

const loadJury = () => {
    jurys.value = [
        {
            id: 0,
            title: "APLICATIVO MOVIL PARA LA GESTION DE LOS PROCESOS...",
            year: "2017",
            entity: "Universidad Popular del Cesar.",
            people: "Kevin Luis Florez Lozada y Ricardo Andrés Sanchez Atuesta.",
        },
        {
            id: 1,
            title: "AUDITORÍA AL SISTEMA DE INFORMACIÓN EN AMEDI S.A.S.",
            year: "2016",
            entity: "Universidad Popular del Cesar.",
            people: "",
        },
        // Resto omitido por brevedad...
    ];

    axios
        .get("/admin/jury/all")
        .then((res) => {
            jurys.value = jurys.value.concat(res.data);
        })
        .catch((error) => console.log(error));
};

const initialize = () => {
    try {
        loadEntrepreneurship();
        loadSoftwares();
        loadBusiness();
        loadThesis();
        loadJury();
    } catch (e) {
        console.log(e);
    }
};

onMounted(() => {
    initialize();
});

function getEntries(index) {
    switch (index) {
        case 0:
            return entrepreneurship;
        case 1:
            return softwares;
        case 2:
            return business;
        case 3:
            return thesis;
        case 4:
            return jurys;
        default:
            return [];
    }
}
</script>

<template>
    <page-layout>
        <v-container fluid class="mt-12 mb-0">
            <v-row>
                <v-col
                    v-if="mdAndUp"
                    cols="12"
                    md="2"
                    class="shrink ma-0 pa-0"
                    style="position: fixed; left: 0"
                >
                    <v-card
                        class="mx-auto"
                        style="border-radius: 0px"
                        elevation="6"
                    >
                        <v-img :src="img11" height="100vh" />
                    </v-card>
                </v-col>

                <v-col
                    :md="mdAndUp ? 10 : 12"
                    class="text-end justify-end ma-0 pa-0 mb-0 offset-md-2"
                >
                    <v-container fluid class="ma-0">
                        <v-card color="basil" class="pa-2">
                            <v-card-title
                                class="text-center justify-center py-6"
                            >
                                <h4 class="font-weight-bold">
                                    PROYECTOS REALIZADOS
                                </h4>
                            </v-card-title>

                            <v-tabs
                                v-model="tab"
                                background-color="transparent"
                                color="basil"
                                show-arrows
                                grow
                            >
                                <v-tab
                                    v-for="(item, index) in items"
                                    :key="index"
                                    :value="index"
                                >
                                    {{ item }}
                                </v-tab>
                            </v-tabs>

                            <v-divider class="mt-4"></v-divider>

                            <v-window v-model="tab">
                                <v-window-item
                                    v-for="(item, index) in items"
                                    :key="index"
                                    :value="index"
                                >
                                    <v-list three-line>
                                        <v-subheader class="headline">
                                            {{ item }}
                                        </v-subheader>

                                        <div
                                            v-for="(entry, idx) in getEntries(
                                                index
                                            )"
                                            :key="idx"
                                        >
                                            <v-list-item>
                                                <template #prepend>
                                                    <v-avatar color="grey">
                                                        <span>{{
                                                            idx + 1
                                                        }}</span>
                                                    </v-avatar>
                                                </template>

                                                <v-list-item-title
                                                    class="title"
                                                >
                                                    {{ entry.title }}
                                                </v-list-item-title>

                                                <v-list-item-subtitle
                                                    class="grey--text"
                                                >
                                                    {{ entry.description }}
                                                </v-list-item-subtitle>

                                                <v-list-item-subtitle>
                                                    Estado actual:
                                                    {{ entry.state }}.
                                                </v-list-item-subtitle>

                                                <v-list-item-subtitle
                                                    v-if="entry.entity"
                                                >
                                                    Empresa patrocinadora:
                                                    {{ entry.entity }}.
                                                </v-list-item-subtitle>

                                                <v-list-item-subtitle
                                                    v-if="entry.year"
                                                >
                                                    {{ entry.year }}.
                                                </v-list-item-subtitle>

                                                <v-list-item-subtitle
                                                    v-if="entry.people"
                                                >
                                                    Personas orientadas:
                                                    {{ entry.people }}.
                                                </v-list-item-subtitle>
                                            </v-list-item>
                                            <v-divider></v-divider>
                                        </div>
                                    </v-list>
                                </v-window-item>
                            </v-window>
                        </v-card>
                    </v-container>
                </v-col>
            </v-row>
        </v-container>
    </page-layout>
</template>

<style>
.sidebar {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
}

.w-lg-half {
    width: 50% !important;
}
</style>
