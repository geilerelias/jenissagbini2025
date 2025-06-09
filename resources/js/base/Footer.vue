<script setup>
import { ref, onMounted } from "vue";
import { useDisplay } from "vuetify/framework";
import { Link } from "@inertiajs/vue3";

const absolute = ref(true);

const { mobile, smAndUp, mdAndUp, md } = useDisplay();
const redesSociales = [
    {
        name: "facebook",
        icon: "mdi-facebook",
        route: "https://www.facebook.com/jenis.sagbini.9",
    },
    {
        name: "twitter",
        icon: "mdi-twitter",
        route: "https://twitter.com/JenisSagbini",
    },
    {
        name: "linkedin",
        icon: "mdi-linkedin",
        route: "https://www.linkedin.com/in/jenis-del-carmen-sagbini-ech%C3%A1vez-b66a1410a/",
    },
    {
        name: "instagram",
        icon: "mdi-instagram",
        route: "https://www.instagram.com/jenis_sagbini/",
    },
];

const services = [
    { name: "Desarrollo", route: "" },
    { name: "Auditoría", route: "" },
    { name: "Marketing", route: "" },
    { name: "Emprendimiento", route: "" },
    { name: "Capacitaciones", route: "" },
    { name: "Investigación", route: "" },
    { name: "Asesorías", route: "" },
];

const cambiarAbsolute = () => {
    absolute.value = screen.width >= 1024;
};

onMounted(() => {
    cambiarAbsolute();
});
</script>

<template>
    <v-footer  class="bg-primary"  light>
        <v-container class="py-5">
            <div class="container">
                <v-row class="">
                    <!-- Columna 1: Redes Sociales -->
                    <v-col cols="12" md="4">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-down'"
                            alt="logo"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="text-3xl mb-4"
                        >
                            Jenis Sagbini
                        </div>

                        <transition name="fade">
                            <v-responsive
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="max-width: 160px"
                                class="bg-gradient rounded-lg mb-5 mt-1"
                            >
                                <v-divider class="pb-0.5 rounded-lg" light />
                            </v-responsive>
                        </transition>
                        <div class="text-body-1 secondary--text">
                            <div
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                alt="logo name"
                                class="h-14 mt-2 mb-16 text-wrap text-justify"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                            >
                                ¡Haciendo a la Gente Exitosa en un mundo
                                cambiante!
                            </div>
                            <div class="mt-2">
                                <v-btn
                                    v-for="item in redesSociales"
                                    :key="item.name"
                                    :href="item.route"
                                    target="_blank"
                                    icon
                                    variant="text"
                                    light
                                    class="mr-1"
                                >
                                    <v-icon>{{ item.icon }}</v-icon>
                                </v-btn>
                            </div>


                        </div>
                    </v-col>

                    <!-- Columna 2: Servicios -->
                    <v-col cols="12" md="4">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-right'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="text-h6 text-lg-h5 font-weight-bold"
                        >
                            Servicios
                        </div>
                        <transition name="fade">
                            <v-responsive
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="max-width: 100px"
                                class="bg-gradient rounded-lg mb-5 mt-1"
                            >
                                <v-divider class="pb-0.5 rounded-lg" light />
                            </v-responsive>
                        </transition>
                        <div class="d-flex flex-wrap">
                            <Link
                                :href="item.route"
                                target="_blank"
                                class="w-half body-1 mb-1"
                                v-for="item in services"
                                :key="item.name"
                                :data-aos="mobile ? 'fade-up' : 'zoom-out-down'"
                                alt="logo"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                            >
                                <v-btn
                                    variant="outlined"
                                    class="text-decoration-none text-capitalize text-wrap secondary--text text--lighten-2 text-truncate"
                                >
                                    {{ item.name }}
                                </v-btn>
                            </Link>
                        </div>
                    </v-col>

                    <!-- Columna 3: Información de contacto -->
                    <v-col cols="12" md="4">
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-right'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="text-h6 text-lg-h5 font-weight-bold"
                        >
                            Información de contacto
                        </div>
                        <transition name="fade">
                            <v-responsive
                                :data-aos="mobile ? 'fade-up' : 'fade-right'"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                style="max-width: 100px"
                                class="bg-gradient rounded-lg mb-5 mt-1"
                            >
                                <v-divider class="pb-0.5 rounded-lg" light />
                            </v-responsive>
                        </transition>
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-right'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="d-flex mb-2 font-weight-bold"
                        >
                            <v-icon
                                class="secondary--text text--lighten-1 mr-1"
                            >
                                mdi-map-marker-outline
                            </v-icon>
                            <a
                                href="https://maps.google.com/?q=10.455869110432001, -73.24797745984498"
                                class="text-decoration-none secondary--text text--lighten-2"
                            >
                                Av. Simón Bolívar No. 6-04 Valledupar, Colombia
                            </a>
                        </div>
                        <div
                            :data-aos="mobile ? 'fade-up' : 'fade-right'"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="d-flex mb-2"
                        >
                            <v-icon
                                class="secondary--text text--lighten-1 mr-1"
                            >
                                mdi-email-outline
                            </v-icon>
                            <a
                                href="mailto:contacto@jenissagbini.com"
                                class="text-decoration-none secondary--text text--lighten-2"
                            >
                                contacto@jenissagbini.com
                            </a>
                        </div>
                    </v-col>
                </v-row>
            </div>
            <hr
                role="separator"
                aria-orientation="horizontal"
                class="my-3 v-divider theme--light"
            />

            <div class="text-center caption">
                © jenissagbini.com 2018-{{ new Date().getFullYear() }}. Todos
                los derechos reservados
            </div>
        </v-container>
    </v-footer>
</template>

<style scoped>
.w-half {
    width: 50% !important;
}

.bg-gradient {
    background: linear-gradient(to right, #818181, #a9a9a9, #d4d4d4);
}
</style>
