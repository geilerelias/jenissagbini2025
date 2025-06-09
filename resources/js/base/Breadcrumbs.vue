<script setup>
import {defineProps} from 'vue';

const props = defineProps({
    name: String,
    route: String
});
</script>

<template>
    <v-container>
        <v-card elevation="0" rounded="lg" class="my-0">
            <div class="d-sm-flex w-full justify-space-between align-center">
                <div>
                    <h5 class="v-card-title">
                        {{ name }}
                    </h5>
                </div>
                <v-breadcrumbs>
                    <v-breadcrumbs-item :to="route">
                        <h6 class="font-weight-medium text-subtitle-1">Dashboard</h6>
                    </v-breadcrumbs-item>
                    <v-breadcrumbs-divider>
                        <v-icon>mdi-chevron-right</v-icon>
                    </v-breadcrumbs-divider>
                    <v-breadcrumbs-item disabled>
                        <h6 class="font-weight-medium text-subtitle-1">{{ name }}</h6>
                    </v-breadcrumbs-item>
                </v-breadcrumbs>
            </div>
        </v-card>
    </v-container>
</template>

<style scoped>
</style>
