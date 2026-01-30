<script setup>
import { ref, onMounted } from "vue";
import { useDisplay } from "vuetify";
import PageLayout from "@/Layouts/PageLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import logo from "@/../images/logo.png";
import img13 from "@/../images/13.jpg";

const { smAndDown, mdAndUp } = useDisplay();

const dialog = ref(false);
const url = ref("");
const currentPage = ref(0);
const pageCount = ref(0);
const publishedArticles = ref([]);
const othersArticles = ref([]);

const tabColor = "#212121";
const ctaColor = "#212121";
const avatarBg = "#F5F5F5";

function onClose() {
    dialog.value = false;
}

function openFile(file) {
    url.value = "/storage/" + file;
    dialog.value = true;
}

function initializePublishedArticles() {
    // valores por defecto (copiados del original)
    publishedArticles.value = [
        {
            year: "2018-03",
            title: "SISTEMA DE DIALOGO HUMANO ROBOT UTILIZANDO RAZONAMIENTO BASADO EN CASOS. LA INVESTIGACIÓN APLICADA EN LA SOCIEDAD DE LA INFORMACIÓN INNOVACIÓN Y DESARROLLO TECNOLÓGICO",
            country: "Colombia",
            isbn: "9789585660847",
            ed: "CIMTED , v. , p.38 - 45  1 ,2018",
            description:
                "Socializado en el CONGRESO INTERNACIONAL SOBRE TECNOLOGÍA E INNOVACIÓN+CIENCIA E INVESTIGACIÓN. BUENOS AIRES, ARGENTINA. 2018.",
            link: "http://memoriascimted.com/wp-content/uploads/2017/01/La-investigaci%C3%B3n-aplicada-a-la-sociedad-de-la-informaci%C3%B3n.pdf",
            file: "",
        },
        {
            year: "2018-06",
            title: 'EMPRENDIMIENTO DIGITAL "SOMOS UNO" PARA LA GESTIÓN DEL SEGUIMIENTO Y CONSOLIDACIÓN DE IGLESIAS CRISTIANAS. REVISTA INNDECOM.',
            country: "Colombia",
            isbn: "2665-2358",
            ed: "SERVICIO NACIONAL DE APRENDIZAJE “SENA”. Vol.1. p.81-88. 2018.",
            description:
                "Socializado en el III SIMPOSIO DE INVESTIGACIÓN, INNOVACIÓN Y DESARROLLO TECNOLÓGICO. VALLEDUPAR, COLOMBIA. 2018.",
            link: "http://eventossinndetec.com/#/revista/inndecomm/actual",
            file: "",
        },
    ];

    axios
        .get("/api/publishedArticle/all")
        .then((res) => {
            let arrayAux = res.data || [];
            publishedArticles.value = arrayAux.concat(publishedArticles.value);
            publishedArticles.value.sort((a, b) =>
                a.year < b.year ? 1 : a.year > b.year ? -1 : 0,
            );
        })
        .catch((err) => console.log(err));
}

function initializeOthersArticles() {
    othersArticles.value = [];
    axios
        .get("/api/othersArticle/all")
        .then((res) => {
            othersArticles.value = (res.data || []).concat(
                othersArticles.value,
            );
        })
        .catch((err) => console.log(err));
}

onMounted(() => {
    initializePublishedArticles();
    initializeOthersArticles();
});

// use imported `logo` and `img13` directly in the template
</script>

