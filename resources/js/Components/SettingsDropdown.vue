<script setup>
import {router} from "@inertiajs/vue3";
import {ref} from "vue";
import {useDisplay} from "vuetify/framework";
import Logo from "@/Components/Logo.vue";

const {
    xsOnly,
    xs,
    mobile,
    md,
    mdAndDown,
    mdAndUp,
    lgAndUp,
    smAndUp,
    smAndDown,
} = useDisplay();

const menu = ref(false);

const items = [
    {
        href: route('login'),
        color: 'primary',
        variant: 'elevated',
        size: 'large',
        icon: 'mdi-account-lock',
        dataAos: mobile ? 'fade-up' : 'fade-right',
        dataAosDelay: 200,
        text: 'Iniciar sesión'
    },
    {
        href: route('register'),
        color: 'secondary',
        variant: 'outlined',
        size: 'large',
        icon: 'mdi-account-plus',
        dataAos: mobile ? 'fade-up' : 'fade-left',
        dataAosDelay: 300,
        text: 'Registrarse'
    }
];

const props = defineProps({
    color: {
        default: "white",
        type: String,
    },
    circle: {
        default: true,
        type: Boolean,
    },
    transparent: {
        default: false,
        type: Boolean,
    },
    homepage: {
        default: false,
        type: Boolean,
    },
    size: {
        default: 55,
        type: Number,
    },
});

function navigateTo(route) {
    router.get(route);
}

const logout = () => {
    router.post(route("logout"));
};

const goToHelp = () => {
    router.visit(route("contact"));
};

const goToHome = () => {
    router.visit(route("home"));
};
</script>

