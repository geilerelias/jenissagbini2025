<template>
    <Doughnut :data="data" :options="options" />
</template>

<script setup>
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    ArcElement,
    DoughnutController,
} from 'chart.js'
import { Doughnut } from 'vue-chartjs'
ChartJS.register(Title, Tooltip, Legend, ArcElement)

const props = defineProps({
    pendientes: Boolean
})

const data = {
    labels: ['Pendientes', 'Aplicadas'],
    datasets: [{
        backgroundColor: ['#f44336', '#4caf50'],
        data: props.pendientes ? [1, 0] : [0, 1]
    }]
}

const options = {
    responsive: true,
    plugins: {
        legend: {
            position: 'bottom'
        }
    }
}
</script>
