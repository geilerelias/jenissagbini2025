<template>
    <ErrorLayout
        status="404"
        title="Página no encontrada"
        message="La ruta solicitada no existe o fue eliminada."
        color="text-red-600"
    />
</template>

<script setup>
import ErrorLayout from '@/Layouts/ErrorLayout.vue'
</script>
