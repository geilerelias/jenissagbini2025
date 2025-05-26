<script setup>
import { ref, onMounted } from "vue";
import { usePage } from "@inertiajs/vue3";
import Logo from "@/Components/Logo.vue";
import PageLayout from "@/Layouts/PageLayout.vue";
import ResponsiveImage from "@/Components/ResponsiveImage.vue";
import SpinnerComponent from "@/Components/SpinnerComponent.vue";
import dayjs from "dayjs";
import "dayjs/locale/es";

dayjs.locale("es");

const page = usePage();
const notice = ref(null);
const overlay = ref(true);

async function fetchNotice() {
    const id = page.props.id;
    const { data } = await axios.get(`/admin/notices/all`);
    // Busca la noticia por id
    notice.value = data.find((n) => n.id == id);
}

onMounted(fetchNotice);

function formatDateEs(date) {
    return dayjs(date).format("dddd, D [de] MMMM [de] YYYY");
}
function capitalizeTitle(title) {
    return title
        ? title.toLowerCase().replace(/\b\w/g, (char) => char.toUpperCase())
        : "";
}

function getArray(array) {
    if (Array.isArray(array)) {
        return array;
    }
    try {
        return JSON.parse(array);
    } catch (error) {
        console.log(error);
        return [];
    }
}

const currentUrl = window.location.href; // URL actual de la noticia

function shareOnInstagram() {
    // Instagram no permite compartir enlaces directos, así que copiamos el enlace
    navigator.clipboard.writeText(currentUrl);
    alert(
        "Enlace copiado al portapapeles. ¡Pega el enlace en tu historia o mensaje de Instagram!"
    );
}
</script>