<template>

    <!-- Settings Dropdown -->

    <div v-if="$page.props.auth.user !== null" class="text-center ">
        <v-menu :close-on-content-click="false" location="end" offset-y>
            <template v-slot:activator="{ props }">
                <v-btn
                    v-if="$page.props.jetstream.managesProfilePhotos"
                    dark
                    icon
                    :color="color"
                    :size="size"
                    v-bind="props"
                    variant="tonal"
                    :data-aos="mobile ? 'fade-up' : 'fade-right'"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                >
                    <v-avatar :size="size-5">
                        <v-img
                            :alt="$page.props.auth.user.name"
                            :src="$page.props.auth.user.profile_photo_url"
                            contain
                        >
                        </v-img>
                    </v-avatar>
                </v-btn>
            </template>

            <v-card class="pa-5">
                <div class="px-8 pt-6">
                    <h6 class="text-h6 font-weight-medium">
                        Perfil del usuario
                    </h6>
                    <div class="d-flex align-center mt-4 pb-6">
                        <v-avatar color="primary" size="80">
                            <v-avatar size="76">
                                <v-img
                                    :alt="$page.props.auth.user.name"
                                    :src="
                                        $page.props.auth.user.profile_photo_url
                                    "
                                    contain
                                >
                                </v-img>
                            </v-avatar>
                        </v-avatar>
                        <div class="ml-3">
                            <h6 class="text-h6 mb-n1">
                                {{ $page.props.auth.user.name }}
                            </h6>
                            <div class="d-flex align-center mt-1">
                                <v-icon size="18">mdi-email-outline</v-icon>
                                <span
                                    class="text-subtitle-1 font-weight-regular textSecondary ml-2"
                                >
                                    {{ $page.props.auth.user.email }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <v-divider></v-divider>

                <!--Responsive Settings Options-->
                <v-list v-if="$page.props.auth !== null" dense rounded>
                    <v-list-subheader>Administración</v-list-subheader>

                    <v-list-item
                        :active="route().current('dashboard')"
                        :class="
                            route().current('dashboard')
                                ? 'active bg-primary'
                                : ''
                        "
                        :dark="route().current('dashboard')"
                        class="text-decoration-none mr-1"
                        prepend-icon="mdi-view-dashboard-outline"
                        rounded="lg"
                        title="Dashboard"
                        @click="navigateTo(route('dashboard'))"
                    >
                    </v-list-item>
                </v-list>

                <v-list v-if="$page.props.auth !== null" dense rounded>
                    <v-list-subheader>Configuraciones de usuario</v-list-subheader>

                    <v-list-item
                        :active="route().current('profile.show')"
                        :class="
                            route().current('profile.show')
                                ? 'active bg-primary'
                                : ''
                        "
                        :dark="route().current('profile.show')"
                        class="text-decoration-none mr-1"
                        rounded="lg"
                        @click="navigateTo(route('profile.show'))"
                    >
                        <template v-slot:prepend>
                            <v-icon>mdi-account-circle</v-icon>
                        </template>
                        <template v-slot:subtitle="{ subtitle }">
                            <v-list-item-title> Perfil</v-list-item-title>
                        </template>
                    </v-list-item>
                    <v-list-item
                        v-if="$page.props.jetstream.hasApiFeatures"
                        :active="route().current('api-tokens.index')"
                        :class="
                            route().current('api-tokens.index')
                                ? 'active bg-primary'
                                : ''
                        "
                        :dark="route().current('api-tokens.index')"
                        class="text-decoration-none mr-1"
                        rounded="lg"
                        @click="navigateTo(route('api-tokens.index'))"
                    >
                        <template v-slot:prepend>
                            <v-icon>mdi-lan</v-icon>
                        </template>
                        <template v-slot:subtitle="{ subtitle }">
                            <v-list-item-title> API Tokens</v-list-item-title>
                        </template>
                    </v-list-item>
                </v-list>


                <v-list dense rounded>
                    <v-list-subheader>Autenticación</v-list-subheader>
                    <v-list-item class="text-decoration-none mr-1" @click="logout">
                        <template v-slot:prepend>
                            <v-icon>mdi-logout</v-icon>
                        </template>
                        <template v-slot:subtitle="{ subtitle }">
                            <v-list-item-title>Cerrar Sección</v-list-item-title>
                        </template>
                    </v-list-item>
                </v-list>
            </v-card>
        </v-menu>
    </div>


    <!--Usuario no autenticado-->
    <div v-if="$page.props.auth.user == null" class="text-center">
        <v-menu
            v-model="menu"
            :close-on-content-click="false"
            location="end"

        >
            <template v-slot:activator="{ props }">
                <v-btn
                    icon="mdi-dots-horizontal-circle-outline"
                    :color="
                                transparent && homepage ? 'black' : 'white'
                            "
                    v-bind="props"
                    :data-aos="mobile ? 'fade-up' : 'fade-right'"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                >
                </v-btn>
            </template>
            <v-card
                :data-aos="mobile ? 'fade-up' : 'zoom-in'"
                data-aos-delay="100"
                data-aos-duration="600"
                style="min-width: 350px;max-width: 350px;"
            >
                <v-card-title>
                    <div class="d-flex flex-column align-center mt-4">
                        <v-avatar v-if="$page.props.auth !== null" size="64" class="mb-2" color="primary">
                            <v-icon size="36" color="white"
                            >mdi-account-circle
                            </v-icon
                            >
                        </v-avatar>
                        <div class="font-weight-bold text-h6 ">
                            ¡Bienvenido!
                        </div>
                    </div>
                </v-card-title>
                <v-card-text>
                    <v-list dense rounded>
                        <v-list-subheader class="text-wrap">
                            Accede a tu cuenta o regístrate para disfrutar
                            de más funciones.
                        </v-list-subheader>
                        <v-list-item class="text-decoration-none mr-1" v-for="(item, index) in items" @click="logout">
                            <template v-slot:prepend>
                                <v-icon :icon="item.icon"></v-icon>
                            </template>
                            <template v-slot:subtitle="{ subtitle }">
                                <v-list-item-title>{{ item.text }}</v-list-item-title>
                            </template>
                        </v-list-item>
                        <v-list-subheader>
                            Más opciones
                        </v-list-subheader>
                        <v-list-item
                            @click="goToHelp"
                            class="text-decoration-none mr-1"
                        >
                            <template v-slot:prepend>
                                <v-icon>mdi-help-circle-outline</v-icon>
                            </template>
                            <template v-slot:subtitle>
                                <v-list-item-title>Ayuda</v-list-item-title>
                            </template>
                        </v-list-item>
                        <v-list-item
                            @click="goToHome"
                            class="text-decoration-none mr-1"
                        >
                            <template v-slot:prepend>
                                <v-icon>mdi-home</v-icon>
                            </template>
                            <template v-slot:subtitle>
                                <v-list-item-title>Ir al inicio</v-list-item-title>
                            </template>
                        </v-list-item>

                    </v-list>
                </v-card-text>


                <v-card-actions class="justify-end mt-4">
                    <v-btn
                        variant="text"
                        color="grey"
                        @click="menu = false"
                    >
                        Cerrar
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-menu>
    </div>
</template>

<style scoped></style>
