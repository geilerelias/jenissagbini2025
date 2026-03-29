<script setup>
import { computed, ref } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";
import { useDisplay } from "vuetify";
import SectionHeading from "@/Components/SectionHeading.vue";
import SpinnerComponent from "@/Components/SpinnerComponent.vue";
import { CONTACT_INFO, CONTACT_CARDS } from "@/data/pages/contactData";

import lazyBg1 from "@images/bg/lazy-home.png";
import bgHome from "@images/bg/bg-home-2.png";

const { mobile } = useDisplay();
const formRef = ref(null);
const page = usePage();
const successMessage = computed(() => page.props.flash?.success);

const form = useForm({
    firstName: "Geiler Elias",
    lastName: "Radillo Sarmiento",
    email: "geilerelias@gmail.com",
    subject: "Test a send email",
    message:
        "THis a test message to check if the contact form is working properly.",
});

const snackbar = ref(false);
const snackbarMessage = ref("");
const snackbarColor = ref("success");

async function enviarFormulario() {
    const { valid } = await formRef.value?.validate();
    if (!valid) return;

    form.post("/enviar-correo", {
        onSuccess: () => {
            snackbarMessage.value = "El mensaje se ha enviado correctamente.";
            snackbarColor.value = "success";
            snackbar.value = true;
            form.reset();
        },
        onError: () => {
            snackbarMessage.value =
                "No se pudo enviar el mensaje. Revisa los datos.";
            snackbarColor.value = "error";
            snackbar.value = true;
        },
    });
}

const rules = {
    required: (v) => !!v || "Campo requerido",
    email: (v) => /.+@.+\..+/.test(v) || "Email inválido",
};
</script>

