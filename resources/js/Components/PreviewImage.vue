<template>
    <v-row justify="center">
        <v-expand-transition>
            <v-overlay
                :model-value="dialog"
                :opacity="0.8"
                transition="scale-transition"
            >
                <v-card
                    flat
                    color="transparent"
                    style="
                        height: calc(90vh - 10px);
                        max-height: calc(90vh - 10px);
                        width: calc(90vw - 10px);
                        max-width: calc(90vw - 10px);
                    "
                >
                    <v-fab-transition>
                        <v-btn
                            dark
                            absolute
                            top
                            right
                            fab
                            small
                            class="mt-5"
                            @click="close"
                        >
                            <v-icon>mdi-close</v-icon>
                        </v-btn>
                    </v-fab-transition>

                    <v-card class="transparent" flat>
                        <v-img
                            :src="selectedImage"
                            style="
                                height: calc(90vh - 10px);
                                max-height: calc(90vh - 10px);
                                z-index: 0 !important;
                            "
                            aspect-ratio="2"
                            :style="imageStyle"
                            contain
                        >
                            <template v-slot:placeholder>
                                <v-row
                                    class="fill-height ma-0"
                                    align="center"
                                    justify="center"
                                >
                                    <v-progress-circular
                                        indeterminate
                                        color="grey lighten-5"
                                    ></v-progress-circular>
                                </v-row>
                            </template>
                        </v-img>
                    </v-card>

                    <div
                        class="mt-n8 d-flex justify-center align-end"
                        style="z-index: 10 !important"
                    >
                        <v-row
                            class="primary rounded-lg mb-2 py-0"
                            style="max-width: 200px; z-index: 10 !important"
                        >
                            <v-col class="d-flex justify-center align-end my-0">
                                <v-btn icon @click="setScale(-0.1)">
                                    <v-icon>mdi-magnify-minus</v-icon>
                                </v-btn>

                                <v-btn icon @click="setScale(0.1)">
                                    <v-icon>mdi-magnify-plus</v-icon>
                                </v-btn>

                                <v-btn icon @click="resetImage">
                                    <v-icon>mdi-autorenew</v-icon>
                                </v-btn>

                                <v-btn icon @click="setRotation(-10)">
                                    <v-icon>mdi-rotate-right</v-icon>
                                </v-btn>

                                <v-btn icon @click="setRotation(10)">
                                    <v-icon>mdi-rotate-left</v-icon>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </div>
                </v-card>
            </v-overlay>
        </v-expand-transition>
    </v-row>
</template>

<script setup>
import { ref, computed } from "vue";

defineProps({
    dialog: { type: Boolean, default: false },
    selectedImage: { type: String, default: "" },
    close: { type: Function, required: true },
});

const grade = ref(0);
const scale = ref(1);

const imageStyle = computed(() => {
    return `transform: rotate(${grade.value}deg) scale(${scale.value})`;
});

function resetImage() {
    grade.value = 0;
    scale.value = 1;
}

function setRotation(value) {
    grade.value += value;
}

function setScale(value) {
    scale.value += value;
}
</script>

<style scoped>
strong {
    font-weight: bold !important;
}

nav {
    margin-top: 0px;
    padding: 14px;
    text-align: center;
}
</style>
