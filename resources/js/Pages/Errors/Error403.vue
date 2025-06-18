<template>
    <ErrorLayout
        status="403"
        title="Acceso denegado"
        message="No tienes permiso para acceder a esta página."
        color="text-yellow-500"
    />
</template>

<script setup>
import ErrorLayout from '@/Layouts/ErrorLayout.vue'
</script>
