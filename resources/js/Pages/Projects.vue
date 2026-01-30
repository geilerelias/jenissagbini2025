<template>
    <v-app>
        <v-main>
            <v-container fluid class="pa-0">
                <v-row no-gutters>
                    <!-- Sidebar fijo -->
                    <v-col cols="12" lg="4" xl="3">
                        <v-card
                            class="sidebar-fixed elevation-4"
                            height="100vh"
                            style="overflow-y: auto;"
                        >
                            <div class="pa-6 d-flex flex-column" style="height: 100%;">
                                <!-- Imagen de perfil -->
                                <div class="mb-6">
                                    <v-img
                                        src="/placeholder.svg?height=200&width=320"
                                        alt="Perfil profesional"
                                        height="192"
                                        class="rounded-lg elevation-3"
                                        cover
                                    />
                                </div>

                                <!-- Información del perfil -->
                                <div class="mb-6">
                                    <h1 class="text-h5 font-weight-bold text-grey-darken-4 mb-3">
                                        Portafolio Profesional
                                    </h1>
                                    <p class="text-body-2 text-grey-darken-1 mb-4">
                                        Experiencia en emprendimiento, desarrollo de software, planes de negocios y dirección académica.
                                    </p>
                                </div>

                                <!-- Estadísticas y gráficas -->
                                <div class="flex-grow-1 d-flex flex-column">
                                    <v-divider class="mb-4" />

                                    <!-- Resumen general -->
                                    <div class="mb-6">
                                        <h3 class="text-h6 font-weight-bold text-grey-darken-3 mb-4">
                                            Resumen General
                                        </h3>
                                        <v-row dense>
                                            <v-col cols="6">
                                                <v-card class="pa-3 text-center bg-primary-lighten-5" flat>
                                                    <div class="text-h4 font-weight-bold text-primary">
                                                        {{ portfolioData.length }}
                                                    </div>
                                                    <div class="text-caption text-primary-darken-1">Total Proyectos</div>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="6">
                                                <v-card class="pa-3 text-center bg-success-lighten-5" flat>
                                                    <div class="text-h4 font-weight-bold text-success">
                                                        {{ completedProjects }}
                                                    </div>
                                                    <div class="text-caption text-success-darken-1">Completados</div>
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                    </div>

                                    <!-- Gráfico de distribución por categorías -->
                                    <div class="mb-6">
                                        <h4 class="text-subtitle-1 font-weight-bold text-grey-darken-3 mb-3">
                                            Distribución por Categorías
                                        </h4>
                                        <v-card class="pa-4" flat>
                                            <div style="height: 200px; position: relative;">
                                                <DoughnutChart
                                                    :chart-data="categoryChartData"
                                                    :chart-options="categoryChartOptions"
                                                />
                                            </div>
                                        </v-card>
                                    </div>

                                    <!-- Gráfico de proyectos por año -->
                                    <div class="mb-6">
                                        <h4 class="text-subtitle-1 font-weight-bold text-grey-darken-3 mb-3">
                                            Proyectos por Año
                                        </h4>
                                        <v-card class="pa-4" flat>
                                            <div style="height: 180px; position: relative;">
                                                <BarChart
                                                    :chart-data="yearChartData"
                                                    :chart-options="yearChartOptions"
                                                />
                                            </div>
                                        </v-card>
                                    </div>

                                    <!-- Gráfico de estados -->
                                    <div class="mb-6">
                                        <h4 class="text-subtitle-1 font-weight-bold text-grey-darken-3 mb-3">
                                            Estado de Proyectos
                                        </h4>
                                        <v-card class="pa-4" flat>
                                            <div style="height: 150px; position: relative;">
                                                <BarChart
                                                    :chart-data="statusChartData"
                                                    :chart-options="statusChartOptions"
                                                />
                                            </div>
                                        </v-card>
                                    </div>

                                    <!-- Gráfico de línea temporal -->
                                    <div class="mb-6">
                                        <h4 class="text-subtitle-1 font-weight-bold text-grey-darken-3 mb-3">
                                            Evolución Temporal
                                        </h4>
                                        <v-card class="pa-4" flat>
                                            <div style="height: 160px; position: relative;">
                                                <LineChart
                                                    :chart-data="timelineChartData"
                                                    :chart-options="timelineChartOptions"
                                                />
                                            </div>
                                        </v-card>
                                    </div>

                                    <!-- Timeline de actividad -->
                                    <div class="mb-4">
                                        <h4 class="text-subtitle-1 font-weight-bold text-grey-darken-3 mb-3">
                                            Resumen por Períodos
                                        </h4>
                                        <v-card class="pa-4" flat>
                                            <div class="timeline-container">
                                                <div
                                                    v-for="period in timelinePeriods"
                                                    :key="period.period"
                                                    class="timeline-item mb-3"
                                                >
                                                    <div class="d-flex align-center">
                                                        <v-avatar
                                                            :color="period.color"
                                                            size="24"
                                                            class="mr-3"
                                                        >
                              <span class="text-caption text-white font-weight-bold">
                                {{ period.count }}
                              </span>
                                                        </v-avatar>
                                                        <div>
                                                            <div class="text-body-2 font-weight-medium">
                                                                {{ period.period }}
                                                            </div>
                                                            <div class="text-caption text-grey-darken-1">
                                                                {{ period.count }} proyecto{{ period.count !== 1 ? 's' : '' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </v-card>
                                    </div>
                                </div>
                            </div>
                        </v-card>
                    </v-col>

                    <!-- Contenido principal -->
                    <v-col cols="12" lg="8" xl="9">
                        <div class="pa-8">
                            <!-- Tabs -->
                            <v-tabs
                                v-model="activeTab"
                                class="mb-8"
                                color="primary"
                                slider-color="primary"
                                show-arrows
                            >
                                <v-tab value="all">Todos</v-tab>
                                <v-tab value="emprendimientos">Emprendimientos</v-tab>
                                <v-tab value="software">Software</v-tab>
                                <v-tab value="planes">Planes</v-tab>
                                <v-tab value="tesis">Tesis</v-tab>
                                <v-tab value="jurado">Jurado</v-tab>
                            </v-tabs>

                            <!-- Contenido de tabs -->
                            <v-window v-model="activeTab">
                                <!-- Tab "Todos" -->
                                <v-window-item value="all">
                                    <!-- Filtros y búsqueda -->
                                    <v-card class="mb-8 elevation-2">
                                        <v-card-text>
                                            <v-row align="center">
                                                <v-col cols="12" md="8">
                                                    <v-text-field
                                                        v-model="searchQuery"
                                                        prepend-inner-icon="mdi-magnify"
                                                        label="Buscar proyectos..."
                                                        variant="outlined"
                                                        density="compact"
                                                        hide-details
                                                    />
                                                </v-col>
                                                <v-col cols="12" md="4">
                                                    <v-select
                                                        v-model="selectedCategory"
                                                        :items="categoryOptions"
                                                        label="Filtrar por categoría"
                                                        variant="outlined"
                                                        density="compact"
                                                        hide-details
                                                    />
                                                </v-col>
                                            </v-row>
                                            <div v-if="filteredProjects.length > 0" class="mt-4">
                                                <v-chip size="small" color="primary" variant="outlined">
                                                    Mostrando {{ filteredProjects.length }} de {{ portfolioData.length }} proyectos
                                                </v-chip>
                                            </div>
                                        </v-card-text>
                                    </v-card>

                                    <!-- Grid de proyectos -->
                                    <v-row>
                                        <v-col
                                            v-for="project in filteredProjects"
                                            :key="project.id"
                                            cols="12"
                                            md="6"
                                            xl="4"
                                        >
                                            <v-card
                                                class="h-100 cursor-pointer elevation-2"
                                                hover
                                                @click="openDialog(project)"
                                            >
                                                <v-card-title class="pb-2">
                                                    <div class="d-flex justify-space-between align-start mb-2">
                                                        <v-chip
                                                            :color="getCategoryColor(project.category)"
                                                            size="small"
                                                            variant="flat"
                                                        >
                                                            {{ categoryLabels[project.category] }}
                                                        </v-chip>
                                                        <v-chip
                                                            :color="getStatusColor(project.status)"
                                                            size="small"
                                                            variant="outlined"
                                                        >
                                                            {{ project.status }}
                                                        </v-chip>
                                                    </div>
                                                    <div class="text-h6 line-clamp-2">{{ project.title }}</div>
                                                </v-card-title>
                                                <v-card-text>
                                                    <p class="text-body-2 text-grey-darken-1 mb-4 line-clamp-3">
                                                        {{ project.shortDescription }}
                                                    </p>
                                                    <div class="d-flex flex-column ga-2">
                                                        <div class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-calendar</v-icon>
                                                            {{ project.year }}
                                                        </div>
                                                        <div v-if="project.location" class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-map-marker</v-icon>
                                                            {{ project.location }}
                                                        </div>
                                                        <div v-if="project.entity" class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-office-building</v-icon>
                                                            <span class="line-clamp-1">{{ project.entity }}</span>
                                                        </div>
                                                    </div>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>

                                    <!-- Estado vacío -->
                                    <div v-if="filteredProjects.length === 0" class="text-center py-12">
                                        <v-icon size="64" color="grey-lighten-2" class="mb-4">mdi-magnify</v-icon>
                                        <h3 class="text-h6 font-weight-medium text-grey-darken-2 mb-2">
                                            No se encontraron proyectos
                                        </h3>
                                        <p class="text-body-2 text-grey-darken-1">
                                            Intenta ajustar los filtros de búsqueda
                                        </p>
                                    </div>
                                </v-window-item>

                                <!-- Tabs individuales por categoría -->
                                <v-window-item
                                    v-for="(label, category) in categoryLabels"
                                    :key="category"
                                    :value="category"
                                >
                                    <!-- Encabezado de categoría -->
                                    <v-card class="mb-6 elevation-2">
                                        <v-card-text>
                                            <h2 class="text-h4 font-weight-bold text-grey-darken-4 mb-4">{{ label }}</h2>
                                            <v-text-field
                                                v-model="searchQuery"
                                                prepend-inner-icon="mdi-magnify"
                                                :label="`Buscar en ${label.toLowerCase()}...`"
                                                variant="outlined"
                                                density="compact"
                                                hide-details
                                            />
                                        </v-card-text>
                                    </v-card>

                                    <!-- Grid de proyectos por categoría -->
                                    <v-row>
                                        <v-col
                                            v-for="project in getFilteredProjectsByCategory(category)"
                                            :key="project.id"
                                            cols="12"
                                            md="6"
                                            xl="4"
                                        >
                                            <v-card
                                                class="h-100 cursor-pointer elevation-2"
                                                hover
                                                @click="openDialog(project)"
                                            >
                                                <v-card-title class="pb-2">
                                                    <div class="d-flex justify-space-between align-start mb-2">
                                                        <v-chip
                                                            :color="getCategoryColor(project.category)"
                                                            size="small"
                                                            variant="flat"
                                                        >
                                                            {{ categoryLabels[project.category] }}
                                                        </v-chip>
                                                        <v-chip
                                                            :color="getStatusColor(project.status)"
                                                            size="small"
                                                            variant="outlined"
                                                        >
                                                            {{ project.status }}
                                                        </v-chip>
                                                    </div>
                                                    <div class="text-h6 line-clamp-2">{{ project.title }}</div>
                                                </v-card-title>
                                                <v-card-text>
                                                    <p class="text-body-2 text-grey-darken-1 mb-4 line-clamp-3">
                                                        {{ project.shortDescription }}
                                                    </p>
                                                    <div class="d-flex flex-column ga-2">
                                                        <div class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-calendar</v-icon>
                                                            {{ project.year }}
                                                        </div>
                                                        <div v-if="project.location" class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-map-marker</v-icon>
                                                            {{ project.location }}
                                                        </div>
                                                        <div v-if="project.entity" class="d-flex align-center ga-2 text-caption text-grey-darken-2">
                                                            <v-icon size="12">mdi-office-building</v-icon>
                                                            <span class="line-clamp-1">{{ project.entity }}</span>
                                                        </div>
                                                    </div>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-window-item>
                            </v-window>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>

        <!-- Dialog de detalles -->
        <v-dialog
            v-model="dialog"
            max-width="800"
            scrollable
        >
            <v-card v-if="selectedProject">
                <v-card-title class="d-flex flex-column align-start">
                    <div class="d-flex ga-2 mb-3">
                        <v-chip
                            :color="getCategoryColor(selectedProject.category)"
                            size="small"
                            variant="flat"
                        >
                            {{ categoryLabels[selectedProject.category] }}
                        </v-chip>
                        <v-chip
                            :color="getStatusColor(selectedProject.status)"
                            size="small"
                            variant="outlined"
                        >
                            {{ selectedProject.status }}
                        </v-chip>
                    </div>
                    <div class="text-h5 font-weight-bold">{{ selectedProject.title }}</div>
                </v-card-title>

                <v-card-text>
                    <div class="mb-6">
                        <p class="text-body-1">{{ selectedProject.fullDescription }}</p>
                    </div>

                    <v-divider class="mb-6" />

                    <v-row>
                        <v-col cols="12" md="6">
                            <div class="mb-4">
                                <div class="d-flex align-center ga-2 mb-2">
                                    <v-icon color="grey-darken-2">mdi-calendar</v-icon>
                                    <span class="font-weight-medium">Año:</span>
                                    <span>{{ selectedProject.year }}</span>
                                </div>
                                <div v-if="selectedProject.location" class="d-flex align-center ga-2">
                                    <v-icon color="grey-darken-2">mdi-map-marker</v-icon>
                                    <span class="font-weight-medium">Ubicación:</span>
                                    <span>{{ selectedProject.location }}</span>
                                </div>
                            </div>
                        </v-col>
                        <v-col cols="12" md="6">
                            <div v-if="selectedProject.entity" class="mb-4">
                                <div class="d-flex align-start ga-2">
                                    <v-icon color="grey-darken-2">mdi-office-building</v-icon>
                                    <div>
                                        <span class="font-weight-medium">Entidad:</span>
                                        <p class="text-grey-darken-1 mt-1">{{ selectedProject.entity }}</p>
                                    </div>
                                </div>
                            </div>
                            <div v-if="selectedProject.people && selectedProject.people.length > 0">
                                <div class="d-flex align-start ga-2">
                                    <v-icon color="grey-darken-2">mdi-account-group</v-icon>
                                    <div>
                                        <span class="font-weight-medium">Personas:</span>
                                        <ul class="text-grey-darken-1 mt-1">
                                            <li v-for="person in selectedProject.people" :key="person">
                                                • {{ person }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                </v-card-text>

                <v-card-actions>
                    <v-spacer />
                    <v-btn color="primary" @click="dialog = false">Cerrar</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-app>
</template>

<script setup>
import { ref, computed } from 'vue'
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
    ArcElement,
    PointElement,
    LineElement
} from 'chart.js'
import { Bar as BarChart, Doughnut as DoughnutChart, Line as LineChart } from 'vue-chartjs'

// Registrar componentes de Chart.js
ChartJS.register(
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
    ArcElement,
    PointElement,
    LineElement
)

// Datos del portafolio
const portfolioData = [
    // Emprendimientos
    {
        id: "humus-cesar",
        title: "HUMUS DEL CESAR S.A.S.",
        category: "emprendimientos",
        shortDescription: "Empresa dedicada a la producción y comercialización de abonos orgánicos",
        fullDescription: "Socia de una empresa privada tipo S.A.S. dedicada a la producción y comercialización de abonos orgánicos y a la prestación de servicios en diseño y elaboración de jardines. Empresa que funcionó en Valledupar y se destacó por su liderazgo en la zona caribeña pues sus productos y servicios tuvieron una cobertura significativa por su buena calidad y excelente servicio a nivel institucional para clientes como Homecenter, Centro Comercial Guatapurí Plaza y profesionales independientes del sector agrícola.",
        status: "Cerrada",
        location: "Valledupar",
        year: "2010-2017",
    },
    {
        id: "practika-boutique",
        title: "PRACTIKA BOUTIQUE",
        category: "emprendimientos",
        shortDescription: "Empresa dedicada al alquiler de ropa de gala para toda la familia",
        fullDescription: "Socia de empresa privada del Régimen Simplificado dedicada al alquiler de ropa de gala para toda la familia. Empresa que funcionó en Valledupar.",
        status: "Cerrada",
        location: "Valledupar",
        year: "2009-2011",
    },
    {
        id: "hostal-valledupar",
        title: "HOSTAL VALLEDUPAR",
        category: "emprendimientos",
        shortDescription: "Empresa dedicada a la prestación del servicio hotelero y turístico",
        fullDescription: "Socia de empresa privada del Régimen Simplificado dedicada a la prestación del servicio hotelero y/o turístico en la ciudad de Valledupar.",
        status: "Cerrada",
        location: "Valledupar",
        year: "2008-2009",
    },
    // Software Desarrollados
    {
        id: "software-citas-medicas",
        title: "SOFTWARE DE GESTIÓN PARA CITAS MÉDICAS E HISTORIAS CLÍNICAS",
        category: "software",
        shortDescription: "Sistema para consultorio de neumología con gestión de citas e historias clínicas",
        fullDescription: "Software para el sector salud, dirigido al Consultorio Particular de Neumología del Dr. Hernán Augusto Aponte Penso que permite administrar citas médicas y manejo de la historia clínica de pacientes. Desarrollado en lenguaje PHP y con el manejador de base de datos MySQL.",
        status: "Terminado",
        location: "Valledupar",
        year: "2006",
        entity: "Fundación Universitaria San Martín",
    },
    {
        id: "ganaventas",
        title: 'SOFTWARE PARA LA COMERCIALIZACIÓN DE PRODUCTOS AGRARIOS "GANAVENTAS"',
        category: "software",
        shortDescription: "Plataforma digital para el sector agrario y pecuario",
        fullDescription: 'Implementación de una empresa digital regional llamada "Ganaventas" en el sector agrario cuyas principales actividades son: Asesorías y evaluación de proyectos productivos destinados al sector pecuario, Comercializar Ganados, compra y venta de tierra, maquinaria usadas agrícolas.',
        status: "Terminado",
        year: "2009",
        entity: "Universidad Jorge Tadeo Lozano de Bogotá",
    },
    {
        id: "ultraline-web",
        title: "PÁGINA WEB DE ULTRALINE DE LA COSTA",
        category: "software",
        shortDescription: "Página institucional para empresa de productos electrónicos",
        fullDescription: "Diseño e Implementación de la Página Institucional de la empresa ULTRALINE DE LA COSTA, actualmente ULTRALINE ELECTRÓNICA destinada a la comercialización de productos electrónicos.",
        status: "Terminado",
        location: "Barranquilla",
        year: "2012",
        entity: "Ultraline Electrónica",
    },
    // Planes de Negocios
    {
        id: "plan-ganaventas",
        title: "CREACIÓN DE UNA COMERCIALIZADORA DE SEMOVIENTES",
        category: "planes",
        shortDescription: "Plan de negocios para empresa digital del sector agrario",
        fullDescription: 'Plan de Negocios orientado a la creación de una empresa digital regional llamada "Ganaventas" en el sector agrario cuyas principales actividades son: Asesorías y evaluación de proyectos productivos destinados al sector pecuario, Comercializar Ganados, compra y venta de tierra, maquinaria usadas agrícolas.',
        status: "Terminado",
        year: "2009",
        entity: "Universidad Jorge Tadeo Lozano de Bogotá",
    },
    {
        id: "plan-humus",
        title: "ABONO ORGÁNICO Y REFORESTACIÓN",
        category: "planes",
        shortDescription: "Plan de negocios para empresa productora de abono orgánico",
        fullDescription: "Plan de negocios que consiste en la creación de una empresa privada llamada HUMUS DEL CARIBE SAS, productora de abono orgánico para cultivos agrícolas y proyectos de reforestación.",
        status: "Terminado",
        year: "2011",
        entity: "Instituto Eurothecnology Empesas IEE. División de Estudios de Postgrados e Investigación. España",
    },
    // Tesis Dirigidas
    {
        id: "tesis-somos-uno",
        title: 'EMPRENDIMIENTO DIGITAL "SOMOS UNO"',
        category: "tesis",
        shortDescription: "Tesis sobre emprendimiento digital",
        fullDescription: "Tesis de grado dirigida en la Universidad Popular del Cesar sobre emprendimiento digital.",
        status: "Terminado",
        year: "2018",
        entity: "Universidad Popular del Cesar",
        people: ["Aldair Nuñez Florian"],
    },
    {
        id: "tesis-realidad-aumentada",
        title: "LA REALIDAD AUMENTADA EN COMERCIALIZACIÓN DE PRODUCTOS PARA EL HOGAR",
        category: "tesis",
        shortDescription: "Investigación sobre realidad aumentada y comercialización",
        fullDescription: "Tesis sobre la realidad aumentada en comercialización de productos para el hogar: crecimiento y tendencias en Colombia.",
        status: "Terminado",
        year: "2018",
        entity: "Universidad Popular del Cesar",
        people: ["Yesid Linares", "Sergio Luis Barragán"],
    },
    // Participación como Jurado
    {
        id: "jurado-app-juridica",
        title: "APLICATIVO MÓVIL PARA LA GESTIÓN DE PROCESOS JUDICIALES",
        category: "jurado",
        shortDescription: "Evaluación de aplicativo para oficina de abogados",
        fullDescription: "Participación como jurado en tesis sobre aplicativo móvil para la gestión de los procesos judiciales en una oficina de abogados independientes.",
        status: "Terminado",
        year: "2017",
        entity: "Universidad Popular del Cesar",
        people: ["Kevin Luis Florez Lozada", "Ricardo Andrés Sanchez Atuesta"],
    },
]

const categoryLabels = {
    emprendimientos: "Emprendimientos",
    software: "Software Desarrollados",
    planes: "Planes de Negocios",
    tesis: "Tesis Dirigidas",
    jurado: "Participación como Jurado",
}

// Estado reactivo
const activeTab = ref('all')
const searchQuery = ref('')
const selectedCategory = ref('all')
const dialog = ref(false)
const selectedProject = ref(null)

// Opciones para el select de categorías
const categoryOptions = [
    { title: 'Todas las categorías', value: 'all' },
    ...Object.entries(categoryLabels).map(([key, label]) => ({
        title: label,
        value: key
    }))
]

// Computed properties
const filteredProjects = computed(() => {
    return portfolioData.filter(project => {
        const matchesCategory = selectedCategory.value === 'all' || project.category === selectedCategory.value
        const matchesSearch = searchQuery.value === '' ||
            project.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            project.shortDescription.toLowerCase().includes(searchQuery.value.toLowerCase())

        return matchesCategory && matchesSearch
    })
})

const completedProjects = computed(() => {
    return portfolioData.filter(project => project.status.toLowerCase() === 'terminado').length
})

const categoryStats = computed(() => {
    const stats = {}
    Object.keys(categoryLabels).forEach(category => {
        stats[category] = portfolioData.filter(project => project.category === category).length
    })
    return stats
})

const yearStats = computed(() => {
    const stats = {}
    portfolioData.forEach(project => {
        const year = project.year.split('-')[0] // Tomar el primer año si es un rango
        if (!stats[year]) {
            stats[year] = 0
        }
        stats[year]++
    })
    return Object.entries(stats).sort(([a], [b]) => a.localeCompare(b))
})

const statusStats = computed(() => {
    const stats = {}
    portfolioData.forEach(project => {
        if (!stats[project.status]) {
            stats[project.status] = 0
        }
        stats[project.status]++
    })
    return stats
})

const timelinePeriods = computed(() => {
    const periods = [
        { period: '2006-2009', color: 'blue', count: 0 },
        { period: '2010-2014', color: 'green', count: 0 },
        { period: '2015-2018', color: 'orange', count: 0 },
    ]

    portfolioData.forEach(project => {
        const year = parseInt(project.year.split('-')[0])
        if (year >= 2006 && year <= 2009) periods[0].count++
        else if (year >= 2010 && year <= 2014) periods[1].count++
        else if (year >= 2015 && year <= 2018) periods[2].count++
    })

    return periods.filter(period => period.count > 0)
})

// Configuraciones de gráficos con vue-chartjs
const categoryChartData = computed(() => ({
    labels: Object.entries(categoryStats.value).map(([key]) => categoryLabels[key]),
    datasets: [{
        data: Object.values(categoryStats.value),
        backgroundColor: [
            '#2196F3',
            '#9C27B0',
            '#FF9800',
            '#4CAF50',
            '#3F51B5'
        ],
        borderWidth: 2,
        borderColor: '#fff'
    }]
}))

const categoryChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            position: 'bottom',
            labels: {
                padding: 15,
                usePointStyle: true,
                font: {
                    size: 11
                }
            }
        },
        tooltip: {
            callbacks: {
                label: function(context) {
                    const total = context.dataset.data.reduce((a, b) => a + b, 0)
                    const percentage = ((context.parsed * 100) / total).toFixed(1)
                    return `${context.label}: ${context.parsed} (${percentage}%)`
                }
            }
        }
    },
    cutout: '60%'
}

