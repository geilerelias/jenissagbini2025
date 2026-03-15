<script setup>
defineProps({
    url: {
        type: String,
        default: "",
    },
});

const emit = defineEmits(["close"]);
</script>

<template>
    <v-card class="d-flex flex-column" style="height: 100vh">
        <v-toolbar density="compact" color="grey-darken-3">
            <v-btn icon="mdi-close" variant="text" @click="emit('close')" />
            <v-toolbar-title>Vista previa del documento</v-toolbar-title>
        </v-toolbar>
        <div class="flex-grow-1 pa-2" style="min-height: 0">
            <iframe
                v-if="url"
                :src="url"
                class="w-100 h-100 rounded"
                style="border: none; min-height: 80vh"
                title="Vista previa del PDF"
            />
        </div>
    </v-card>
</template>
