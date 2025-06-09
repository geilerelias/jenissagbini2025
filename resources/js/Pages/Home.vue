<script setup>
import { useDisplay } from "vuetify";

import { ref, onMounted } from "vue";
import { Link } from "@inertiajs/vue3";
import dayjs from "dayjs";

import relativeTime from "dayjs/plugin/relativeTime";
import "dayjs/locale/es";

dayjs.extend(relativeTime);
dayjs.locale("es");

import PageLayout from "@/Layouts/PageLayout.vue";
import ResponsiveImage from "@/Components/ResponsiveImage.vue";
import Logo from "@/Components/Logo.vue";

import bg1 from "@images/bg/bg-home-2.png";
console.log("SRC:", bg1);
import lazyBg1 from "@images/bg/lazy-home.png";
import personaLeyendo from "@images/bg/persona_leyendo_un_libro_con_una_taza_de_te.jpg";

import user1 from "@images/bg/bg-1.jpg";
import user2 from "@images/bg/bg-1.jpg";
import user3 from "@images/bg/bg-1.jpg";
import bgAbout from "@images/bg/bg-about.jpg";

import img9688 from "@images/bg/DSC_9688.jpg";
import img9732 from "@images/bg/DSC_9732.jpg";

const { xs, mobile, smAndUp, mdAndUp, md } = useDisplay();

const blogs = ref([
    {
        title: "Cómo potenciar tu liderazgo en la era digital",
        category: "Liderazgo",
        date: "2024-06-01",
        link: "/blog/liderazgo-digital",
        image: user1,
        author: "Jenis Sagbini",
        authorAvatar: user1,
    },
    {
        title: "Innovación educativa: claves para el éxito",
        category: "Educación",
        date: "2024-05-20",
        link: "/blog/innovacion-educativa",
        image: user2,
        author: "Jenis Sagbini",
        authorAvatar: user2,
    },
    {
        title: "Emprender con propósito: mi experiencia",
        category: "Emprendimiento",
        date: "2024-05-10",
        link: "/blog/emprender-con-proposito",
        image: user3,
        author: "Jenis Sagbini",
        authorAvatar: user3,
    },
]);
const notices = ref([]);
const selectedNotice = ref(null);
const showNoticeDialog = ref(false);

async function fetchNotices() {
    try {
        const { data } = await axios.get("/admin/notices/all");
        notices.value = data;
        console.log("notices:", notices.value);
    } catch (error) {
        console.error("Error fetching notices:", error);
    }
}

onMounted(fetchNotices);

function openNoticeDialog(notice) {
    selectedNotice.value = notice;
    showNoticeDialog.value = true;
}

function formatDateEs(date) {
    return dayjs(date).format("dddd,  DD [de] MMMM [de] YYYY");
}

function capitalizeTitle(title) {
    return title
        .toLowerCase()
        .replace(/\b\w+/g, (word) => {
            const preposiciones = [
                "a", "ante", "bajo", "cabe", "con", "contra", "de", "desde", "durante", "en", "entre", "hacia", "hasta", "mediante", "para", "por", "según", "sin", "so", "sobre", "tras", "versus", "vía"
            ];
            return preposiciones.includes(word) ? word : word.charAt(0).toUpperCase() + word.slice(1);
        });
}
</script>

