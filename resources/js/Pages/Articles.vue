<script setup>
import { ref, onMounted } from "vue";
import { useDisplay } from "vuetify";
import { Link } from "@inertiajs/vue3";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import Logo from "@/Components/Logo.vue";
import SectionHeading from "@/Components/SectionHeading.vue";
import PdfViewer from "@/Components/PdfViewer.vue";
import { DEFAULT_PUBLISHED_ARTICLES } from "@/data/pages/articlesData";

import lazyBg1 from "@images/bg/lazy-home.png";
import bgHome from "@images/bg/bg-home-2.png";
import img9688 from "@images/bg/DSC_9688.jpg";
import img9732 from "@images/bg/DSC_9732.jpg";

const { mobile, smAndDown } = useDisplay();

const dialog = ref(false);
const pdfUrl = ref("");
const publishedArticles = ref([...DEFAULT_PUBLISHED_ARTICLES]);
const othersArticles = ref([]);
const consultingItems = ref([]);

function closeDialog() {
    dialog.value = false;
}

function openPdf(file) {
    pdfUrl.value = "/files/" + file;
    dialog.value = true;
}

function loadPublishedArticles() {
    publishedArticles.value = [...DEFAULT_PUBLISHED_ARTICLES].sort((a, b) =>
        (b.year || "").localeCompare(a.year || "", undefined, {
            numeric: true,
        }),
    );
}

function loadOthersArticles() {
    axios
        .get("/admin/othersArticle/all")
        .then((res) => {
            othersArticles.value = res.data || [];
        })
        .catch(() => {});
}

function loadConsultingItems() {
    consultingItems.value = [
        {
            company: "POTELCO S.A.S.",
            nit: "8020032482",
            city: "Barranquilla",
            year: "2020",
            description:
                "Apoyo a la organizacion en la adopcion y optimizacion de soluciones de Tecnologias de la Informacion alineadas con sus objetivos estrategicos. Su enfoque va mas alla de la implementacion tecnologica, integrando la mejora de procesos, la innovacion y el uso eficiente de la informacion para fortalecer la competitividad y la generacion de valor empresarial. Asimismo, la consultoria tecnologica incorporo los componentes de marketing y ventas, mediante el uso de herramientas digitales, analitica de datos y plataformas tecnologicas que permitieron mejorar la visibilidad de los productos y servicios, optimizar la gestion comercial y fortalecer la relacion con los clientes.",
        },
        {
            company: "CONSTANZA VARON STUDIO",
            nit: "001-26425886-8",
            city: "Neiva",
            year: "2020",
            description:
                "La consultoria tecnologica para esta empresa se enfoco en el uso estrategico de la tecnologia para potenciar el marketing y la comercializacion de productos y servicios, apoyando en la definicion de estrategias digitales orientadas al posicionamiento de marca y la captacion de clientes. Mediante el uso de herramientas tecnologicas, la consultoria fortalecio los procesos de promocion y venta, optimizando la experiencia del cliente y contribuyendo al crecimiento comercial de la empresa.",
        },
        {
            company: "ENACTIVA S.A.S.",
            nit: "901093224-1",
            city: "La Plata, Huila",
            year: "",
            description:
                "La consultoria tecnologica para empresa se oriento a la optimizacion de procesos organizacionales mediante el uso estrategico de tecnologias digitales, alineando las operaciones con los objetivos de negocio y las estrategias de marketing digital. A traves de la automatizacion y el uso de plataformas digitales, la consultoria fortalecio los procesos de promocion, captacion y gestion de clientes, mejorando la eficiencia operativa y el posicionamiento digital de los productos y servicios.",
        },
        {
            company: "REDONDA DEPORTES Y MARKETING",
            nit: "4168553",
            city: "Loma Redonda, Boyaca",
            year: "",
            description:
                "La consultoria tecnologica para esta empresa se enfoco en la optimizacion de los procesos logisticos, integrando soluciones digitales que mejoraron la gestion de inventarios, la distribucion y la trazabilidad, alineadas con las estrategias de marketing digital. Mediante el uso de plataformas tecnologicas y herramientas digitales, la consultoria contribuyo a fortalecer la experiencia del cliente, apoyar la promocion de productos y servicios y mejorar la eficiencia operativa en toda la cadena logistica.",
        },
        {
            company: "MASSEQ PROYECTOS E INGENIERIA S.A.S.",
            nit: "900341710",
            city: "Neiva, Huila",
            year: "",
            description:
                "La consultoria tecnologica para esta empresa se oriento al analisis y mejora de los procesos de innovacion, apoyando a la organizacion en la identificacion de oportunidades, la adopcion de tecnologias y la transformacion de ideas en productos y servicios con valor para el mercado. A traves del uso de herramientas digitales y estrategias de marketing digital, la consultoria fortalecio la validacion, promocion y posicionamiento de las iniciativas innovadoras, contribuyendo a una toma de decisiones mas informada y a una mayor competitividad en entornos digitales.",
        },
        {
            company: "PISCICOLA DEL ARIARI SAS",
            nit: "9010531471",
            city: "Lejanias, Meta",
            year: "",
            description:
                "La consultoria tecnologica para esta empresa se centro en la revision y analisis de procesos organizacionales, con el proposito de identificar oportunidades de mejora, optimizar flujos de trabajo y alinear las operaciones con los objetivos estrategicos de la organizacion. Mediante el uso de herramientas digitales y enfoques de analisis, la consultoria apoyo la estandarizacion, optimizacion y mejora continua de los procesos, contribuyendo a una mayor eficiencia operativa y a la generacion de valor para el negocio.",
        },
    ].sort((a, b) =>
        (b.year || "").localeCompare(a.year || "", undefined, {
            numeric: true,
        }),
    );
}

