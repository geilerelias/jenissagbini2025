<script setup>
import {onMounted, ref} from 'vue'
import {Chart, registerables} from 'chart.js'
import PageLayout from "@/Layouts/PageLayout.vue";

Chart.register(...registerables)

const props = defineProps({visitas: Array})
const chartCanvas = ref(null)

onMounted(() => {
    const labels = props.visitas.map(v => v.fecha)
    const data = props.visitas.map(v => v.total)

    new Chart(chartCanvas.value, {
        type: 'line',
        data: {
            labels,
            datasets: [{
                label: 'Visitas',
                data,
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                fill: true,
                tension: 0.3,
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {title: {display: true, text: 'Fecha'}},
                y: {title: {display: true, text: 'Visitas'}, beginAtZero: true}
            }
        }
    })
})
</script>

<template>
    <page-layout>
        <div class="p-6 max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Visitas por día</h1>
            <canvas ref="chartCanvas"></canvas>
        </div>
    </page-layout>
</template>


