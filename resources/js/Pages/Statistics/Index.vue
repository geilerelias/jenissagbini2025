<script setup>
import {onMounted, ref} from 'vue'
import {Bar, Line} from 'vue-chartjs'
import {
    BarElement,
    CategoryScale,
    Chart as ChartJS,
    Legend,
    LinearScale,
    LineElement,
    PointElement,
    Title,
    Tooltip,
} from 'chart.js'
import {VCard, VCardText, VCardTitle, VCol, VContainer, VDataTable, VRow} from 'vuetify/components'
import AdminLayout from "@/Layouts/AdminLayout.vue";

ChartJS.register(
    Title, Tooltip, Legend,
    LineElement, BarElement,
    CategoryScale, LinearScale, PointElement
)

const dailyData = ref([])
const weeklyData = ref([])
const monthlyData = ref([])
const uniqueIps = ref(0)
const avgDuration = ref(0)
const visitors = ref([])

onMounted(async () => {
    const stats = await fetch('/api/stats').then(res => res.json())
    const visitorData = await fetch('/api/visitors').then(res => res.json())

    dailyData.value = stats.daily
    weeklyData.value = stats.weekly
    monthlyData.value = stats.monthly
    uniqueIps.value = stats.unique_ips
    avgDuration.value = stats.avg_duration
    visitors.value = visitorData
})

const formatDuration = seconds => {
    const minutes = Math.floor(seconds / 60)
    const secs = seconds % 60
    return `${minutes}m ${secs}s`
}
</script>

<template>
    <admin-layout>
        <VContainer fluid>
            <h1 class="text-h4 mb-6">Website Analytics</h1>

            <!-- Summary Cards -->
            <VRow>
                <VCol cols="12" md="6" lg="3">
                    <VCard color="primary" class="pa-4 text-white">
                        <VCardTitle>Unique Visitors</VCardTitle>
                        <VCardText class="text-h5">{{ uniqueIps }}</VCardText>
                    </VCard>
                </VCol>
                <VCol cols="12" md="6" lg="3">
                    <VCard color="indigo" class="pa-4 text-white">
                        <VCardTitle>Avg. Duration</VCardTitle>
                        <VCardText class="text-h5">{{ formatDuration(avgDuration) }}</VCardText>
                    </VCard>
                </VCol>
            </VRow>

            <!-- Graphs -->
            <VRow>
                <VCol cols="12" md="6">
                    <VCard class="pa-4">
                        <VCardTitle>Daily Visits</VCardTitle>
                        <Line
                            :data="{
              labels: dailyData.map(d => d.date),
              datasets: [{ label: 'Visits', data: dailyData.map(d => d.total), borderColor: '#3f51b5' }]
            }"
                        />
                    </VCard>
                </VCol>
                <VCol cols="12" md="6">
                    <VCard class="pa-4">
                        <VCardTitle>Weekly Visits</VCardTitle>
                        <Bar
                            :data="{
              labels: weeklyData.map(w => 'Week ' + w.week),
              datasets: [{ label: 'Visits', data: weeklyData.map(w => w.total), backgroundColor: '#2196f3' }]
            }"
                        />
                    </VCard>
                </VCol>
            </VRow>

            <VRow>
                <VCol cols="12">
                    <VCard class="pa-4">
                        <VCardTitle>Monthly Visits</VCardTitle>
                        <Bar
                            :data="{
              labels: monthlyData.map(m => m.month),
              datasets: [{ label: 'Visits', data: monthlyData.map(m => m.total), backgroundColor: '#4caf50' }]
            }"
                        />
                    </VCard>
                </VCol>
            </VRow>

            <!-- Visitor Table -->
            <VRow class="mt-6">
                <VCol cols="12">
                    <VCard>
                        <VCardTitle>Visitors</VCardTitle>
                        <VDataTable
                            :headers="[
              { title: 'IP Address', key: 'ip_address' },
              { title: 'Visits', key: 'total_visits' },
              { title: 'Last Visit', key: 'last_visit' },
            ]"
                            :items="visitors"
                            class="elevation-1"
                        />
                    </VCard>
                </VCol>
            </VRow>
        </VContainer>
    </admin-layout>
</template>