const yearChartData = computed(() => ({
    labels: yearStats.value.map(([year]) => year),
    datasets: [{
        label: 'Proyectos',
        data: yearStats.value.map(([, count]) => count),
        backgroundColor: '#2196F3',
        borderColor: '#1976D2',
        borderWidth: 1,
        borderRadius: 4
    }]
}))

const yearChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: false
        },
        tooltip: {
            callbacks: {
                title: function(context) {
                    return `Año ${context[0].label}`
                },
                label: function(context) {
                    return `${context.parsed.y} proyecto${context.parsed.y !== 1 ? 's' : ''}`
                }
            }
        }
    },
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                stepSize: 1,
                font: {
                    size: 10
                }
            },
            grid: {
                color: '#f0f0f0'
            }
        },
        x: {
            ticks: {
                font: {
                    size: 10
                }
            },
            grid: {
                display: false
            }
        }
    }
}

const statusChartData = computed(() => ({
    labels: Object.keys(statusStats.value),
    datasets: [{
        label: 'Proyectos',
        data: Object.values(statusStats.value),
        backgroundColor: Object.keys(statusStats.value).map(status =>
            status.toLowerCase() === 'terminado' ? '#4CAF50' : '#F44336'
        ),
        borderRadius: 4
    }]
}))

const statusChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    indexAxis: 'y',
    plugins: {
        legend: {
            display: false
        },
        tooltip: {
            callbacks: {
                label: function(context) {
                    return `${context.parsed.x} proyecto${context.parsed.x !== 1 ? 's' : ''}`
                }
            }
        }
    },
    scales: {
        x: {
            beginAtZero: true,
            ticks: {
                stepSize: 1,
                font: {
                    size: 10
                }
            },
            grid: {
                color: '#f0f0f0'
            }
        },
        y: {
            ticks: {
                font: {
                    size: 10
                }
            },
            grid: {
                display: false
            }
        }
    }
}

