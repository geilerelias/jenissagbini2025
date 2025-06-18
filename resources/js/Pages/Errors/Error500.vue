<template>
    <ErrorLayout
        status="500"
        title="Error interno del servidor"
        message="Estamos trabajando para solucionarlo. Intenta más tarde."
        color="text-purple-600"
    />
</template>

<script setup>
import ErrorLayout from '@/Layouts/ErrorLayout.vue'
</script>
