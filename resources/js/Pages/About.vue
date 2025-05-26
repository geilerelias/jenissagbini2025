<script setup>
import { ref } from "vue";

import PageLayout from "@/Layouts/PageLayout.vue";
import CorporateValues from "@/Components/CorporateValues.vue";
import ProfileBlocks from "@/Components/ProfileBlocks.vue";
import Logo from "@/Components/Logo.vue";
import { useDisplay } from "vuetify";
import { Link } from "@inertiajs/vue3";

import slide1 from "@images/slides/DSC_9635.PNG";
import slide2 from "@images/slides/DSC_9732.PNG";
import slide3 from "@images/slides/DSC_9785.PNG";
import slide4 from "@images/slides/DSC_9816.PNG";

import bg2 from "@images/bg/bg-1.jpg";
import bg1 from "@images/bg/bg-1.jpg";
import bgAbout from "@images/bg/bg-about.jpg";

import img9785 from "@images/bg/DSC_9785.JPG";
import img9732 from "@images/bg/DSC_9732.JPG";
import img9783 from "@images/bg/DSC_9783.JPG";
import img9874 from "@images/bg/DSC_9874.JPG";
import img9774 from "@images/bg/DSC_9774.JPG";
import img9688 from "@images/bg/DSC_9688.JPG";
import img9724 from "@images/bg/DSC_9724.JPG";
import img9625 from "@images/bg/DSC_9625.JPG";

const { mobile, xs, md, mdAndDown, mdAndUp, lgAndUp, smAndUp, smAndDown } =
    useDisplay();

const slides = ref([
    {
        title: "Fortaleza Interior",
        description:
            "Tengo una fuerza interna inquebrantable, capaz de superar cualquier desafío.",
        img: slide1,
        order: "left",
    },
    {
        title: "Compromiso y Empatía",
        description:
            "Siempre estoy dispuesta a escuchar y apoyar, con un compromiso genuino hacia los demás.",
        img: slide2,
        order: "right",
    },
    {
        title: "Visión y Creatividad",
        description:
            "Poseo una mente innovadora que combina creatividad y visión para el futuro.",
        img: slide3,
        order: "left",
    },
    {
        title: "Determinación y Liderazgo",
        description:
            "Lidero con determinación, inspirando a quienes me rodean a alcanzar grandes metas.",
        img: slide4,
        order: "right",
    },
]);

const pilaresCorporativos = [
    {
        title: "Liderazgo Transformador",
        description:
            "Impulsamos el cambio positivo a través del ejemplo, la inspiración y la formación de equipos comprometidos con la excelencia y la innovación.",
        icon: "mdi-star-circle-outline",
    },
    {
        title: "Educación Integral",
        description:
            "Promovemos el aprendizaje continuo, la formación experiencial y el desarrollo de competencias que potencian el crecimiento personal y profesional.",
        icon: "mdi-school-outline",
    },
    {
        title: "Innovación y Creatividad",
        description:
            "Fomentamos la creatividad y la adopción de nuevas tecnologías para transformar ideas en soluciones que impactan la sociedad.",
        icon: "mdi-lightbulb-on-outline",
    },
    {
        title: "Compromiso Social",
        description:
            "Trabajamos con responsabilidad y ética para contribuir al desarrollo local, apoyando proyectos que generan valor y bienestar en la comunidad.",
        icon: "mdi-account-group-outline",
    },
    {
        title: "Empoderamiento y Diversidad",
        description:
            "Inspiramos y apoyamos el liderazgo y desarrollo de personas y organizaciones, promoviendo la igualdad de oportunidades y el reconocimiento del talento sin distinción de género.",
        icon: "mdi-earth",
    },
];

