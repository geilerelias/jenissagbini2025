<template>
    <ErrorLayout
        status="419"
        title="Sesión expirada"
        message="Tu sesión ha caducado. Recarga la página e intenta nuevamente."
        color="text-orange-600"
    />
</template>

<script setup>
import ErrorLayout from '@/Layouts/ErrorLayout.vue'
</script>
