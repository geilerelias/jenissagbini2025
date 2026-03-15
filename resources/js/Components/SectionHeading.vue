<script setup>
/**
 * Componente reutilizable para encabezados de sección
 * Sigue el patrón visual de Home y About
 */
defineProps({
    icon: { type: String, default: "mdi-star-outline" },
    titleLight: { type: String, default: "" },
    titleBold: { type: String, default: "" },
    description: { type: String, default: "" },
});
</script>

<template>
    <div class="base-section-heading text-center mb-0">
        <div class="text-center w-25 mx-auto">
            <div
                :data-aos="$attrs['data-aos'] || 'fade-up'"
                :data-aos-delay="$attrs['data-aos-delay'] || '200'"
                data-aos-duration="1000"
                class="d-inline-flex mb-4"
            >
                <v-avatar large color="grey" size="56">
                    <v-icon dark>{{ icon }}</v-icon>
                </v-avatar>
            </div>
            <h2
                :data-aos="$attrs['data-aos'] || 'fade-up'"
                :data-aos-delay="$attrs['data-aos-delay'] || '200'"
                data-aos-duration="1000"
                class="text-h4 font-weight-bold text-dark text-primary mb-4"
            >
                <span v-if="titleLight" class="font-weight-light">
                    {{ titleLight }}
                </span>
                <br v-if="titleLight && titleBold" />
                <span
                    v-if="titleBold"
                    class="text-secondary font-weight-bold font-weight-black"
                >
                    {{ titleBold }}
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
            v-if="description"
            class="base-body body-1 ml-auto text-grey-darken-4 mb-10"
        >
            {{ description }}
        </p>
    </div>
</template>
