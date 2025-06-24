<template>

    <page-layout class="bg-grey-lighten-4">
        <div class="projects-layout">
            <div class="drawer-fixed">
                <v-img
                    :src="bg"
                    height="100vh"
                    cover
                    class="mt"
                    alt="Projects Header Image"
                    style="max-width:100%;"
                />
            </div>
            <div class="main-content">

                <v-container class="py-8">
                    <v-row justify="center" class="mb-6">
                        <v-col cols="12" md="8">
                            <v-select
                                v-model="selectedCategory"
                                :items="categoryOptions"
                                label="Filtrar por categoría"
                                prepend-icon="mdi-filter-variant"
                                variant="outlined"
                                density="comfortable"
                            />
                        </v-col>
                    </v-row>

                    <v-card height="200">
                        <v-toolbar extended>
                            <v-toolbar-title text="Toolbar"></v-toolbar-title>

                            <template v-slot:extension>
                                <v-tabs>
                                    <v-tab text="Tab 1"></v-tab>
                                    <v-tab text="Tab 2"></v-tab>
                                    <v-tab text="Tab 3"></v-tab>
                                </v-tabs>
                            </template>
                        </v-toolbar>
                    </v-card>

                    <v-card>
                        <v-card-title class="text-center justify-center py-6">
                            <h1 class="font-weight-bold text-h2 text-basil">
                                BASiL
                            </h1>
                        </v-card-title>
                        <v-tabs
                            v-model="tab"
                            align-tabs="center"
                            color="deep-purple-accent-4"
                        >
                            <v-tab :value="1">Landscape</v-tab>
                            <v-tab :value="2">City</v-tab>
                            <v-tab :value="3">Abstract</v-tab>
                        </v-tabs>

                        <v-tabs-window v-model="tab">
                            <v-tabs-window-item
                                v-for="n in 3"
                                :key="n"
                                :value="n"
                            >
                                <v-container fluid>
                                    <v-row>
                                        <v-col
                                            v-for="i in 6"
                                            :key="i"
                                            cols="12"
                                            md="4"
                                        >
                                            <v-img
                                                :lazy-src="`https://picsum.photos/10/6?image=${i * n * 5 + 10}`"
                                                :src="`https://picsum.photos/500/300?image=${i * n * 5 + 10}`"
                                                height="205"
                                                cover
                                            ></v-img>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-tabs-window-item>
                        </v-tabs-window>
                    </v-card>

                    <v-expansion-panels multiple elevation="1">
                        <v-expansion-panel
                            v-for="group in displayedData"
                            :key="group.title"
                        >
                            <v-expansion-panel-title>
                                <span class="text-primary text-h6 font-weight-bold">{{ group.title }}</span>
                            </v-expansion-panel-title>

                            <v-expansion-panel-text>
                                <v-row>
                                    <v-col
                                        v-for="item in group.items"
                                        :key="item.name || item.title"
                                        cols="12"
                                        md="6"
                                    >
                                        <v-card class="mb-4" elevation="2" rounded="xl">
                                            <v-card-title class="text-subtitle-1 font-weight-bold pb-0">
                                                {{ item.name || item.title }}
                                            </v-card-title>

                                            <v-card-text>
                                                <v-list density="compact">
                                                    <v-list-item
                                                        v-for="(value, key) in filteredItemProps(item)"
                                                        :key="key"
                                                    >
                                                        <v-list-item-title class="text-body-2 font-weight-medium">
                                                            {{ beautifyKey(key) }}
                                                        </v-list-item-title>
                                                        <v-list-item-subtitle>
                                                            <span v-if="Array.isArray(value)">
                                                              <v-chip
                                                                  v-for="v in value"
                                                                  :key="v"
                                                                  class="ma-1"
                                                                  size="small"
                                                              >{{ v }}</v-chip>
                                                            </span>
                                                            <span v-else>{{ value }}</span>
                                                        </v-list-item-subtitle>
                                                    </v-list-item>
                                                </v-list>
                                            </v-card-text>
                                        </v-card>
                                    </v-col>
                                </v-row>
                            </v-expansion-panel-text>
                        </v-expansion-panel>
                    </v-expansion-panels>
                </v-container>
            </div>
        </div>
    </page-layout>

