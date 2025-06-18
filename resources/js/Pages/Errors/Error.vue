<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 text-center p-6">
        <h1 class="text-6xl font-bold text-red-600">{{ status }}</h1>
        <p class="text-xl mt-4">{{ message }}</p>
        <a href="/" class="mt-6 text-blue-500 underline">Volver al inicio</a>
    </div>
</template>

<script setup>
defineProps({
    status: Number,
    message: {
        type: String,
        default: 'Ha ocurrido un error inesperado.'
    }
})
</script>