<template>
    <PageLayout>
        <Head title="Articles" />

        <!-- Hero Section -->
        <section class="py-md-16 py-12">
            <v-container>
                <v-row class="align-center justify-center">
                    <v-col cols="12" md="10" class="text-center">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <v-icon size="100" color="#9E9E9E" class="mb-6"
                                >mdi-file-document-multiple-outline</v-icon
                            >
                            <h1
                                class="text-h2 font-weight-300 mb-6"
                                style="color: #212121; letter-spacing: -0.5px"
                            >
                                Artículos y Publicaciones
                            </h1>
                            <p
                                class="text-body-1"
                                style="
                                    line-height: 2;
                                    color: #757575;
                                    font-size: 1.1rem;
                                "
                            >
                                Exploración de investigaciones y artículos
                                académicos en tecnología, educación e innovación
                            </p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- Published Articles Section -->
        <section class="py-md-16 py-12" style="background-color: #fafafa">
            <v-container>
                <div class="text-center mb-16">
                    <v-icon size="48" color="#9E9E9E" class="mb-4"
                        >mdi-notebook-multiple</v-icon
                    >
                    <h2
                        class="text-h3 font-weight-300 mb-4"
                        style="color: #212121; letter-spacing: -0.5px"
                    >
                        Artículos en Revistas
                    </h2>
                    <p
                        class="text-body-1"
                        style="
                            color: #757575;
                            max-width: 700px;
                            margin: 0 auto;
                            font-size: 1rem;
                            line-height: 1.7;
                        "
                    >
                        Trabajos publicados en revistas especializadas y
                        congresos internacionales
                    </p>
                </div>

                <v-timeline reverse :dense="smAndDown">
                    <v-timeline-item
                        v-for="(item, index) in publishedArticles"
                        :key="index"
                        large
                        class="mb-8"
                    >
                        <template v-slot:icon>
                            <v-avatar :color="avatarBg" style="color: #424242">
                                <span class="font-weight-bold">{{
                                    index + 1
                                }}</span>
                            </v-avatar>
                        </template>

                        <template v-slot:opposite>
                            <span
                                class="year font-weight-500"
                                style="color: #757575"
                                >{{ item.year }}</span
                            >
                        </template>

                        <v-card
                            class="elevation-1 article-card"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                        >
                            <v-card-title class="pa-4">
                                <h3
                                    class="text-subtitle-1 font-weight-600"
                                    style="color: #212121; line-height: 1.6"
                                >
                                    {{ item.title }}
                                </h3>
                            </v-card-title>

                            <v-card-text class="pa-4 pt-0">
                                <div
                                    style="
                                        color: #757575;
                                        font-size: 0.9rem;
                                        margin-bottom: 12px;
                                    "
                                >
                                    <span class="font-weight-500">País:</span>
                                    {{ item.country }} •
                                    <span class="font-weight-500">ISBN:</span>
                                    {{ item.isbn }} •
                                    <span class="font-weight-500"
                                        >Edición:</span
                                    >
                                    {{ item.ed }}
                                </div>
                                <p
                                    class="text-body-2"
                                    style="color: #616161; line-height: 1.6"
                                >
                                    {{ item.description }}
                                </p>
                            </v-card-text>

                            <v-card-actions class="pa-4 pt-0">
                                <v-btn
                                    v-if="item.link"
                                    small
                                    text
                                    :color="ctaColor"
                                    :href="item.link"
                                    target="_blank"
                                    class="font-weight-600"
                                >
                                    <v-icon left small
                                        >mdi-external-link</v-icon
                                    >
                                    Ver publicación
                                </v-btn>
                                <v-btn
                                    v-if="item.file"
                                    small
                                    text
                                    :color="ctaColor"
                                    :href="'storage/' + item.file"
                                    target="_blank"
                                    class="font-weight-600"
                                >
                                    <v-icon left small>mdi-file-pdf-box</v-icon>
                                    Descargar
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-container>
        </section>

        <!-- Other Articles Section -->
        <section class="py-md-16 py-12">
            <v-container>
                <div class="text-center mb-16">
                    <v-icon size="48" color="#9E9E9E" class="mb-4"
                        >mdi-library-shelves</v-icon
                    >
                    <h2
                        class="text-h3 font-weight-300 mb-4"
                        style="color: #212121; letter-spacing: -0.5px"
                    >
                        Otros Artículos
                    </h2>
                    <p
                        class="text-body-1"
                        style="
                            color: #757575;
                            max-width: 700px;
                            margin: 0 auto;
                            font-size: 1rem;
                            line-height: 1.7;
                        "
                    >
                        Colección adicional de documentos y estudios de
                        investigación
                    </p>
                </div>

                <v-row class="ga-4">
                    <v-col
                        v-for="(item, index) in othersArticles"
                        :key="index"
                        cols="12"
                        sm="6"
                        md="4"
                        lg="3"
                    >
                        <v-card
                            class="other-card h-100 d-flex flex-column"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            style="transition: all 0.3s ease; min-height: 550px"
                        >
                            <v-card-title class="pa-5 pb-3">
                                <div
                                    class="d-flex align-center ga-3 align-start"
                                >
                                    <v-avatar
                                        :color="avatarBg"
                                        size="48"
                                        style="
                                            color: #424242;
                                            font-weight: bold;
                                            flex-shrink: 0;
                                        "
                                    >
                                        {{ index + 1 }}
                                    </v-avatar>
                                    <h4
                                        class="text-subtitle-1 font-weight-600"
                                        style="color: #212121; line-height: 1.4"
                                    >
                                        {{ item.title }}
                                    </h4>
                                </div>
                            </v-card-title>

                            <pdf
                                v-if="item.file"
                                :src="'/storage/' + item.file"
                                @num-pages="pageCount = $event"
                                @page-loaded="currentPage = $event"
                                height="240"
                                class="mx-5 my-3"
                                style="
                                    border: 1px solid #efefef;
                                    border-radius: 4px;
                                "
                            ></pdf>

                            <v-card-text class="flex-grow-1 pa-5 pt-0">
                                <p
                                    class="text-body-2"
                                    style="
                                        color: #616161;
                                        line-height: 1.8;
                                        font-size: 0.95rem;
                                    "
                                >
                                    {{ item.description }}
                                </p>
                            </v-card-text>

                            <v-divider
                                style="background-color: #f0f0f0"
                            ></v-divider>

                            <v-card-actions
                                class="pa-5 pt-4 d-flex align-center justify-center"
                            >
                                <v-btn
                                    icon
                                    :color="ctaColor"
                                    @click="openFile(item.file)"
                                    variant="text"
                                    size="large"
                                >
                                    <v-icon>mdi-file-eye</v-icon>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <!-- PDF Viewer Dialog -->
        <v-dialog
            v-model="dialog"
            fullscreen
            hide-overlay
            transition="dialog-bottom-transition"
        >
            <pdf-component @close="onClose" :url="url"></pdf-component>
        </v-dialog>
    </PageLayout>
</template>

<style scoped>
.text-example {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    line-clamp: 3;
}
.text-muted {
    color: #9e9e9e;
}
.article-card {
    border: 1px solid #efefef;
    background: #ffffff;
}
.other-card {
    border: 1px solid #efefef;
}
:root {
    --avatar-text: #424242;
}
.year {
    color: #757575;
}
</style>