<template>
    <PageLayout title="Contacto">
        <Head title="Contacto" />

        <!-- Hero -->
        <v-img
            :lazy-src="lazyBg1"
            :src="bgHome"
            alt="Contacto"
            class="z-index2 mt-n16 hero-with-gradient"
            cover
            height="60vh"
            width="100%"
            gradient="to bottom, rgba(39,39,39,0.35), rgba(39,39,39,0.85)"
        >
            <v-container class="fill-height d-flex align-center">
                <v-row>
                    <v-col cols="12" class="text-center">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <h6
                                class="text-subtitle-2 font-weight-600 mb-2"
                                style="
                                    letter-spacing: 2px;
                                    color: rgba(255, 255, 255, 0.9);
                                "
                            >
                                CONÉCTATE
                            </h6>
                            <h1
                                class="font-poppins text-h3 text-lg-h2 font-weight-bold text-white"
                                style="letter-spacing: -0.5px"
                            >
                                Ubicación y Contacto
                            </h1>
                            <v-responsive
                                class="mx-auto mt-4 rounded-lg"
                                style="max-width: 120px"
                            >
                                <v-divider class="bg-white pb-1 rounded-lg" />
                            </v-responsive>
                            <p
                                class="text-body-1 mt-4 mx-auto"
                                style="
                                    max-width: 500px;
                                    color: rgba(255, 255, 255, 0.9);
                                "
                            >
                                Comparte tu proyecto o idea. Te acompañaré en tu
                                proceso de crecimiento.
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <!-- Cards de contacto - Estilo About -->
        <section class="bg-grey-lighten-3 py-md-12 py-8">
            <v-container>
                <SectionHeading
                    icon="mdi-card-account-mail"
                    title-light="¿Cómo"
                    title-bold="contactarme?"
                    description="Elige la opción que prefieras para iniciar una conversación."
                />

                <v-row class="justify-center mt-8">
                    <v-col
                        v-for="(card, index) in CONTACT_CARDS"
                        :key="index"
                        cols="12"
                        md="4"
                        class="mb-4"
                    >
                        <v-card
                            variant="elevated"
                            class="elevation-10 fill-height rounded-md text-center pa-6 hover-card"
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :data-aos-delay="200 + index * 80"
                            data-aos-duration="1000"
                        >
                            <v-avatar color="primary" size="64" class="mb-4">
                                <v-icon
                                    :icon="card.icon"
                                    size="32"
                                    color="white"
                                />
                            </v-avatar>
                            <h3 class="text-h6 font-weight-bold text-dark mb-2">
                                {{ card.title }}
                            </h3>
                            <p class="text-body-2 text-muted mb-4">
                                {{ card.description }}
                            </p>
                            <a
                                :href="card.href"
                                :target="
                                    card.href.startsWith('mailto')
                                        ? '_self'
                                        : '_blank'
                                "
                                class="text-decoration-none text-primary font-weight-medium"
                            >
                                {{ card.value }}
                            </a>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Formulario - Estilo About "Podemos ayudar" -->
        <section class="bg-secondary py-md-15 py-8">
            <v-container>
                <v-row align="center" justify="space-between">
                    <v-col class="v-col-md-5 v-col-12">
                        <div class="d-flex align-center mb-5">
                            <span class="bg-success pa-2 rounded-circle mr-2" />
                            <h6
                                class="text-subtitle-1 text-white font-weight-bold"
                            >
                                Podemos ayudar
                            </h6>
                        </div>
                        <h2 class="text-h4 py-4 text-white font-weight-bold">
                            Hablemos sobre cómo puedo ayudarte a impulsar tu
                            proyecto, formación o emprendimiento.
                        </h2>
                        <v-row>
                            <v-col class="v-col-12">
                                <h6
                                    class="text-body-1 text-white"
                                    style="opacity: 0.85"
                                >
                                    Email
                                </h6>
                                <a
                                    class="text-decoration-none d-flex align-center mt-2"
                                    :href="`mailto:${CONTACT_INFO.email}`"
                                >
                                    <v-icon color="white" class="mr-2"
                                        >mdi-email</v-icon
                                    >
                                    <span
                                        class="font-weight-medium text-white"
                                        >{{ CONTACT_INFO.email }}</span
                                    >
                                </a>
                            </v-col>
                            <v-col class="v-col-12">
                                <h6
                                    class="text-body-1 text-white"
                                    style="opacity: 0.85"
                                >
                                    Ubicación
                                </h6>
                                <a
                                    class="text-decoration-none d-flex align-center mt-2"
                                    :href="CONTACT_INFO.mapLink"
                                    target="_blank"
                                >
                                    <v-icon color="white" class="mr-2"
                                        >mdi-map-marker</v-icon
                                    >
                                    <span class="font-weight-medium text-white">
                                        {{ CONTACT_INFO.address }},
                                        {{ CONTACT_INFO.city }}
                                    </span>
                                </a>
                            </v-col>
                            <v-col class="v-col-12">
                                <h6
                                    class="text-body-1 text-white"
                                    style="opacity: 0.85"
                                >
                                    Horario
                                </h6>
                                <p class="text-white mt-2 mb-0">
                                    {{ CONTACT_INFO.schedule }}
                                </p>
                            </v-col>
                        </v-row>
                    </v-col>

                    <v-col class="v-col-md-5 v-col-12">
                        <v-card
                            id="contact_form"
                            class="elevation-0 rounded-md"
                            variant="elevated"
                        >
                            <div class="pa-md-8 pa-6">
                                <h4
                                    class="text-h5 font-weight-bold text-dark mb-6"
                                >
                                    Comparte tu proyecto o idea
                                </h4>

                                <v-alert
                                    v-if="successMessage"
                                    type="success"
                                    class="mb-6"
                                    border="left"
                                    colored-border
                                >
                                    {{ successMessage }}
                                </v-alert>

                                <v-form
                                    ref="formRef"
                                    @submit.prevent="enviarFormulario"
                                >
                                    <v-row>
                                        <v-col cols="12" sm="6">
                                            <v-text-field
                                                v-model="form.firstName"
                                                label="Nombres"
                                                :rules="[rules.required]"
                                                :error-messages="
                                                    form.errors.firstName
                                                "
                                                variant="outlined"
                                                density="comfortable"
                                            />
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field
                                                v-model="form.lastName"
                                                label="Apellidos"
                                                :rules="[rules.required]"
                                                :error-messages="
                                                    form.errors.lastName
                                                "
                                                variant="outlined"
                                                density="comfortable"
                                            />
                                        </v-col>
                                        <v-col cols="12">
                                            <v-text-field
                                                v-model="form.email"
                                                label="Email"
                                                :rules="[
                                                    rules.required,
                                                    rules.email,
                                                ]"
                                                :error-messages="
                                                    form.errors.email
                                                "
                                                variant="outlined"
                                                density="comfortable"
                                            />
                                        </v-col>
                                        <v-col cols="12">
                                            <v-text-field
                                                v-model="form.subject"
                                                label="Asunto"
                                                :rules="[rules.required]"
                                                :error-messages="
                                                    form.errors.subject
                                                "
                                                variant="outlined"
                                                density="comfortable"
                                            />
                                        </v-col>
                                        <v-col cols="12">
                                            <v-textarea
                                                v-model="form.message"
                                                label="Mensaje"
                                                :rules="[rules.required]"
                                                :error-messages="
                                                    form.errors.message
                                                "
                                                variant="outlined"
                                                density="comfortable"
                                                rows="4"
                                            />
                                        </v-col>
                                        <v-col cols="12">
                                            <v-btn
                                                type="submit"
                                                color="primary"
                                                class="rounded-md"
                                                :loading="form.processing"
                                                :disabled="form.processing"
                                                loading-text="Enviando información..."
                                            >
                                                Enviar mensaje
                                            </v-btn>
                                        </v-col>
                                    </v-row>
                                </v-form>
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Mapa -->
        <section class="py-md-12 py-8 bg-grey-lighten-3">
            <v-container>
                <div
                    id="map_marker"
                    :data-aos="mobile ? 'fade-up' : 'zoom-in'"
                    data-aos-duration="1000"
                >
                    <v-card class="overflow-hidden rounded-md elevation-2">
                        <iframe
                            :src="CONTACT_INFO.mapUrl"
                            width="100%"
                            height="450"
                            style="border: 0"
                            loading="lazy"
                            allowfullscreen
                            title="Ubicación"
                        />
                    </v-card>
                </div>
            </v-container>
        </section>

        <!-- Frase inspiradora - Estilo Home -->
        <section class="py-md-12 py-8">
            <v-container>
                <v-row justify="center">
                    <v-col cols="12" md="8" class="text-center">
                        <v-icon size="40" color="grey" class="mb-4"
                            >mdi-lightbulb-on-outline</v-icon
                        >
                        <blockquote class="text-h6 font-italic text-dark">
                            "La manera más rápida de mejorar cualquier habilidad
                            es combinar un entrenamiento físico constante con un
                            entrenamiento mental constante."
                        </blockquote>
                        <p class="text-muted mt-4">
                            Cada reto es una oportunidad para innovar y crecer.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <spinner-component
            :opacity="0.9"
            :value="form.processing"
            color="primary"
            text="Enviando tu mensaje, por favor espera..."
        />
    </PageLayout>
</template>

<style scoped>
.hover-card:hover {
    transform: translateY(-4px);
    transition: transform 0.3s ease;
}
</style>
