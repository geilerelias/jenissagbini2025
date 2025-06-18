<script setup>
import {useDisplay} from "vuetify/framework";
import {defineProps} from "vue";

const {mobile, smAndDown} = useDisplay();

const props = defineProps({
    icon: {type: String, required: true},
    order: {type: String, required: true},
    image: {type: String, required: true},
    title: {type: String, required: true},
    subtitle: {type: String, default: ""},
    description: {type: String, default: ""},
    items: {
        type: Array,
        required: true,
        default: () => [],
    },
});
</script>

<template>
    <section class="bg-surface">
        <v-container class="profile-blocks py-md-12 py-5">
            <v-row align="center" justify="space-between">
                <v-col v-if="!mobile"
                       :order="order"
                       class="position-relative"
                       cols="12"
                       md="5"
                >
                    <div
                        class="hover-card"
                    >
                        <v-img
                            :src="image"
                            alt="profile-visual"
                            class="zoom-in rounded-lg bg-gradient"
                            cover
                            rounded="lg"
                            aspect-ratio="4/5"
                            style="width: 50vh; height: 75vh"
                        >
                            <template #placeholder>
                                <v-skeleton-loader
                                    type="image"
                                    class="h-100 w-100 rounded-md"
                                />
                            </template>
                        </v-img>
                    </div>

                    <v-card
                        :class="
                            smAndDown
                                ? 'mt-n20 w-50 h-100 ml-auto '
                                : ' business-box position-absolute'
                        "
                        class="bg-primary py-4 py-md-6 px-md-3 rounded-md text-center text-lg-start"
                        style="margin-top: -20px !important"
                    >
                        <h2 class="font-weight-bold text-h4 mb-sm-3 text-white">
                            {{ items.length }}+
                        </h2>
                        <p class="text-subtitle-1 font-weight-bold">
                            {{ subtitle }}
                        </p>
                    </v-card>
                </v-col>
                <v-col md="6" cols="12" class="" v-if="mobile">
                    <div class="position-relative profile">
                        <img :src="image"
                             alt="profile-banner" class="w-100 rounded-md bg-gradient">
                        <div
                            class="pa-4 text-center mr-2  bg-primary rounded-shaped  px-6 text-h4 text-dark position-absolute profile-tag font-weight-medium">
                            <p class="text-subtitle-1 font-weight-bold">
                                {{ subtitle }}
                            </p>
                        </div>
                    </div>
                </v-col>
                <v-col class="mt-10" cols="12" md="6">
                    <div
                        class="text-center text-md-start"
                    >
                        <h2
                            class="text-h4 font-weight-bold text-dark text-primary mb-4"
                        >
                            <span class="font-weight-light">
                                {{
                                    (() => {
                                        const words = title.split(" ");
                                        const half = Math.ceil(
                                            words.length / 2
                                        );
                                        return words.slice(0, half).join(" ");
                                    })()
                                }}
                            </span>
                            <br/>
                            <span
                                class="text-secondary ml-0 ml-md-16 font-weight-bold font-weight-black"
                            >
                                {{
                                    (() => {
                                        const words = title.split(" ");
                                        const half = Math.ceil(
                                            words.length / 2
                                        );
                                        return words.slice(half).join(" ");
                                    })()
                                }}
                            </span>
                        </h2>

                        <v-responsive
                            class="rounded-lg bg-primary mr-md-auto mx-auto mx-md-0 mb-4"
                            style="max-width: 100px"
                        >
                            <v-divider class="pb-1 rounded-lg" light/>
                        </v-responsive>

                        <p class="text-muted text-body-1 text-justify">
                            {{ description }}
                        </p>
                        <v-row class="mt-6 d-flex flex-wrap">
                            <v-col
                                v-for="(value, index) in items"
                                :key="index"
                                :data-aos-delay="index * 100"
                                class="d-flex justify-start align-center"
                                cols="12"
                                md="6"
                                sm="6"
                            >
                                <v-btn
                                    class="mr-2"
                                    color="accent"
                                    icon
                                    size="small"
                                    variant="flat"
                                >
                                    <v-icon color="white" size="24">
                                        {{ icon }}
                                    </v-icon>
                                </v-btn>
                                <div class="d-flex flex-column text-left">
                                    <div class="text-description">
                                        {{ value }}
                                    </div>
                                </div>
                            </v-col>
                        </v-row>
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </section>
</template>

<style scoped>

.bg-gradient {
    background: radial-gradient(
        circle,
        #d9d9d9,
        #808080
    ); /* Gradiente radial del centro hacia los lados */
    height: 100%; /* Asegura que el gradiente cubra todo el contenedor */
    width: 100%;
}

.bg-gradient-black {
    background: linear-gradient(to right, #000000, #1a1a1a, #565656);
}

.bg-gradient-white {
    background: linear-gradient(to right, #818181, #a9a9a9, #d4d4d4);
}

.position-relative {
    position: relative !important;
}

.profile .profile-tag {
    bottom: 35px;
    right: -45px;
}

@media screen and (max-width: 991px) {
    .profile .profile-tag {
        right: 0;
    }
}

.profile .email:before, .profile .phone:before {
    background-color: rgb(var(--v-theme-primary));
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: -11px;
    width: 50px
}

.w-100 {
    width: 100% !important;
}

.rounded-md {
    border-radius: 8px !important;
}

.v-locale--is-ltr .rounded-be-0 {
    border-bottom-right-radius: 0 !important;
}

img {
    border-style: none;
}


@media screen and (max-width: 991px) {
    .profile-blocks .business-box {
        max-width: 115px;
        right: 0;
        top: 0;
    }
}

@media screen and (max-width: 767px) {
    .profile-blocks .business-box {
        max-width: 90px;
        right: 0;
        top: 0;
    }
}

@media screen and (max-width: 1366px) {
    .profile-blocks .business-box {
        max-width: 165px;
        right: -1px;
        top: 65px;
    }
}

@media screen and (min-width: 1367px) {
    .profile-blocks .business-box {
        max-width: 165px; /* Cambia esto según lo que necesites */
        right: -40px; /* Cambia esto según lo que necesites */
        top: 50px; /* Cambia esto según lo que necesites */
    }
}

.position-absolute {
    position: absolute !important;
}

/* Esqueleto visible correctamente */
::v-deep(.v-skeleton-loader__bone.v-skeleton-loader__image) {
    height: 100% !important;
    min-height: 100% !important;
}
</style>
