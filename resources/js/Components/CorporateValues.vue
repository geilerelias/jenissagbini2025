<script setup>
import bgValores from "@images/bg/bg-1.jpg";
import { useDisplay } from "vuetify/framework";
import { ref } from "vue";

const { mobile, smAndDown } = useDisplay();

const corporateValues = ref([
    {
        title: "Integridad",
        icon: "mdi-shield-check",
        description: "Actuamos con honestidad y transparencia.",
    },
    {
        title: "Responsabilidad",
        icon: "mdi-account-check",
        description: "Cumplimos compromisos con ética y calidad.",
    },
    {
        title: "Calidad",
        icon: "mdi-star",
        description: "Garantizamos excelencia en cada proyecto.",
    },
    {
        title: "Seguridad",
        icon: "mdi-lock",
        description: "Priorizamos la seguridad en nuestras operaciones.",
    },
    {
        title: "Compromiso",
        icon: "mdi-handshake",
        description: "Superamos expectativas con innovación.",
    },
]);
</script>

<template>
    <section class="bg-surface">
        <v-container class="business-culture py-md-12 py-5">
            <v-row align="center" justify="space-between">
                <v-col class="position-relative" cols="12" md="5">
                    <div
                        :data-aos="mobile ? 'fade-up' : 'fade-right'"
                        class="hover-card"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    >
                        <v-img
                            :src="bgValores"
                            alt="about2"
                            class="zoom-in w-100 h-100"
                            cover
                            rounded="lg"
                        />
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
                            5+
                        </h2>
                        <p class="text-subtitle-1 font-weight-bold">
                            Principios que nos definen
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
                                Nuestros Valores
                            </span>
                            <br />
                            <span
                                class="text-secondary ml-16 font-weight-bold font-weight-black"
                            >
                                Corporativos
                            </span>
                        </h2>

                        <v-responsive
                            class="rounded-lg bg-primary mr-auto mb-4"
                            style="max-width: 100px"
                        >
                            <v-divider class="pb-1 rounded-lg" light />
                        </v-responsive>
                        <p class="text-muted text-body-1 text-justify">
                            En Constructora Villa III S.A.S, nos guiamos por
                            principios fundamentales como la integridad, la
                            responsabilidad y el compromiso. Estos valores
                            representan la base de nuestras operaciones y
                            reflejan nuestro enfoque en la calidad y la
                            seguridad en cada proyecto que emprendemos.
                        </p>
                        <v-row class="mt-6 d-flex flex-wrap">
                            <v-col
                                v-for="(value, index) in corporateValues"
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
                                    <v-icon color="primary" size="24">
                                        {{ value.icon }}
                                    </v-icon>
                                </v-btn>
                                <div class="d-flex flex-column">
                                    <div class="font-weight-bold">
                                        {{ value.title }}
                                    </div>
                                    <div class="text-description">
                                        {{ value.description }}
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
    .business-culture .business-box {
        max-width: 115px;
        right: 0;
        top: 0;
    }
}

@media screen and (max-width: 767px) {
    .business-culture .business-box {
        max-width: 90px;
        right: 0;
        top: 0;
    }
}

.business-culture .business-box {
    max-width: 165px;
    right: -48px;
    top: 65px;
}

.position-absolute {
    position: absolute !important;
}
</style>