const timelineChartData = computed(() => {
    const yearData = {}
    portfolioData.forEach(project => {
        const year = parseInt(project.year.split('-')[0])
        if (!yearData[year]) {
            yearData[year] = 0
        }
        yearData[year]++
    })

    const sortedYears = Object.keys(yearData).sort()

    return {
        labels: sortedYears,
        datasets: [{
            label: 'Proyectos por Año',
            data: sortedYears.map(year => yearData[year]),
            borderColor: '#2196F3',
            backgroundColor: 'rgba(33, 150, 243, 0.1)',
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#2196F3',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 5
        }]
    }
})

const timelineChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: false
        },
        tooltip: {
            callbacks: {
                title: function(context) {
                    return `Año ${context[0].label}`
                },
                label: function(context) {
                    return `${context.parsed.y} proyecto${context.parsed.y !== 1 ? 's' : ''}`
                }
            }
        }
    },
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                stepSize: 1,
                font: {
                    size: 10
                }
            },
            grid: {
                color: '#f0f0f0'
            }
        },
        x: {
            ticks: {
                font: {
                    size: 10
                }
            },
            grid: {
                display: false
            }
        }
    }
}

// Métodos
const getProjectsByCategory = (category) => {
    return portfolioData.filter(project => project.category === category)
}