</template>

<script setup lang="ts">
import {computed, ref} from 'vue';
import PageLayout from "@/Layouts/PageLayout.vue";

import bg from '@images/profile/DSC_9625.JPG';

const tab = ref(null)

/**
 * Datos principales (textos en español, claves en inglés)
 */
const rawData = [
    {
        title: 'Emprendimientos',
        items: [
            {
                name: 'HUMUS DEL CESAR S.A.S.',
                activity:
                    'Producción y comercialización de abonos orgánicos; diseño y elaboración de jardines.',
                location: 'Valledupar',
                status: 'Cerrado',
                period: '2010 - 2017',
                clients: [
                    'Homecenter',
                    'Centro Comercial Guatapurí Plaza',
                    'Profesionales del sector agrícola'
                ]
            },
            {
                name: 'PRACTIKA BOUTIQUE',
                activity: 'Alquiler de ropa de gala para toda la familia.',
                location: 'Valledupar',
                status: 'Cerrado',
                period: '2009 - 2011'
            },
            {
                name: 'HOSTAL VALLEDUPAR',
                activity: 'Prestación del servicio hotelero y turístico.',
                location: 'Valledupar',
                status: 'Cerrado',
                period: '2008 - 2009'
            }
        ]
    },
    {
        title: 'Software desarrollado',
        items: [
            {
                name: 'Software de Gestión de Citas Médicas e Historias Clínicas',
                description:
                    'Sistema para administrar citas médicas e historias clínicas.',
                technologies: ['PHP', 'MySQL'],
                client: 'Consultorio Dr. Hernán Aponte Penso',
                status: 'Terminado',
                year: 2006,
                sponsoringEntity: 'Fundación Universitaria San Martín'
            },
            {
                name: 'Ganaventas',
                description:
                    'Software para comercialización de productos agrarios y servicios pecuarios.',
                status: 'Terminado',
                year: 2009,
                sponsoringEntity: 'Universidad Jorge Tadeo Lozano de Bogotá'
            },
            {
                name: 'Página Web Ultraline de la Costa',
                description:
                    'Diseño e implementación de página institucional de empresa de productos electrónicos.',
                status: 'Terminado',
                year: 2012,
                sponsoringEntity: 'Ultraline Electrónica',
                location: 'Barranquilla'
            }
        ]
    },
    {
        title: 'Planes de negocios desarrollados',
        items: [
            {
                name: 'Plan de Negocio Ganaventas',
                description: 'Plan de negocio para empresa digital del sector pecuario.',
                status: 'Terminado',
                year: 2009,
                sponsoringEntity: 'Universidad Jorge Tadeo Lozano de Bogotá'
            },
            {
                name: 'Plan de Negocio Abono Orgánico y Reforestación',
                description:
                    'Creación de HUMUS DEL CARIBE S.A.S. para producción de abono y proyectos de reforestación.',
                status: 'Terminado',
                year: 2011,
                sponsoringEntity: 'Instituto Eurothecnology Empresas IEE, España'
            }
        ]
    },
    {
        title: 'Tesis dirigidas',
        items: [
            {
                title: "Emprendimiento Digital 'Somos Uno'",
                institution: 'Universidad Popular del Cesar',
                year: 2018,
                advisedPeople: ['Aldair Nuñez Florian']
            },
            {
                title: 'Realidad Aumentada en Comercialización de Productos para el Hogar',
                institution: 'Universidad Popular del Cesar',
                year: 2018,
                advisedPeople: ['Yesid Linares', 'Sergio Luis Barragán']
            },
            {
                title: 'Sistema de Diálogo Humano-Robot Basado en Casos',
                institution: 'Universidad Popular del Cesar',
                year: 2017,
                advisedPeople: ['Efraim Alfonso Orozco', 'Karen Dayana Quiroga']
            },
            {
                title: 'Estilos de Aprendizaje en Contabilidad y Finanzas',
                institution: 'SENA Regional Cesar',
                year: 2017
            },
            {
                title: 'Usabilidad de Redes Sociales en MYPIMES de Valledupar',
                institution: 'SENA Regional Cesar',
                year: 2017
            },
            {
                title: 'Sistema Web y App para Hotel Serrano Plaza',
                institution: 'Universidad Popular del Cesar',
                year: 2017,
                advisedPeople: ['José Luis Arias Carranza', 'Carlos Julio Pitre Martínez']
            },
            {
                title: 'Sistema de Información para SERVIFLASH DEL VALLE',
                institution: 'Universidad Popular del Cesar',
                year: 2016,
                advisedPeople: ['Jefferson David Saurith Chacón', 'Fabio Andrés Rojas']
            },
            {
                title: 'Sistema de Control para Entrega de Estudiantes - Instituto La Paz',
                institution: 'Universidad Popular del Cesar',
                year: 2016,
                advisedPeople: ['Sandy Martínez Camacho', 'Esteffany Paola Romero Luna']
            },
            {
                title: 'Sistema de Información para RPB Distribuciones',
                institution: 'Universidad Popular del Cesar',
                year: 2016,
                advisedPeople: [
                    'Josías Elisad Ibarra Paternostro',
                    'José de la Cruz Pertuz Mena'
                ]
            }
        ]
    },
    {
        title: 'Participación como jurado de tesis',
        items: [
            {
                title: 'App Móvil para Gestión de Procesos Judiciales',
                institution: 'Universidad Popular del Cesar',
                year: 2017,
                advisedPeople: [
                    'Kevin Luis Florez Lozada',
                    'Ricardo Andrés Sanchez Atuesta'
                ]
            },
            {
                title: 'Auditoría al Sistema de Información - AMEDI S.A.S.',
                institution: 'Universidad Popular del Cesar',
                year: 2016
            },
            {
                title: 'Políticas de Seguridad Informática - Soluciones Humanas Ltda.',
                institution: 'Universidad Popular del Cesar',
                year: 2016,
                advisedPeople: [
                    'Alejandra Milena Laskar Echeverría',
                    'María del Rosario Vanegas Rivera'
                ]
            },
            {
                title: 'Sistema de Gestión de Nómina - EMCODAZZI E.S.P.',
                institution: 'Fundación Universitaria San Martín',
                year: 2014,
                advisedPeople: ['David Alfonso Panesso Sanchez']
            },
            {
                title: 'Software Interactivo Arhuaco-Español',
                institution: 'Fundación Universitaria San Martín',
                year: 2014,
                advisedPeople: ['Jesús David Romero Torregrosa']
            }
        ]
    }
];

