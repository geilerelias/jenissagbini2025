<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import { reactive, ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import SpinnerComponent from "@/Components/SpinnerComponent.vue";

const formRef = ref(null);

const form = useForm({
    firstName: "",
    lastName: "",
    email: "",
    subject: "",
    message: "",
});

const enviarFormulario = async () => {
    const { valid } = await formRef.value.validate();
    if (!valid) return;

    form.post("/enviar-correo", {
        onSuccess: () => {
            form.reset();
        },
    });
};

const rules = {
    required: (v) => !!v || "Campo requerido",
    email: (v) => /.+@.+\..+/.test(v) || "Email inválido",
};
</script>

<template>
    <page-layout title="Contacto | Jenis Sagbini">
        <!-- HERO -->
        <!--  <section class="hero">
            <v-container>
                <v-row align="center">
                    <v-col cols="12" md="7">
                        <h1 class="hero-title">Jenis Sagbini</h1>
                        <h2 class="hero-subtitle">Proyectos & Ingeniería</h2>

                        <p class="hero-text">
                            ¡Haciendo a la Gente Exitosa en un mundo cambiante!
                        </p>

                        <v-btn
                            href="#contact"
                            color="primary"
                            size="large"
                            class="mt-6"
                        >
                            Contáctame
                        </v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </section> -->

        <div class="pt-md-16 pt-5 border-top">
            <div class="border-bottom">
                <v-container>
                    <div class="mb-sm-16 mb-8 pb-md-5">
                        <h2
                            class="text-h4 font-weight-bold text-dark text-primary mb-10 aos-init aos-animate"
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <span
                                class="text-secondary text-uppercase font-weight-light"
                            >
                                Ubicación y
                            </span>
                            <br />
                            <span
                                class="ml-16 text-uppercase font-weight-black"
                            >
                                Contacto
                            </span>
                        </h2>

                        <v-row class="v-row">
                            <!-- Contacto por correo -->
                            <v-col class="v-col-md-5 v-col-12">
                                <div
                                    class="d-sm-flex d-block align-start text-md-start text-center"
                                >
                                    <v-avatar
                                        class="bg-accent mb-sm-0 mb-4"
                                        size="64"
                                        variant="flat"
                                    >
                                        <v-icon
                                            color="white"
                                            icon="mdi-mail"
                                            size="32"
                                        ></v-icon>
                                    </v-avatar>

                                    <div class="ml-md-12 ml-sm-5">
                                        <h3
                                            class="text-h5 font-weight-bold text-dark mb-2"
                                        >
                                            Contáctame por correo
                                        </h3>

                                        <p
                                            class="text-body-1 text-muted mb-md-10 mb-sm-5 mb-3"
                                        >
                                            Si tienes alguna consulta, propuesta
                                            o comentario, no dudes en
                                            escribirme. Te responderé a la mayor
                                            brevedad posible.
                                        </p>

                                        <a
                                            aria-current="page"
                                            class="router-link-active router-link-exact-active text-decoration-none text-primary text-body-1 font-weight-medium d-flex align-center justify-center justify-sm-start"
                                            href="#contact_form"
                                        >
                                            Enviar mensaje
                                            <v-icon
                                                class="ml-2"
                                                icon="mdi-arrow-right"
                                                size="26"
                                            ></v-icon>
                                        </a>
                                    </div>
                                </div>
                            </v-col>

                            <!-- Ubicación -->
                            <v-col class="v-col-md-5 v-col-12">
                                <div
                                    class="d-sm-flex d-block align-start mt-md-0 mt-3 text-md-start text-center"
                                >
                                    <v-avatar
                                        class="bg-accent mb-sm-0 mb-4"
                                        size="64"
                                        variant="flat"
                                    >
                                        <v-icon
                                            color="white"
                                            icon="mdi-map-marker"
                                            size="32"
                                        ></v-icon>
                                    </v-avatar>

                                    <div class="ml-md-12 ml-sm-5">
                                        <h3
                                            class="text-h5 font-weight-bold text-dark mb-2"
                                        >
                                            Mi ubicación
                                        </h3>

                                        <p
                                            class="text-body-1 text-muted mb-md-10 mb-sm-5 mb-3"
                                        >
                                            Puedes encontrarme en mi ubicación
                                            principal. Estaré encantada de
                                            atenderte.
                                        </p>

                                        <a
                                            aria-current="page"
                                            class="router-link-active router-link-exact-active text-decoration-none text-primary text-body-1 font-weight-medium d-flex align-center justify-center justify-sm-start"
                                            href="#map_marker"
                                        >
                                            Ver ubicación
                                            <v-icon
                                                class="ml-2"
                                                icon="mdi-arrow-right"
                                                size="26"
                                            ></v-icon>
                                        </a>
                                    </div>
                                </div>
                            </v-col>
                        </v-row>
                    </div>
                </v-container>
            </div>
        </div>

        <!-- CONTACTO -->
        <section id="contact" class="py-16 bg-white">
            <v-container>
                <v-row>
                    <!-- INFO -->
                    <v-col cols="12" md="5">
                        <h2 class="section-title mb-6">
                            ¿Cómo puedo ayudarte?
                        </h2>

                        <p class="mb-8">
                            Comparte tu proyecto o idea conmigo. Te acompañaré
                            en tu proceso de crecimiento personal y profesional.
                        </p>

                        <div class="info-card">
                            <v-icon color="primary">mdi-map-marker</v-icon>
                            <span>
                                Av. Simón Bolívar No. 6-04, Valledupar, Colombia
                            </span>
                        </div>

                        <div class="info-card">
                            <v-icon color="primary">mdi-email-outline</v-icon>
                            <span> contacto@jenissagbini.com </span>
                        </div>

                        <div class="info-card">
                            <v-icon color="primary"
                                >mdi-lightbulb-on-outline</v-icon
                            >
                            <span>
                                Liderazgo • Innovación • Educación •
                                Transformación
                            </span>
                        </div>

                        <!-- CTA -->
                        <v-card class="mt-10 pa-6 elevation-2">
                            <h3 class="mb-2">¿Tienes preguntas?</h3>
                            <p class="text-body-2">
                                Estoy aquí para ayudarte. Escríbeme y te
                                responderé lo antes posible.
                            </p>
                        </v-card>
                    </v-col>

                    <!-- FORMULARIO -->
                    <v-col cols="12" md="7">
                        <v-card
                            id="contact_form"
                            class="pa-8 rounded-xl elevation-3"
                        >
                            <h3
                                class="text-h5 font-weight-bold text-dark text-primary mb-6 aos-init aos-animate d-flex justify-center"
                                data-aos="fade-up"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                            >
                                Comparte tu proyecto o idea
                            </h3>

                            <v-form
                                ref="formRef"
                                @submit.prevent="enviarFormulario"
                            >
                                <v-row>
                                    <v-col cols="12" md="6">
                                        <v-text-field
                                            v-model="form.firstName"
                                            label="Nombres"
                                            :rules="[rules.required]"
                                            prepend-inner-icon="mdi-account"
                                            variant="outlined"
                                        />
                                    </v-col>

                                    <v-col cols="12" md="6">
                                        <v-text-field
                                            v-model="form.lastName"
                                            label="Apellidos"
                                            :rules="[rules.required]"
                                            prepend-inner-icon="mdi-account"
                                            variant="outlined"
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
                                            prepend-inner-icon="mdi-email"
                                            variant="outlined"
                                        />
                                    </v-col>

                                    <v-col cols="12">
                                        <v-text-field
                                            v-model="form.subject"
                                            label="Asunto"
                                            :rules="[rules.required]"
                                            prepend-inner-icon="mdi-briefcase"
                                            variant="outlined"
                                        />
                                    </v-col>

                                    <v-col cols="12">
                                        <v-textarea
                                            v-model="form.message"
                                            label="Mensaje"
                                            :rules="[rules.required]"
                                            prepend-inner-icon="mdi-message"
                                            variant="outlined"
                                            rows="4"
                                        />
                                    </v-col>
                                </v-row>

                                <v-btn
                                    type="submit"
                                    color="primary"
                                    block
                                    size="large"
                                    :loading="form.processing"
                                >
                                    Enviar mensaje
                                </v-btn>
                            </v-form>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- MENSAJE INSPIRADOR -->
        <section class="py-16 bg-light">
            <v-container>
                <v-row justify="center">
                    <v-col cols="12" md="8" class="text-center">
                        <h2 class="section-title">
                            Inspiración, liderazgo y visión
                        </h2>

                        <p class="mt-6 text-body-1">
                            “La manera más rápida de mejorar cualquier
                            habilidad, es combinar un entrenamiento físico
                            constante con un entrenamiento mental constante.”
                        </p>

                        <p class="mt-4 text-body-1 font-italic">
                            “Todo lo que puedas hacer o sueñes poder hacer…
                            empieza a hacerlo.”
                        </p>

                        <p class="mt-6 text-body-1">
                            Cada uno de nosotros posee dos grandes fuerzas:
                            nuestro intelecto y nuestras emociones. Trabajarlas
                            es el camino hacia el crecimiento.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- FOOTER CTA -->
        <section class="cta">
            <v-container class="text-center">
                <h2 class="text-white mt-4">
                    Transformando vidas a través de la tecnología y la educación
                </h2>

                <p class="text-grey-lighten-1 mt-4">
                    Descubre cómo alcanzar tu máximo potencial
                </p>

                <v-btn color="white" class="mt-6" href="#contact">
                    Iniciar proyecto
                </v-btn>
            </v-container>
        </section>

        <!-- ===================== -->
        <!-- UBICACIÓN Y CONTACTO -->
        <!-- ===================== -->
        <div class="contact-section pt-md-10 pt-10 border-top">
            <v-container>
                <!-- CARDS -->
                <v-row class="justify-center">
                    <!-- EMAIL -->
                    <v-col
                        cols="12"
                        md="4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <v-card class="contact-card pa-6 text-center">
                            <v-avatar class="icon-box mb-4">
                                <v-icon size="32">mdi-email-outline</v-icon>
                            </v-avatar>

                            <h3 class="card-title">Escríbeme</h3>

                            <p class="card-text">
                                Comparte tu proyecto o idea. Te responderé lo
                                antes posible.
                            </p>

                            <a
                                href="mailto:contacto@jenissagbini.com"
                                class="contact-link"
                            >
                                contacto@jenissagbini.com
                            </a>
                        </v-card>
                    </v-col>

                    <!-- UBICACIÓN -->
                    <v-col
                        cols="12"
                        md="4"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <v-card class="contact-card pa-6 text-center">
                            <v-avatar class="icon-box mb-4">
                                <v-icon size="32"
                                    >mdi-map-marker-outline</v-icon
                                >
                            </v-avatar>

                            <h3 class="card-title">Ubicación</h3>

                            <p class="card-text">
                                Av. Simón Bolívar No. 6-04<br />
                                Valledupar, Colombia
                            </p>

                            <a href="#map_marker" class="contact-link">
                                Ver en el mapa
                            </a>
                        </v-card>
                    </v-col>

                    <!-- LLAMADA / PROPÓSITO -->
                    <v-col
                        cols="12"
                        md="4"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <v-card class="contact-card pa-6 text-center">
                            <v-avatar class="icon-box mb-4">
                                <v-icon size="32">mdi-lightbulb-outline</v-icon>
                            </v-avatar>

                            <h3 class="card-title">¿Tienes una idea?</h3>

                            <p class="card-text">
                                Hablemos sobre liderazgo, innovación y
                                desarrollo personal.
                            </p>

                            <a href="#contact_form" class="contact-link">
                                Enviar mensaje
                            </a>
                        </v-card>
                    </v-col>
                </v-row>

                <!-- MAPA -->
                <div id="map_marker" class="mt-16" data-aos="zoom-in">
                    <v-card class="map-card">
                        <iframe
                            src="https://www.google.com/maps?q=Av.%20Sim%C3%B3n%20Bol%C3%ADvar%206-04%20Valledupar%20Colombia&output=embed"
                            width="100%"
                            height="450"
                            style="border: 0"
                            loading="lazy"
                            allowfullscreen
                        ></iframe>
                    </v-card>
                </div>
            </v-container>
        </div>
    </page-layout>
</template>

<style scoped>
.hero {
    background:
        linear-gradient(rgba(39, 39, 39, 0.85), rgba(39, 39, 39, 0.85)),
        url("https://images.unsplash.com/photo-1521791136064-7986c2920216");
    background-size: cover;
    background-position: center;
    color: white;
    min-height: 75vh;
    display: flex;
    align-items: center;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.5rem;
    color: #bdbdbd;
}

.hero-text {
    margin-top: 16px;
    font-size: 1.2rem;
}

.section-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: #272727;
}