const getFilteredProjectsByCategory = (category) => {
    return portfolioData.filter(project => {
        const matchesCategory = project.category === category
        const matchesSearch = searchQuery.value === '' ||
            project.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            project.shortDescription.toLowerCase().includes(searchQuery.value.toLowerCase())

        return matchesCategory && matchesSearch
    })
}

const getCategoryColor = (category) => {
    const colors = {
        emprendimientos: 'blue',
        software: 'purple',
        planes: 'orange',
        tesis: 'green',
        jurado: 'indigo',
    }
    return colors[category] || 'grey'
}

const getStatusColor = (status) => {
    switch (status.toLowerCase()) {
        case 'terminado':
            return 'success'
        case 'cerrada':
        case 'cerrado':
            return 'error'
        default:
            return 'grey'
    }
}

const openDialog = (project) => {
    selectedProject.value = project
    dialog.value = true
}
</script>

<style scoped>
.sidebar-fixed {
    position: sticky;
    top: 0;
}

.cursor-pointer {
    cursor: pointer;
}

.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.timeline-container {
    max-height: 200px;
    overflow-y: auto;
}

.timeline-item {
    border-left: 2px solid #e0e0e0;
    padding-left: 16px;
    position: relative;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -5px;
    top: 8px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #2196F3;
}

@media (max-width: 1023px) {
    .sidebar-fixed {
        position: relative;
        height: auto !important;
    }
}
</style>
