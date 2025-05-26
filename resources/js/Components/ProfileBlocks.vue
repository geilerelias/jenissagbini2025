<script setup>
import { useDisplay } from "vuetify/framework";
import { defineProps } from "vue";

const { mobile, smAndDown } = useDisplay();

const props = defineProps({
    icon: { type: String, required: true },
    order: { type: String, required: true },
    image: { type: String, required: true },
    title: { type: String, required: true },
    subtitle: { type: String, default: "" },
    description: { type: String, default: "" },
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
                <v-col
                    :order="order"
                    class="position-relative"
                    cols="12"
                    md="5"
                >
                    <div
                        :data-aos="mobile ? 'fade-up' : 'fade-right'"
                        class="hover-card"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    >
                        <v-img
                            :src="image"
                            alt="profile-visual"
                            class="zoom-in rounded-lg"
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
                                ? 'position-relative mt-n20 w-50 h-100 ml-auto '
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

                <v-col class="mt-10" cols="12" md="6">
                    <div
                        class="text-center text-md-start"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    >
                        <h2
                            :data-aos="mobile ? 'fade-up' : 'fade-right'"
                            class="text-h4 font-weight-bold text-dark text-primary mb-4"
                            data-aos-delay="200"
                            data-aos-duration="1000"
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
                            <br />
                            <span
                                class="text-secondary ml-16 font-weight-bold font-weight-black"
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
                            class="rounded-lg bg-primary mr-auto mb-4"
                            style="max-width: 100px"
                        >
                            <v-divider class="pb-1 rounded-lg" light />
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
                                data-aos="fade-up"
                                data-aos-duration="1000"
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
                                <div class="d-flex flex-column">
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