const jenisSagbiniProfile = [
    {
        icon: "mdi-account-tie",
        title: "Perfil Profesional",
        tagline: "Excelencia profesional",
        description:
            "Nací en Valledupar, al norte de Colombia. Soy una profesional integral con sólida experiencia en los sectores empresarial, educativo y emprendedor. Integro tecnología, marketing e investigación para generar valor y transformación.",
        image: img9785,
        details: [
            "Apasionada por la Tecnología, el Emprendimiento, el Marketing y la Investigación",
            "Estoy convencida de que la base tecnológica es clave para la viabilidad comercial de los proyectos",
            "Me desempeño como docente, investigadora, emprendedora y líder académica",
            "Creo firmemente en el poder de la formación experiencial",
        ],
    },
    {
        icon: "mdi-school",
        title: "Formación Académica",
        tagline: "Formación continua",
        description:
            "Mi formación universitaria y de posgrado tiene un enfoque estratégico, tecnológico y comercial que impulsa mi liderazgo y visión integradora.",
        image: img9625,
        details: [
            "Ingeniera de Sistemas – Fundación Universitaria San Martín",
            "Especialista en Gerencia de Mercadeo – Universidad Jorge Tadeo Lozano (Bogotá)",
            "Especialista en Auditoría de Sistemas – Universidad Francisco de Paula Santander (Ocaña)",
            "Magíster en Marketing y Dirección Comercial – Instituto Eurothecnology (España)",
            "Magíster en Gobierno de Tecnologías de la Información – Universidad Francisco de Paula Santander (Ocaña)",
        ],
    },
    {
        icon: "mdi-school-outline",
        title: "Perfeccionamiento Continuo",
        tagline: "Perfeccionamiento constante",
        description:
            "Estoy comprometida con la excelencia profesional y la actualización constante, por eso he realizado múltiples cursos y diplomados en áreas clave.",
        image: img9774,
        details: [
            "Transformación Digital de Negocios",
            "Curso de Marca Personal – MINTIC",
            "Emprendimientos Digitales – MINTIC",
            "Fortalecimiento de las Competencias Didácticas Docentes para la Formación por Proyectos – SENA",
            "Estructuración de Proyectos de Investigación – SENA",
            "Programa de Fortalecimiento de Capacidades para la Formulación de Proyectos – SENA",
            "Diplomado en Docencia Universitaria – Uni-Andina",
            "Diplomado en Gerencia Comercial – Uni-Sabana",
            "Diplomado en Gerencia Facilitadora – Uni-Sabana",
        ],
    },
    {
        icon: "mdi-briefcase-outline",
        title: "Experiencia Profesional",
        tagline: "Experiencia consolidada",
        description:
            "Cuento con una destacada trayectoria en el sector privado y académico, con más de 16 años en COCA-COLA FEMSA, donde consolidé mi visión empresarial.",
        image: img9688,
        details: [
            "Analista de Sistemas – CICOLAC",
            "Analista de Sistemas – COCA-COLA FEMSA",
            "Analista de Logística – COCA-COLA FEMSA",
            "Jefe de Refrigeración – COCA-COLA FEMSA",
            "Jefe de Recursos Humanos – COCA-COLA FEMSA",
            "Jefe de Mercadeo – COCA-COLA FEMSA",
        ],
    },
    {
        icon: "mdi-rocket-launch",
        title: "Proyectos Emprendedores",
        tagline: "Innovación emprendedora",
        description:
            "Como emprendedora, he liderado y desarrollado iniciativas comerciales innovadoras que reflejan mi pasión por el desarrollo económico local.",
        image: img9874,
        details: [
            "Humus del Cesar S.A.S.",
            "Practika Boutique",
            "Hostal Valledupar",
        ],
    },
    {
        icon: "mdi-school-outline",
        title: "Trayectoria Académica",
        tagline: "Docencia transformadora",
        description:
            "Me apasiona la enseñanza. He sido tutora, docente y coordinadora académica en múltiples instituciones, promoviendo la educación con enfoque práctico.",
        image: img9732,
        details: [
            "Tutora universitaria – Fundación Universitaria San Martín",
            "Docente universitaria – Fundación Universitaria San Martín",
            "Coordinadora de Posgrados de Ingeniería y Tecnológicas – Universidad Popular del Cesar",
            "Instructora de Etapa Productiva – SENA",
        ],
    },
    {
        icon: "mdi-microscope",
        title: "Liderazgo en Investigación",
        tagline: "Investigación avanzada",
        description:
            "Motivo el pensamiento crítico y he liderado semilleros de investigación con reconocimiento nacional e internacional.",
        image: img9724,
        details: [
            "Liderazgo en semilleros SISE y SICOMUNICA",
            "Formulación y acompañamiento en proyectos de investigación",
            "Participación en congresos nacionales e internacionales",
        ],
    },
    {
        icon: "mdi-trophy-outline",
        title: "Premios y Reconocimientos",
        tagline: "Reconocimientos destacados",
        description:
            "He sido galardonada en distintas etapas de mi carrera por mi desempeño académico, profesional y docente.",
        image: img9783,
        details: [
            "Primer Puesto en Olimpiadas Colombianas de Matemáticas Universitarias – Universidad Antonio Nariño",
            "Estudiante Distinguida – Fundación Universitaria San Martín",
            "Mejor Empleada 2007 – COCA-COLA FEMSA",
            "Reconocimiento por Desempeño como Auditor de Calidad 2008 – COCA-COLA FEMSA",
            "Docente con Mayor Puntaje de Evaluación – Fundación Universitaria San Martín",
            'El 23 Dic 2023, recibí por parte de la Universidad Popular del Cesar el Reconocimiento Especial denominado: "Extensión Meritoria" por elaboración de proyectos innovadores de Extensión.',
        ],
    },
];
</script>