onMounted(() => {
    loadPublishedArticles();
    loadOthersArticles();
    loadConsultingItems();
});
</script>

<template>
    <PageLayout title="Artículos">
        <Head title="Artículos" />

        <!-- Hero -->
        <v-img
            :lazy-src="lazyBg1"
            :src="bgHome"
            alt="Artículos"
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
                                INVESTIGACIÓN
                            </h6>
                            <h1
                                class="font-poppins text-h3 text-lg-h2 font-weight-bold text-white"
                                style="letter-spacing: -0.5px"
                            >
                                Artículos y Publicaciones
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
                                Investigaciones y artículos académicos en
                                tecnología, educación e innovación
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-img>

        <!-- Artículos en revistas -->
        <section class="bg-grey-lighten-3 py-md-16 py-12">
            <div class="container">
                <div class="pricing-header px-3 pt-md-5 pb-0 mx-auto">
                    <SectionHeading
                        icon="mdi-notebook-multiple"
                        title-light="Artículos"
                        title-bold="en Revistas"
                        description="Trabajos publicados en revistas especializadas y congresos internacionales."
                    />
                </div>

                <v-timeline
                    reverse
                    :dense="smAndDown"
                    align="center"
                    justify="center"
                    class="px-3 mx-auto timeline-centered"
                >
                    <v-timeline-item
                        v-for="(item, index) in publishedArticles"
                        :key="index"
                        large
                        class="mb-8"
                    >
                        <template #icon>
                            <v-avatar color="grey">
                                <span class="font-weight-bold text-white">{{
                                    index + 1
                                }}</span>
                            </v-avatar>
                        </template>
                        <template #opposite>
                            <span class="font-weight-500 text-muted">{{
                                item.year
                            }}</span>
                        </template>

                        <v-card
                            variant="elevated"
                            class="elevation-10 rounded-md article-timeline-card"
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :data-aos-delay="200 + index * 80"
                            data-aos-duration="1000"
                        >
                            <v-card-title class="pa-4 pb-2">
                                <v-tooltip
                                    :text="item.title"
                                    location="top"
                                    max-width="400"
                                    class="article-tooltip"
                                >
                                    <template #activator="{ props }">
                                        <h3
                                            v-bind="props"
                                            class="text-subtitle-1 font-weight-600 text-dark article-title"
                                        >
                                            {{ item.title }}
                                        </h3>
                                    </template>
                                </v-tooltip>
                            </v-card-title>
                            <v-card-text class="pa-4 pt-0">
                                <div
                                    class="text-caption text-muted mb-3 article-meta"
                                >
                                    País: {{ item.country }} • ISBN:
                                    {{ item.isbn }} • {{ item.ed }}
                                </div>
                                <v-tooltip
                                    :text="item.description"
                                    location="top"
                                    max-width="450"
                                    class="article-tooltip"
                                >
                                    <template #activator="{ props }">
                                        <p
                                            v-bind="props"
                                            class="text-body-2 text-muted article-description"
                                        >
                                            {{ item.description }}
                                        </p>
                                    </template>
                                </v-tooltip>
                            </v-card-text>
                            <v-card-actions class="pa-4 pt-0">
                                <v-btn
                                    v-if="item.link"
                                    :href="item.link"
                                    target="_blank"
                                    variant="text"
                                    color="primary"
                                    prepend-icon="mdi-external-link"
                                >
                                    Ver publicación
                                </v-btn>
                                <a
                                    v-if="item.file"
                                    :href="'/files/' + item.file"
                                    target="_blank"
                                    class="text-decoration-none"
                                >
                                    <v-btn
                                        variant="text"
                                        color="primary"
                                        prepend-icon="mdi-file-pdf-box"
                                    >
                                        Descargar
                                    </v-btn>
                                </a>
                            </v-card-actions>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </div>
        </section>

        <!-- Otros artículos -->
        <section class="py-md-16 py-12">
            <v-container>
                <SectionHeading
                    icon="mdi-library-shelves"
                    title-light="Otros"
                    title-bold="Artículos"
                    description="Colección adicional de documentos y estudios de investigación."
                />

                <v-row v-if="othersArticles.length" class="mt-8">
                    <v-col
                        v-for="(item, index) in othersArticles"
                        :key="index"
                        cols="12"
                        sm="6"
                        md="4"
                    >
                        <v-card
                            variant="elevated"
                            class="elevation-10 fill-height rounded-md d-flex flex-column"
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :data-aos-delay="200 + index * 80"
                            data-aos-duration="1000"
                        >
                            <div class="pa-4 d-flex align-center ga-3">
                                <v-avatar color="primary" size="48">
                                    <v-icon color="white"
                                        >mdi-file-document-outline</v-icon
                                    >
                                </v-avatar>
                                <h4
                                    class="text-subtitle-1 font-weight-600 text-dark"
                                >
                                    {{ item.title }}
                                </h4>
                            </div>
                            <v-card-text class="flex-grow-1">
                                <p
                                    class="text-body-2 text-muted"
                                    style="line-height: 1.6"
                                >
                                    {{ item.description }}
                                </p>
                            </v-card-text>
                            <v-divider />
                            <v-card-actions class="pa-4">
                                <v-btn
                                    v-if="item.file"
                                    variant="text"
                                    color="primary"
                                    prepend-icon="mdi-file-eye"
                                    @click="openPdf(item.file)"
                                >
                                    Ver documento
                                </v-btn>
                            </v-card-actions>
                            <div class="pa-4 pt-0 d-flex align-center">
                                <Logo :size="36" color="grey" />
                                <span class="text-caption text-muted ml-2"
                                    >Jenis Sagbini</span
                                >
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
                <v-row v-else class="mt-8 justify-center">
                    <v-col cols="12" class="text-center">
                        <v-icon size="64" color="grey-lighten-1"
                            >mdi-folder-open-outline</v-icon
                        >
                        <p class="text-muted mt-4">
                            No hay otros artículos disponibles en este momento.
                        </p>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Asesorias y consultorias -->
        <section class="bg-grey-lighten-4 py-md-16 py-12">
            <v-container>
                <SectionHeading
                    icon="mdi-briefcase-outline"
                    title-light="Asesorias y"
                    title-bold="Consultorias"
                    description="Experiencia en transformacion digital con enfoque estrategico, procesos y marketing."
                />

                <v-timeline
                    :dense="smAndDown"
                    align="center"
                    justify="center"
                    class="px-3 mx-auto timeline-centered mt-8"
                >
                    <v-timeline-item
                        v-for="(item, index) in consultingItems"
                        :key="index"
                        large
                        class="mb-8"
                    >
                        <template #icon>
                            <v-avatar color="grey">
                                <span class="font-weight-bold text-white">{{
                                    index + 1
                                }}</span>
                            </v-avatar>
                        </template>
                        <template #opposite>
                            <span class="font-weight-500 text-muted">{{
                                item.year || " "
                            }}</span>
                        </template>

                        <v-card
                            variant="elevated"
                            class="elevation-10 rounded-md article-timeline-card"
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            :data-aos-delay="200 + index * 80"
                            data-aos-duration="1000"
                        >
                            <v-card-title class="pa-4 pb-2">
                                <h3
                                    class="text-subtitle-1 font-weight-600 text-dark article-title"
                                >
                                    CONSULTORIA EN TRANSFORMACION DIGITAL A LA
                                    EMPRESA {{ item.company }}.
                                </h3>
                            </v-card-title>
                            <v-card-text class="pa-4 pt-0">
                                <div
                                    class="text-caption text-muted mb-3 article-meta"
                                >
                                    NIT: {{ item.nit }} â€¢ {{ item.city }}
                                    {{ item.year ? "â€¢ " + item.year : "" }}
                                </div>
                                <p
                                    class="text-body-2 text-muted article-description"
                                >
                                    {{ item.description }}
                                </p>
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-container>
        </section>

        <!-- CTA - Estilo Home -->
        <section class="container py-md-15 py-8">
            <v-container>
                <div class="bg-accent py-sm-15 py-7 px-lg-16 px-4 rounded-lg">
                    <div class="px-sm-6 px-3">
                        <v-row align="center">
                            <v-col class="v-col-md-6 v-col-12">
                                <h2 class="text-h4 mb-4 text-white">
                                    ¿Te interesa mi investigación?
                                </h2>
                                <p
                                    class="text-body-1 text-white"
                                    style="opacity: 0.9"
                                >
                                    Comparte tus ideas o solicita más
                                    información sobre mis publicaciones.
                                </p>
                                <Link
                                    :href="route('contact')"
                                    class="text-decoration-none"
                                >
                                    <v-btn
                                        color="white"
                                        variant="flat"
                                        size="large"
                                        class="mt-4 rounded-md"
                                        prepend-icon="mdi-email"
                                    >
                                        Contáctame
                                    </v-btn>
                                </Link>
                            </v-col>
                            <v-col class="v-col-md-6 v-col-12">
                                <v-row
                                    class="d-flex align-center justify-center"
                                >
                                    <v-col class="d-flex justify-center">
                                        <v-img
                                            :src="img9688"
                                            aspect-ratio="4/5"
                                            class="rounded-lg w-40"
                                            cover
                                        />
                                    </v-col>
                                    <v-col class="d-flex justify-center">
                                        <v-img
                                            :src="img9732"
                                            aspect-ratio="4/5"
                                            class="rounded-lg w-40"
                                            cover
                                        />
                                    </v-col>
                                    <v-col
                                        cols="12"
                                        class="d-flex justify-center align-center"
                                    >
                                        <Logo color="grey" class="mr-2" />
                                        <span
                                            class="text-white font-weight-medium"
                                            >Jenis Sagbini</span
                                        >
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                    </div>
                </div>
            </v-container>
        </section>

        <v-dialog
            v-model="dialog"
            fullscreen
            hide-overlay
            transition="dialog-bottom-transition"
        >
            <PdfViewer :url="pdfUrl" @close="closeDialog" />
        </v-dialog>
    </PageLayout>
</template>

<style scoped>
.container {
    max-width: 1200px;
    margin: 0 auto;
}

.timeline-centered {
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

/* Evitar overflow y truncar texto */
.article-timeline-card {
    max-width: 100%;
    min-width: 0;
    overflow: hidden;
}

/* Asegurar que el contenido del timeline no se desborde */
:deep(.v-timeline-item__body),
:deep(.v-timeline-item__opposite) {
    max-width: 100%;
    min-width: 0;
}

.article-title {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    line-height: 1.5;
    word-wrap: break-word;
    word-break: break-word;
}

.article-meta {
    word-wrap: break-word;
    word-break: break-word;
    overflow-wrap: break-word;
}

.article-description {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    line-height: 1.6;
    word-wrap: break-word;
    word-break: break-word;
}

/* Indicar que hay más texto al hacer hover */
.article-timeline-card:hover .article-title,
.article-timeline-card:hover .article-description {
    cursor: help;
}
</style>
