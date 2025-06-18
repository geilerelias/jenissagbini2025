<template>
    <div class="min-h-screen flex flex-col justify-center items-center text-center bg-gray-100">
        <h1 class="text-5xl font-bold mb-4">Error {{ status }}</h1>
        <p class="text-xl">{{ message }}</p>
    </div>
</template>

<script setup>
defineProps({
    status: Number,
    message: String
});
</script>