<template>
    <PageLayout title="Inicio">
        <v-img
            :lazy-src="lazyBg1"
            :src="bg1"
            alt="bg lg"
            class="z-index2 mt-n16"
            cover=""
            height="100vh"
            width="100%"
        >
            <v-container :fluid="md" class="fill-height">
                <v-row
                    v-if="mdAndUp"
                    class="d-flex fill-height align-center justify-start"
                >
                    <v-col class="d-flex justify-start">
                        <div
                            class="d-flex align-start justify-center flex-column mt-12"
                        >
                            <div
                                :data-aos="mobile ? 'fade-up' : 'fade-up'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                color="black"
                                size="100px"
                                class="font-poppins text-5xl text-wrap text-justify font-weight-bold"
                            >
                                Jenis Sagbini
                            </div>

                            <div
                                :data-aos="mobile ? 'fade-down' : 'fade-down'"
                                class="font-poppins text-2xl mt-1"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="
                                    font-stretch: extra-expanded !important;
                                    letter-spacing: 3px;
                                "
                            >
                                Proyectos & Ingeniería
                            </div>

                            <v-responsive
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="width: 100%"
                                class="bg-black rounded-lg mb-3 mt-1"
                            >
                                <v-divider class="pb-0.5 rounded-lg" />
                            </v-responsive>

                            <div
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                alt="logo name"
                                class="font-poppins text-1xl text-wrap text-justify"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="max-width: 300px"
                            >
                                ¡Haciendo a la Gente Exitosa en un mundo
                                cambiante!
                            </div>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <v-container
            style="max-width: 900px"
            class="container flex sm8 offset-sm2 mt-2"
        >
            <v-card flat class="pb-0">
                <v-card-text class="black--text body-1">
                    <v-container class="pb-0">
                        <p
                            class="text-justify text-black text-body-1"
                            data-aos="zoom-out-down"
                        >
                            Cuando era adolescente leía muchos libros
                            filosóficos que me hacían pensar y novelas que me
                            hacían soñar. Me encantaba usaba una libreta donde
                            anotaba todas las frases que me llamaban la atención
                            a veces escribía su autor y otras veces no…y es así,
                            que quiero compartir dos frases que marcaron mi
                            vida:
                        </p>
                        <v-row class="mt-2">
                            <v-col cols="12" md="10">
                                <div class="d-flex align-start">
                                    <v-icon
                                        class="grey--text mr-3 mt-2"
                                        data-aos="zoom-out-up"
                                    >
                                        mdi-check-circle-outline
                                    </v-icon>

                                    <div
                                        class="text-subtitle-1"
                                        data-aos="zoom-out-up"
                                    >
                                        <b>
                                            <i>
                                                “La manera más rápida de mejorar
                                                cualquier habilidad, es combinar
                                                un entrenamiento físico
                                                constante con un entrenamiento
                                                mental constante.”
                                            </i>
                                        </b>
                                        Autor desconocido.
                                    </div>
                                </div>
                                <div class="d-flex align-start mt-3">
                                    <v-icon
                                        class="grey--text mr-3 mt-2"
                                        data-aos="zoom-out-up"
                                    >
                                        mdi-check-circle-outline
                                    </v-icon>

                                    <div
                                        class="text-subtitle-1"
                                        data-aos="zoom-out-up"
                                    >
                                        <b>
                                            <i>
                                                “Todo lo que puedas hacer o
                                                sueñes poder hacer… empieza a
                                                hacerlo. En la temeridad hay
                                                genio, poder y magia.”
                                            </i>
                                        </b>
                                        Goethe
                                    </div>
                                </div>
                            </v-col>
                            <v-col
                                cols="12"
                                md="2"
                                class="d-flex justify-center align-center"
                            >
                                <v-divider
                                    class="mr-4 bg-red hidden-sm-and-down"
                                    vertical
                                ></v-divider>
                                <v-divider vertical></v-divider>
                                <v-avatar
                                    size="128"
                                    class="d-fex justify-center align-center"
                                >
                                    <v-img
                                        style="
                                            object-fit: contain;
                                            height: 100%;
                                        "
                                        :src="personaLeyendo"
                                        alt="jenis sagbini"
                                    />
                                </v-avatar>
                            </v-col>
                        </v-row>
                        <p class="text-justify mt-3 text-subtitle-1">
                            Con ello deseo decirte que cada uno de nosotros
                            tenemos dos grandezas: nuestro intelecto y nuestras
                            emociones…por lo tanto, debemos trabajar en esas
                            áreas… ¡Tenemos mucho trabajo por hacer, tenemos que
                            descubrirnos, Somos Grandes!
                        </p>
                        <p class="text-justify mt-3 text-subtitle-1">
                            Soy Jenis y deseo darte la bienvenida a este espacio
                            de experiencias y proyectos.
                        </p>
                    </v-container>
                </v-card-text>
            </v-card>
        </v-container>

        <section class="bg-grey-lighten-3">
            <div class="container">
                <div
                    class="pricing-header px-3 pt-md-5 pb-0 mx-auto text-center"
                >
                    <div
                        class="base-section-heading text-center mb-0 animate__animated:hover animate__zoomIn"
                    >
                        <div class="text-center w-25 mx-auto">
                            <div
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                class="d-inline-flex mb-4"
                            >
                                <v-avatar large color="grey" size="56">
                                    <v-icon dark>
                                        mdi-newspaper-variant-multiple-outline
                                    </v-icon>
                                </v-avatar>
                            </div>
                            <h2
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                class="text-h4 font-weight-bold text-dark text-primary mb-4"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                            >
                                <span class="font-weight-light">
                                    Noticias
                                </span>
                                <br />
                                <span
                                    class="text-secondary font-weight-bold font-weight-black"
                                >
                                    Destacadas
                                </span>
                            </h2>

                            <v-responsive
                                class="rounded-lg bg-gradient-black mx-auto mb-4"
                                style="max-width: 100px"
                            >
                                <v-divider class="pb-1 rounded-lg" light />
                            </v-responsive>
                        </div>
                        <p
                            class="base-body body-1 ml-auto text-grey-darken-4 mb-10"
                        >
                            Estas son algunas de las noticias mas destacadas.
                        </p>
                    </div>
                </div>
                <v-row>
                    <v-col
                        v-for="(notice, i) in notices"
                        :key="i"
                        cols="12"
                        sm="6"
                        md="4"
                    >
                        <Link
                            :href="route('notices.detail', { id: notice.id })"
                        >
                            <v-card
                                variant="elevated"
                                class="elevation-10 fill-height rounded-md aos-init aos-animate"
                                data-aos="fade-up"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="cursor: pointer"
                            >
                                <div
                                    class="hover-card overflow-hidden rounded-md lh-10 position-relative rounded-b-0"
                                >
                                    <ResponsiveImage
                                        height="250px"
                                        :src="`/storage/${notice.image}`"
                                        alt="image"
                                    />
                                    <div
                                        class="text-subtitle-1 position-absolute top-0 right-0 ma-2"
                                    >
                                        <v-btn
                                            density="compact"
                                            variant="plain"
                                            class="rounded-md px-2 py-2 no-effect bg-white text-primary op-1 rounded-circle"
                                            style="
                                                height: auto;
                                                min-width: auto;
                                                text-transform: capitalize;
                                                letter-spacing: 0px;
                                                z-index: 10;
                                            "
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon-tabler icon-tabler-bookmark"
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                color="black"
                                            >
                                                <path
                                                    stroke="none"
                                                    d="M0 0h24v24H0z"
                                                    fill="none"
                                                ></path>
                                                <path
                                                    d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"
                                                ></path>
                                            </svg>
                                        </v-btn>
                                    </div>
                                </div>
                                <div class="pa-4">
                                    <div class="d-flex justify-space-between">
                                        <v-chip
                                            size="small"
                                            variant="tonal"
                                            class="bg-grey text-surface rounded-md pa-2"
                                            :draggable="false"
                                            height="auto"
                                        >
                                            {{ notice.city }}
                                        </v-chip>
                                        <p class="text-muted text-xs">
                                            {{ formatDateEs(notice.date) }}
                                        </p>
                                    </div>
                                    <div class="pt-4">
                                        <a href="" class="text-decoration-none">
                                            <h4
                                                class="font-weight-medium text-dark hover-primary lh-normal text-wrap two-line-truncate"
                                            >
                                                {{ notice.title }}
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="d-flex align-center mt-5 pt-4">
                                        <Logo :size="44" color="grey" />

                                        <h4 class="text-dark ml-3">
                                            Jenis Sagbini
                                        </h4>
                                    </div>
                                </div>
                            </v-card>
                        </Link>
                    </v-col>
                </v-row>
            </div>
        </section>

        <section class="pt-md-16 pt-8 pb-md-12 pb-8 container">
            <v-container class="">
                <v-row class="align-center justify-space-between pt-md-7">
                    <v-col
                        :data-aos="mobile ? 'fade-up' : 'fade-right'"
                        class="v-col-md-5 v-col-12"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                    >
                        <div
                            :data-aos="mobile ? 'fade-up' : 'zoom-out-up'"
                            class="d-flex align-center mb-6"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <span
                                class="bg-success pa-2 rounded-circle mr-2"
                            ></span>
                            <h6
                                class="text-subtitle-1 text-dark font-weight-bold"
                            >
                                Inspiración, liderazgo y visión
                            </h6>
                        </div>
                        <h1
                            :data-aos="mobile ? 'fade-up' : 'fade-left'"
                            class="text-h5 text-lg-h4 font-weight-bold text-dark mb-6"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            Soy Jenis Sagbini: transformo vidas a través de la
                            tecnología y la educación
                        </h1>
                        <p
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            class="text-body-1 text-wrap text-muted mb-8"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            Soy una líder apasionada por la innovación, la
                            formación y el emprendimiento. Mi misión es impulsar
                            el crecimiento personal y profesional de quienes me
                            rodean, integrando tecnología, creatividad y valores
                            humanos. Descubre cómo mi experiencia y visión
                            pueden inspirarte a alcanzar tu máximo potencial.
                        </p>

                        <Link href="contact">
                            <v-btn
                                class="my-1 mx-sm-1 w-full w-sm-auto"
                                color="primary"
                                flat
                                x-large
                            >
                                Conectar conmigo
                            </v-btn>
                        </Link>
                        <Link href="about">
                            <v-btn
                                class="my-1 mx-sm-1 w-full w-sm-auto"
                                color="primary"
                                variant="outlined"
                                x-large
                            >
                                Saber más sobre mí
                            </v-btn>
                        </Link>
                        <div
                            class="d-flex align-center mt-11 mb-md-0 mb-sm-5 mb-8"
                        >
                            <div class="d-flex align-center">
                                <Logo
                                    color="secondary"
                                    class="mr-3"
                                    :data-aos="
                                        mobile ? 'fade-up' : 'fade-right'
                                    "
                                    data-aos-delay="200"
                                    data-aos-duration="1000"
                                ></Logo>
                            </div>
                            <p class="text-subtitle-1 ml-6">
                                ¿Quieres saber cómo puedo ayudarte a crecer?
                                <Link
                                    class="text-decoration-none"
                                    href="/contact"
                                >
                                    <a
                                        aria-current="page"
                                        class="text-decoration-none text-secondary"
                                    >
                                        Contáctame
                                    </a>
                                </Link>
                                <br />
                                Comparte tu proyecto o idea conmigo
                            </p>
                        </div>
                    </v-col>
                    <v-col md="6" cols="12" v-if="smAndUp" class="h-100">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-left'"
                            class="mt-12 hover-card rounded-md d-flex justify-center text-center text-lg-start"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <v-img
                                :src="bgAbout"
                                alt="about2"
                                class="zoom-in rounded-lg"
                                style="height: 70vh; width: 50vh"
                                cover
                                rounded="lg"
                            >
                                <template #placeholder>
                                    <v-skeleton-loader
                                        type="image"
                                        class="h-100 w-100 rounded-md"
                                    />
                                </template>
                            </v-img>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <section class="container">
            <v-container>
                <div
                    class="bg-accent py-sm-15 py-7 px-lg-16 px-4 mt-12 rounded-lg"
                >
                    <div class="px-sm-6 px-3">
                        <v-row>
                            <v-col class="v-col-md-6 v-col-12">
                                <h2
                                    class="text-h4 mb-6 text-sm-start text-center text-white"
                                >
                                    ¿Tienes alguna pregunta?
                                </h2>
                                <p
                                    class="text-body-1 font-weight-regular text-sm-start text-center text-white"
                                >
                                    Si tienes dudas, inquietudes o necesitas
                                    orientación sobre liderazgo, innovación,
                                    educación o desarrollo personal, estoy aquí
                                    para ayudarte. No dudes en contactarme y con
                                    gusto responderé a tus preguntas y te
                                    acompañaré en tu proceso de crecimiento.
                                </p>
                            </v-col>
                            <v-col class="v-col-md-6 v-col-12">
                                <v-row
                                    class="d-flex align-center justify-space-around"
                                >
                                    <v-col
                                        class="d-flex align-center justify-end"
                                    >
                                        <div class="hover-card">
                                            <v-img
                                                aspect-ratio="4/5"
                                                :src="img9688"
                                                alt="about1"
                                                class="zoom-in w-40 h-50"
                                                cover
                                                rounded="lg"
                                            >
                                                <template #placeholder>
                                                    <v-skeleton-loader
                                                        type="image"
                                                        class="h-100 w-100 rounded-md"
                                                    />
                                                </template>
                                            </v-img>
                                        </div>
                                    </v-col>
                                    <v-col
                                        class="d-flex align-center justify-start"
                                    >
                                        <div class="hover-card">
                                            <v-img
                                                aspect-ratio="4/5"
                                                :src="img9732"
                                                alt="about2"
                                                class="zoom-in w-40 h-50"
                                                cover
                                                rounded="lg"
                                            >
                                                <template #placeholder>
                                                    <v-skeleton-loader
                                                        type="image"
                                                        class="h-100 w-100 rounded-md"
                                                    />
                                                </template>
                                            </v-img>
                                        </div>
                                    </v-col>
                                    <v-col
                                        class="d-flex align-center justify-center"
                                        cols="12"
                                    >
                                        <div class="d-flex align-center">
                                            <a
                                                class="text-decoration-none mr-1 font-weight-bold"
                                                href="mailto:contacto@constructoravillaiii.com"
                                                target="_blank"
                                            >
                                                <v-icon color="white">
                                                    mdi-email
                                                </v-icon>
                                                Email
                                            </a>

                                            <a
                                                class="text-white text-decoration-none lh-normal"
                                                href="mailto:contacto@jenissagbini.com"
                                                rel="noopener noreferrer"
                                            >
                                                contacto@jenissagbini.com
                                            </a>
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                    </div>
                </div>
            </v-container>
        </section>
    </PageLayout>
</template>

<style scoped>
html .hover-primary {
    transition: 0.5s;
}

.lh-normal {
    line-height: normal !important;
}

.two-line-truncate {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Número de líneas */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Esqueleto visible correctamente */
::v-deep(.v-skeleton-loader__bone.v-skeleton-loader__image) {
    height: 100% !important;
    min-height: 100% !important;
}
</style>
