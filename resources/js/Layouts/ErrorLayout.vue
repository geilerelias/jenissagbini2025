<script setup>
defineProps({
    status: Number,
    title: String,
    message: String,
    color: {
        type: String,
        default: 'text-gray-600',
    }
});
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="text-center px-6 animate-fade-in-up">
            <h1 :class="`text-6xl font-bold ${color}`">{{ status }}</h1>
            <p class="text-2xl mt-4 text-gray-700">{{ title }}</p>
            <p class="mt-2 text-gray-500">{{ message }}</p>
        </div>
    </div>
</template>



<style scoped>
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.6s ease-out;
}
</style>
