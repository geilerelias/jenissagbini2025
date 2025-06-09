<template>
    <admin-layout>
        <v-container fluid>
            <v-row>
                <!-- Estado de conexión -->
                <v-col cols="12" md="3">
                    <v-card color="primary" dark>
                        <v-card-title>
                            <v-icon start>mdi-database</v-icon>
                            Conexión
                        </v-card-title>
                        <v-card-text>
                            {{ conexion }}
                        </v-card-text>
                    </v-card>
                </v-col>

                <!-- Nombre de base de datos -->
                <v-col cols="12" md="3">
                    <v-card color="indigo" dark>
                        <v-card-title>
                            <v-icon start>mdi-database-marker</v-icon>
                            Base de Datos
                        </v-card-title>
                        <v-card-text>
                            {{ baseDeDatos }}
                        </v-card-text>
                    </v-card>
                </v-col>

                <!-- Tabla sessions -->
                <v-col cols="12" md="3">
                    <v-card color="success" dark>
                        <v-card-title>
                            <v-icon start>mdi-table</v-icon>
                            Tabla Sessions
                        </v-card-title>
                        <v-card-text>
                            {{ tablaSessionsExiste ? 'Existe' : 'No existe' }}<br>
                            Registros: {{ registrosEnSessions ?? 'N/A' }}
                        </v-card-text>
                    </v-card>
                </v-col>

                <!-- Migraciones pendientes -->
                <v-col cols="12" md="3">
                    <v-card color="red" dark>
                        <v-card-title>
                            <v-icon start>mdi-database-alert</v-icon>
                            Migraciones
                        </v-card-title>
                        <v-card-text>
                            {{ migracionesPendientes ? 'Pendientes' : 'Al día' }}
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>

            <!-- Información del entorno -->
            <v-row>
                <v-col cols="12" md="6">
                    <v-card>
                        <v-card-title>
                            <v-icon start>mdi-cog</v-icon>
                            Configuración de Entorno
                        </v-card-title>
                        <v-card-text>
                            <v-list>
                                <v-list-item v-for="(value, key) in variablesEnv" :key="key">
                                    <v-list-item-title><strong>{{ key }}</strong>: {{ value }}</v-list-item-title>
                                </v-list-item>
                            </v-list>
                        </v-card-text>
                    </v-card>
                </v-col>

                <!-- Gráfico circular -->
                <v-col cols="12" md="6">
                    <v-card>
                        <v-card-title>
                            <v-icon start>mdi-chart-donut</v-icon>
                            Migraciones
                        </v-card-title>
                        <v-card-text>
                            <DoughnutChart style="max-height: 250px" :pendientes="migracionesPendientes"/>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>

            <!-- Versiones -->
            <v-row>
                <v-col cols="12" md="6">
                    <v-card color="blue-grey" dark>
                        <v-card-title>
                            <v-icon start>mdi-language-php</v-icon>
                            PHP Version
                        </v-card-title>
                        <v-card-text>
                            {{ phpVersion }}
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols="12" md="6">
                    <v-card color="purple" dark>
                        <v-card-title>
                            <v-icon start>mdi-laravel</v-icon>
                            Laravel Version
                        </v-card-title>
                        <v-card-text>
                            {{ laravelVersion }}
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </admin-layout>
</template>

<script setup>
import {usePage} from '@inertiajs/vue3'
import DoughnutChart from '@/Components/DoughnutChart.vue'
import AdminLayout from "@/Layouts/AdminLayout.vue"; // Usa la ruta correcta


const page = usePage()
const props = defineProps({
    conexion: {
        type: String,
        default: 'No disponible',
    },
    baseDeDatos: {
        type: String,
        default: 'N/A',
    },
    tablaSessionsExiste: {
        type: Boolean,
        default: false,
    },
    registrosEnSessions: {
        type: Number,
        default: 0,
    },
    variablesEnv: {
        type: Object,
        default: () => ({}),
    },
    migracionesPendientes: {
        type: Boolean,
        default: false,
    },
    phpVersion: {
        type: String,
        default: 'Desconocida',
    },
    laravelVersion: {
        type: String,
        default: 'Desconocida',
    },
    error: {
        type: String,
        default: null,
    },
})

console.log(usePage().props)
// Datos para gráfico (puedes usar directamente props)
const chartData = {
    labels: ['Sesiones registradas', 'Pendientes'],
    datasets: [
        {
            data: [props.registrosEnSessions, Math.max(0, 100 - props.registrosEnSessions)],
            backgroundColor: ['#4CAF50', '#FF9800'],
        },
    ],
}
</script>