/**
 * Estado y lógica de filtrado
 */
const selectedCategory = ref('Todas');
const categoryOptions = ['Todas', ...rawData.map(d => d.title)];

const displayedData = computed(() => {
    return selectedCategory.value === 'Todas'
        ? rawData
        : rawData.filter(group => group.title === selectedCategory.value);
});

/**
 * Helpers para la UI
 */
const filteredItemProps = (item: Record<string, unknown>) => {
    const omitted = ['name', 'title'];
    return Object.fromEntries(
        Object.entries(item).filter(([key]) => !omitted.includes(key))
    );
};

const beautifyKey = (key: string) => {
    return key
        .replace(/([A-Z])/g, ' $1')
        .replace(/^./, s => s.toUpperCase())
        .replace(/_/g, ' ');
};
</script>

<style scoped>
.projects-layout {
    display: flex;
    flex-direction: row;
}

.drawer-fixed {
    position: fixed;
    top: 0;
    left: 0;
    width: 340px; /* Ajusta el ancho según tu diseño */
    height: 100vh;
    background: #fff;
    z-index: 100;
    overflow-y: auto;
    box-shadow: 2px 0 8px rgba(0,0,0,0.04);
    padding: 8px 0;
}

.main-content {
    margin-left: 340px; /* Igual al ancho del drawer */
    width: calc(100% - 340px);
    /* Asegura que el contenido no quede debajo del drawer */
}

.v-list-item-title {
    width: 150px;
    flex-shrink: 0;
}
</style>