<template>
    <page-layout title="Inicio">
        <section class="pb-md-15 pb-0 mt-5">
            <v-carousel
                :data-aos="mobile ? 'fade-up' : 'fade-up'"
                aspect-ratio="16/9"
                class="rounded-lg mx-auto max-width-xl"
                cycle
                data-aos-delay="200"
                data-aos-duration="1000"
                data-aos-mirror="true"
                height="80vh"
                hide-delimiter-background
                hide-delimiters
                rounded
            >
                <template v-slot:prev="{ props }">
                    <v-btn
                        color="white"
                        icon="mdi-chevron-left"
                        variant="text"
                        @click="props.onClick"
                    >
                    </v-btn>
                </template>
                <template v-slot:next="{ props }">
                    <v-btn
                        color="white"
                        icon="mdi-chevron-right"
                        variant="text"
                        @click="props.onClick"
                    >
                    </v-btn>
                </template>

                <v-carousel-item v-for="item in slides" :key="item.id">
                    <v-sheet
                        class="d-flex rounded-lg fill-height bg-gradient"
                        color="grey"
                    >
                        <v-container
                            :class="
                                mobile ? 'd-flex align-end justify-center' : ''
                            "
                            class="ml-3 text-black fill-height my-0 py-0 container"
                        >
                            <v-row
                                :class="
                                    mobile
                                        ? 'align-end justify-center'
                                        : item.order === 'left'
                                        ? 'flex-row'
                                        : 'flex-row-reverse'
                                "
                                class="d-flex fill-height my-0 py-0"
                            >
                                <!-- Columna de texto -->
                                <v-col
                                    v-if="!mobile"
                                    :class="[
                                        mdAndUp
                                            ? 'align-center justify-start'
                                            : 'align-end justify-center',
                                    ]"
                                    class="d-flex fill-height my-0 py-0"
                                >
                                    <div
                                        :class="
                                            !mobile
                                                ? 'align-start justify-center mt-12'
                                                : 'align-end justify-center mb-4 bg-gray-transparent'
                                        "
                                        class="d-flex flex-column p-4 rounded-lg"
                                    >
                                        <div
                                            :data-aos="
                                                mobile
                                                    ? 'fade-up'
                                                    : 'fade-right'
                                            "
                                            class="font-poppins font-weight-bold text-4xl"
                                            color="black"
                                            data-aos-delay="200"
                                            data-aos-duration="1000"
                                            size="100px"
                                        >
                                            {{ item.title }}
                                        </div>

                                        <div
                                            :data-aos="
                                                mobile ? 'fade-up' : 'fade-up'
                                            "
                                            class="mt-5 font-montserrat text-2xl justify-text text-wrap"
                                            data-aos-delay="200"
                                            data-aos-duration="1000"
                                        >
                                            {{ item.description }}
                                        </div>
                                    </div>
                                </v-col>

                                <!-- Texto en frente en modo móvil -->

                                <v-img
                                    v-if="mobile"
                                    :src="item.img"
                                    class="d-flex fill-height justify-end align-bottom"
                                    style="
                                        width: 100%;
                                        position: absolute;
                                        bottom: 0;
                                    "
                                >
                                    <v-container
                                        class="d-flex fill-height flex-column justify-end align-top"
                                    >
                                        <div
                                            class="bg-gray-transparent rounded-xl"
                                        >
                                            <div
                                                :data-aos="
                                                    mobile
                                                        ? 'fade-up'
                                                        : 'fade-right'
                                                "
                                                class="font-signature text-4xl text-center"
                                                data-aos-delay="200"
                                                data-aos-duration="1000"
                                                size="100px"
                                            >
                                                {{ item.title }}
                                            </div>

                                            <div
                                                :data-aos="
                                                    mobile
                                                        ? 'fade-up'
                                                        : 'fade-up'
                                                "
                                                class="mt-5 font-montserrat text-wrap text-center"
                                                data-aos-delay="200"
                                                data-aos-duration="1000"
                                                style="
                                                    max-width: 300px;
                                                    margin: 0 auto;
                                                "
                                            >
                                                {{ item.description }}
                                            </div>
                                        </div>
                                    </v-container>
                                </v-img>

                                <!-- Columna de imagen -->
                                <v-col
                                    v-if="!mobile"
                                    :class="[
                                        mdAndUp
                                            ? 'align-center justify-center'
                                            : 'align-end justify-center',
                                    ]"
                                    class="d-flex fill-height my-0 py-0"
                                >
                                    <v-img
                                        :src="item.img"
                                        class="rounded-lg"
                                        style="
                                            max-height: 100%;
                                            max-width: 100%;
                                        "
                                    ></v-img>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-sheet>
                </v-carousel-item>
            </v-carousel>
        </section>

        <section class="container py-md-15 py-8">
            <div v-for="(item, index) in jenisSagbiniProfile" :key="index">
                <ProfileBlocks
                    :order="index % 2 !== 0 ? 'last' : 'first'"
                    :icon="item.icon"
                    :image="item.image"
                    :title="item.title"
                    :subtitle="item.tagline"
                    :description="item.description"
                    :items="item.details"
                />
            </div>

            <v-container class="py-6 py-lg-12 text-center">
                <v-icon size="30" class="mb-2"
                    >mdi-lightbulb-on-outline
                </v-icon>
                <blockquote class="text-h6 font-italic">
                    “¡Haciendo a la Gente Exitosa en un mundo cambiante!”
                </blockquote>
                <div>— Jenis Sagbini</div>
            </v-container>
        </section>

        <section class="bg-secondary bg-dark py-md-12 py-5">
            <div class="py-md-10 py-sm-5">
                <v-container class="">
                    <v-row class="justify-space-between">
                        <v-col
                            :data-aos="mobile ? 'fade-up' : 'fade-up'"
                            class="v-col-md-4 v-col-12"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                        >
                            <h2
                                class="text-h4 text-dark font-weight-bold pr-sm-10"
                            >
                                Misión y visión
                            </h2>
                            <p class="text-body-1 text-muted my-4">
                                Soy una líder en transformación educativa,
                                tecnológica y empresarial, con un propósito
                                claro: empoderar a las personas para que
                                alcancen el éxito en un mundo cambiante. Mi
                                enfoque combina estrategia, formación y
                                disrupción con impacto humano.
                            </p>
                        </v-col>
                        <v-col class="v-col-md-7 v-col-12">
                            <v-row
                                class="d-flex flex-column flex-sm-row justify-content-around justify-center"
                            >
                                <v-col
                                    class="col-12 col-sm-12 col-md-6 col-lg-5"
                                >
                                    <v-card
                                        :data-aos="
                                            mobile ? 'fade-up' : 'fade-right'
                                        "
                                        class="mr-1 fill-height rounded-lg"
                                        data-aos-delay="400"
                                        data-aos-duration="1000"
                                    >
                                        <v-card-title>
                                            <h4
                                                class="d-flex justify-start text-h4 font-weight-black text-primary pt-2 fill-width"
                                                style="width: 100%"
                                            >
                                                Misión
                                            </h4>
                                        </v-card-title>
                                        <v-card-text>
                                            <p
                                                class="mx-2 my-3 text-subtitle-1 text-justify"
                                            >
                                                Guiar procesos de transformación
                                                personal y profesional a través
                                                del conocimiento, la innovación
                                                y la formación estratégica.
                                                Promover el liderazgo, la
                                                adaptabilidad y el pensamiento
                                                crítico como pilares para el
                                                éxito sostenible en contextos
                                                dinámicos y globales.
                                            </p>
                                        </v-card-text>
                                    </v-card>
                                </v-col>

                                <v-col
                                    class="col-12 col-sm-12 col-md-6 col-lg-5 mt-4 mt-sm-0"
                                >
                                    <v-card
                                        :data-aos="
                                            mobile ? 'fade-up' : 'fade-left'
                                        "
                                        class="mr-1 fill-height rounded-lg"
                                        data-aos-delay="400"
                                        data-aos-duration="1000"
                                    >
                                        <v-card-title>
                                            <h4
                                                class="text-primary d-flex justify-start rounded-lg text-h4 font-weight-bold font-weight-black pt-2 white--text fill-width"
                                                style="width: 100%"
                                            >
                                                Visión
                                            </h4>
                                        </v-card-title>
                                        <v-card-text class="v-card__text">
                                            <p
                                                class="mx-2 my-3 text-subtitle-1 text-justify"
                                            >
                                                Ser una referente
                                                latinoamericana en formación
                                                disruptiva y transformación
                                                empresarial, generando modelos
                                                que integren tecnología,
                                                educación y propósito humano.
                                                Consolidar redes de impacto que
                                                permitan a individuos y
                                                organizaciones adaptarse, crecer
                                                y liderar el cambio hacia un
                                                futuro exitoso.
                                            </p>
                                        </v-card-text>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-container>
            </div>
        </section>

        <div class="bg-primary py-md-15 py-8">
            <div class="py-md-15 py-sm-8">
                <v-container>
                    <v-row class="justify-center">
                        <v-col class="v-col-sm-8 v-col-12">
                            <div class="text-center">
                                <div
                                    :data-aos="
                                        mobile ? 'fade-up' : 'fade-right'
                                    "
                                    :data-aos-delay="200"
                                    class="d-flex align-center mb-5 justify-center"
                                    data-aos-duration="1000"
                                >
                                    <span
                                        class="bg-success pa-2 rounded-circle mr-2"
                                    ></span>
                                    <h6 class="text-subtitle-1 text-dark">
                                        Valores
                                    </h6>
                                </div>
                                <h2
                                    :data-aos="mobile ? 'fade-up' : 'fade-left'"
                                    class="text-h4 font-weight-bold text-dark mb-md-12 mb-6"
                                    data-aos-delay="200"
                                    data-aos-duration="1000"
                                >
                                    Principios que guían la vida y carrera de
                                    Jenis
                                </h2>
                            </div>
                        </v-col>
                    </v-row>
                    <v-row class="justify-center">
                        <v-col
                            v-for="(pilar, index) in pilaresCorporativos"
                            :key="index"
                            class="v-col-sm-6 v-col-md-4 v-col-12"
                        >
                            <v-card
                                :data-aos="mobile ? 'fade-up' : 'fade-up'"
                                class="elevation-0 text-center py-md-15 py-6 px-md-8 px-4 rounded-md aos-init aos-animate"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                            >
                                <v-avatar color="secondary" size="68">
                                    <v-icon :icon="pilar.icon" size="40">
                                    </v-icon>
                                </v-avatar>
                                <h4
                                    class="text-h5 text-dark font-weight-bold my-sm-6 my-4 px-md-6"
                                >
                                    {{ pilar.title }}
                                </h4>
                                <p class="text-muted mb-sm-6 mb-4">
                                    {{ pilar.description }}
                                </p>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>
            </div>
        </div>

        <div class="py-md-15 py-8 container">
            <div class="py-md-15 py-sm-8">
                <v-container class="">
                    <v-row class="justify-center">
                        <v-col class="v-col-md-8 v-col-12">
                            <div class="text-center">
                                <div
                                    :data-aos="
                                        mobile ? 'fade-up' : 'zoom-out-up'
                                    "
                                    class="rounded-lg mb-md-15 d-flex justify-center"
                                    data-aos-delay="200"
                                    data-aos-duration="1000"
                                >
                                    <v-img
                                        :src="bgAbout"
                                        alt=""
                                        class="img-fluid rounded-xl"
                                        rounded
                                        cover
                                        style="max-width: 400px"
                                    />
                                </div>
                                <p
                                    class="mb-sm-11 mb-6 text-h5 font-weight-medium"
                                >
                                    Cada reto es una oportunidad para innovar y
                                    crecer. Mi pasión es inspirar a otros a
                                    alcanzar su máximo potencial, integrando
                                    tecnología, educación y liderazgo. Juntos,
                                    podemos transformar el mundo y lograr
                                    grandes cosas. ¡Atrévete a soñar y a
                                    construir el futuro!
                                </p>
                                <div class="d-flex justify-center align-center">
                                    <Logo color="grey"></Logo>
                                </div>
                                <h3
                                    class="text-body-1 font-weight-bold text-dark"
                                >
                                    Jenis Sagbini
                                </h3>
                                <p class="lh-normal text-muted">
                                    Ingeniera, educadora y líder en innovación
                                </p>
                            </div>
                        </v-col>
                    </v-row>
                </v-container>
            </div>
        </div>

        <div class="bg-secondary py-md-15 py-8">
            <div class="container py-md-8 py-sm-5">
                <v-container class="">
                    <v-row class="align-center justify-space-between">
                        <v-col class="v-col-md-5 v-col-12">
                            <div>
                                <div class="d-flex align-center mb-5">
                                    <span
                                        class="bg-success pa-2 rounded-circle mr-2"
                                    >
                                    </span>
                                    <h6
                                        class="text-subtitle-1 text-white font-weight-bold"
                                    >
                                        Podemos ayudar
                                    </h6>
                                </div>
                                <h2 class="text-h4 py-6 text-white">
                                    Hablemos sobre cómo Jenis Sagbini puede
                                    ayudarte a impulsar tu proyecto, formación o
                                    emprendimiento.
                                </h2>
                                <v-row>
                                    <v-col class="v-col-12">
                                        <h6
                                            class="text-body-1 text-muted font-weight-regular"
                                        >
                                            Email
                                        </h6>
                                        <div class="d-flex align-center">
                                            <a
                                                class="text-decoration-none"
                                                href="mailto:contacto@jenissagbini.com"
                                                target="_blank"
                                            >
                                                <v-icon color="white"
                                                    >mdi-email
                                                </v-icon>
                                            </a>

                                            <a
                                                class="font-weight-medium text-h5 text-white ml-2"
                                                href="mailto:contacto@jenissagbini.com"
                                            >
                                                contacto@jenissagbini.com
                                            </a>
                                        </div>
                                    </v-col>
                                    <v-col class="v-col-12">
                                        <h6
                                            class="text-body-1 text-muted font-weight-regular"
                                        >
                                            Localización
                                        </h6>
                                        <div class="d-flex">
                                            <a
                                                class="text-decoration-none"
                                                href="https://maps.google.com/?q=Av.+Simón+Bolívar+No.+6-04+Valledupar,+Co"
                                                target="_blank"
                                            >
                                                <v-icon color="white"
                                                    >mdi-map-marker
                                                </v-icon>
                                            </a>
                                            <h5
                                                class="font-weight-medium text-h5 text-white ml-2"
                                            >
                                                Av. Simón Bolívar No. 6-04
                                                Valledupar, Co
                                            </h5>
                                        </div>
                                    </v-col>
                                </v-row>
                            </div>
                        </v-col>

                        <v-col class="v-col-md-5 v-col-12">
                            <v-card
                                class="elevation-0 rounded-md"
                                variant="elevated"
                            >
                                <div class="pa-md-11 pa-sm-8 pa-4">
                                    <h4
                                        class="text-dark text-h4 font-weight-bold mb-7"
                                    >
                                        Iniciar el proyecto
                                    </h4>
                                    <v-form class="project-form" novalidate="">
                                        <v-row class="v-row">
                                            <v-col
                                                class="v-col-sm-6 v-col-12 pb-1"
                                            >
                                                <v-text-field
                                                    density="comfortable"
                                                    label="Nombres"
                                                    variant="outlined"
                                                >
                                                </v-text-field>
                                            </v-col>
                                            <v-col
                                                class="v-col-sm-6 v-col-12 pb-1"
                                            >
                                                <v-text-field
                                                    density="comfortable"
                                                    label="Apellidos"
                                                    variant="outlined"
                                                >
                                                </v-text-field>
                                            </v-col>
                                            <v-col
                                                class="v-col-sm-12 v-col-12 pb-1"
                                            >
                                                <v-text-field
                                                    color="primary"
                                                    density="comfortable"
                                                    label="Email"
                                                    variant="outlined"
                                                ></v-text-field>
                                            </v-col>
                                            <v-col
                                                class="v-col-sm-12 v-col-12 pb-1"
                                            >
                                                <v-text-field
                                                    color="primary"
                                                    density="comfortable"
                                                    label="País o región"
                                                    variant="outlined"
                                                ></v-text-field>
                                            </v-col>
                                            <v-col
                                                class="v-col-sm-12 v-col-12 pb-1"
                                            >
                                                <v-textarea
                                                    color="primary"
                                                    density="comfortable"
                                                    label="Cuéntanos sobre el proyecto"
                                                    variant="outlined"
                                                ></v-textarea>
                                            </v-col>
                                            <v-col
                                                class="v-col-12 mb-md-3 mb-1"
                                            >
                                                <div class="ml-n2">
                                                    <div
                                                        class="d-flex align-center"
                                                    >
                                                        <v-checkbox-btn></v-checkbox-btn>
                                                        <div
                                                            class="text-muted pl-2"
                                                        >
                                                            He leído y acepto
                                                            los
                                                            <a
                                                                aria-current="page"
                                                                class="router-link-active router-link-exact-active opacity-1 text-decoration-none text-primary"
                                                                href="/"
                                                            >
                                                                Términos y
                                                                Condiciones
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </v-col>
                                            <v-col class="v-col v-col-12 pt-0">
                                                <v-btn
                                                    block=""
                                                    class="bg-primary rounded-md"
                                                    size="large"
                                                    style="
                                                        text-transform: capitalize;
                                                        letter-spacing: 0px;
                                                    "
                                                    variant="flat"
                                                    >enviar consulta
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                    </v-form>
                                </div>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>
            </div>
        </div>
    </page-layout>
</template>

<style scoped>
.max-width-xl {
    margin: 0 auto;
    max-width: 1200px !important;
}

.position-relative {
    position: relative;
}

.position-absolute {
    position: absolute;
}

.bg-gray-transparent {
    background-color: rgba(
        128,
        128,
        128,
        0.9
    ); /* Gris con 50% de transparencia */
    padding: 16px; /* Espaciado interno */
    border-radius: 8px; /* Bordes redondeados */
}

.bg-gradient {
    background: radial-gradient(
        circle,
        #d9d9d9,
        #808080
    ); /* Gradiente radial del centro hacia los lados */
    height: 100%; /* Asegura que el gradiente cubra todo el contenedor */
    width: 100%;
}
</style>