<template>
    <PageLayout title="Noticia">
        <section class="container" v-if="notice">
            <v-container class="mb-md-15 pb-md-15 pb-md-8">
                <div class="position-relative pt-md-7">
                    <v-row justify="center">
                        <v-col md="8" cols="12">
                            <div>
                                <ul
                                    class="list-unstyled d-flex flex-wrap align-center justify-center justify-sm-start"
                                >
                                    <li>
                                        <v-chip
                                            class="badge font-weight-medium mr-4 text-capitalize"
                                            color="primary"
                                            variant="tonal"
                                            size="small"
                                        >
                                            {{ notice.city }}
                                        </v-chip>
                                    </li>
                                </ul>
                                <h2
                                    class="text-h5 font-weight-bold mt-4 text-sm-start text-center"
                                >
                                    {{ notice.title }}
                                </h2>
                            </div>
                        </v-col>
                        <v-col
                            md="4"
                            cols="12"
                            class="bg-surface position-relative z-index1 my-md-0 my-sm-5 my-3"
                        >
                            <div
                                class="d-flex align-center justify-md-end justify-sm-start justify-center"
                            >
                                <Logo color="primary"></Logo>

                                <div class="ml-5">
                                    <h4
                                        class="text-primary text-h6 font-weight-bold"
                                    >
                                        Jenis Sagbini
                                    </h4>
                                    <p
                                        class="text-muted text-subtitle-1 font-weight-regular"
                                    >
                                        Author
                                    </p>
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                </div>

                <div
                    class="py-sm-10 py-6 position-relative rounded-md overflow-hidden mb-8"
                >
                    <responsive-image
                        :src="`/storage/${notice.image}`"
                        alt="image"
                        height="480"
                        class="rounded-md border"
                        cover
                    />
                </div>
                <v-row>
                    <v-col md="8" cols="12">
                        <p class="text-muted text-xs">
                            Fecha: {{ formatDateEs(notice.date) }} a las
                        </p>

                        <p class="text-muted text-xs">
                            Hora: {{ notice.time }}
                        </p>
                        <p
                            class="text-h6 text-justify font-weight-regular mb-sm-15 mb-8"
                            v-html="notice.description"
                        ></p>
                        <v-card-actions>
                            <div
                                v-for="(link, i) in getArray(notice.links)"
                                :key="i"
                            >
                                <v-btn
                                    text
                                    color="orange"
                                    :href="link.link"
                                    target="blank"
                                >
                                    <span v-if="i === 0"> Ver mas aquí </span>
                                    <span v-else> y aquí </span>
                                </v-btn>
                            </div>
                        </v-card-actions>

                        <div>
                            <h2 class="text-h5 mb-md-11 mb-6">
                                Deja un comentario
                            </h2>
                            <v-form>
                                <v-row>
                                    <v-col sm="6" cols="12">
                                        <v-text-field
                                            label="Nombre*"
                                            required
                                        />
                                    </v-col>
                                    <v-col sm="6" cols="12">
                                        <v-text-field
                                            label="Correo electrónico*"
                                            required
                                        />
                                    </v-col>
                                    <v-col cols="12" class="pt-sm-1">
                                        <v-textarea
                                            label="Comentario*"
                                            rows="3"
                                            auto-grow
                                            required
                                        />
                                    </v-col>
                                    <v-col
                                        cols="12"
                                        class="text-sm-start text-center"
                                    >
                                        <v-btn
                                            color="primary"
                                            variant="elevated"
                                        >
                                            Publicar
                                        </v-btn>
                                    </v-col>
                                </v-row>
                            </v-form>
                        </div>
                    </v-col>
                    <v-col md="4" cols="12">
                        <v-card elevation="10" class="rounded-md bg-surface">
                            <div class="px-sm-11 px-4 pt-sm-12 pt-6">
                                <h4
                                    class="text-h4 text-dark font-weight-medium mb-4"
                                >
                                    Compartir
                                </h4>
                                <div class="share-btn">
                                    <div class="mb-4">
                                        <v-btn
                                            block
                                            color="blue darken-4"
                                            class="fb text-white"
                                            :href="`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
                                                currentUrl
                                            )}`"
                                            prepend-icon="mdi-facebook"
                                            variant="flat"
                                            target="_blank"
                                        >
                                            Facebook
                                        </v-btn>
                                    </div>
                                    <div class="mb-4">
                                        <v-btn
                                            block
                                            color="blue lighten-2"
                                            class="twitter text-white"
                                            :href="`https://twitter.com/intent/tweet?url=${encodeURIComponent(
                                                currentUrl
                                            )}`"
                                            prepend-icon="mdi-twitter"
                                            variant="flat"
                                            target="_blank"
                                        >
                                            X (Twitter)
                                        </v-btn>
                                    </div>
                                    <div class="mb-4">
                                        <v-btn
                                            block
                                            color="blue darken-1"
                                            class="linkedin text-white"
                                            :href="`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(
                                                currentUrl
                                            )}`"
                                            prepend-icon="mdi-linkedin"
                                            variant="flat"
                                            target="_blank"
                                        >
                                            LinkedIn
                                        </v-btn>
                                    </div>
                                    <div class="mb-4">
                                        <v-btn
                                            block
                                            color="blue darken-1"
                                            class="whatsapp text-white"
                                            :href="`https://wa.me/?text=${encodeURIComponent(
                                                currentUrl
                                            )}`"
                                            prepend-icon="mdi-whatsapp"
                                            variant="flat"
                                            target="_blank"
                                        >
                                            WhatsApp
                                        </v-btn>
                                    </div>
                                    <div class="mb-4">
                                        <v-btn
                                            block
                                            color="blue darken-1"
                                            class="instagram text-white"
                                            prepend-icon="mdi-instagram"
                                            variant="flat"
                                            @click="shareOnInstagram"
                                        >
                                            Instagram
                                        </v-btn>
                                    </div>
                                </div>
                            </div>
                            <div class="px-sm-11 px-4 py-sm-12 py-6 border-top">
                                <h4
                                    class="text-h6 text-dark font-weight-medium mb-4"
                                >
                                    Suscríbete a nuestro boletín
                                </h4>
                                <v-text-field
                                    placeholder="Correo electrónico"
                                    class="mb-4"
                                />
                                <v-btn
                                    block
                                    color="primary"
                                    size="large"
                                    variant="flat"
                                    >Suscribirse</v-btn
                                >
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <v-container v-else class="py-8 text-center">
            <SpinnerComponent color="primary" :opacity="0.9" />
        </v-container>
    </PageLayout>
</template>