.bg-light {
    background: #f8f7f7;
}

.info-card {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
    font-weight: 500;
}

.map-section {
    margin-top: 40px;
}

.cta {
    background: #272727;
    padding: 60px 0;
}

.rounded-xl {
    border-radius: 16px;
}

.contact-section {
    background: #f8f7f7;
}

/* TITULO */
.section-title {
    font-size: 2rem;
    font-weight: 600;
    color: #272727;
}

.title-strong {
    font-weight: 800;
    text-transform: uppercase;
}

.section-subtitle {
    margin-top: 10px;
    color: #7b7b7b;
}

/* CARD */
.contact-card {
    border-radius: 16px;
    transition: all 0.3s ease;
    background: #ffffff;
}

.contact-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
}

/* ICONOS (AQUI SE SOLUCIONA TU PROBLEMA) */
.icon-box {
    background: #272727; /* primary */
    color: white;
    width: 64px;
    height: 64px;
    margin: auto;
}

/* TITULOS */
.card-title {
    font-weight: 600;
    margin-bottom: 10px;
    color: #272727;
}

/* TEXTO */
.card-text {
    color: #7b7b7b;
    margin-bottom: 15px;
}

/* LINKS */
.contact-link {
    color: #272727;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s;
}

.contact-link:hover {
    opacity: 0.7;
}

/* MAPA */
.map-card {
    overflow: hidden;
    border-radius: 16px;
}

/* RESPONSIVE */
@media (max-width: 600px) {
    .section-title {
        font-size: 1.5rem;
    }
}
</style>
