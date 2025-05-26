<script setup>
import { ref, watch, computed } from "vue";

const props = defineProps({
    aspectRatio: { type: [Number, String], default: undefined },
    src: { type: [String, Object], required: true },
    alt: { type: String, default: "Imagen" },
    height: { type: String, default: "250px" },
});

const isVertical = ref(false);

// Soporta objetos tipo import y strings directos
function resolveImageSource(src) {
    if (typeof src === "object" && src !== null && "default" in src) {
        return src.default;
    }
    return String(src);
}

function checkImageOrientation(url) {
    const img = new Image();
    img.src = resolveImageSource(url);
    img.onload = () => {
        isVertical.value = img.naturalHeight > img.naturalWidth;
    };
}

watch(
    () => props.src,
    (newSrc) => {
        if (newSrc) checkImageOrientation(newSrc);
    },
    { immediate: true }
);

const backgroundStyle = computed(() => ({
    backgroundImage: `url(${resolveImageSource(props.src)})`,
}));
</script>

<template>
    <div class="image-wrapper">
        <!-- Fondo difuminado solo si es vertical -->
        <v-img
            v-if="isVertical"
            class="blur-background"
            :style="backgroundStyle"
            cover
        />

        <!-- Imagen principal -->
        <v-img
            :aspect-ratio="aspectRatio"
            :src="resolveImageSource(src)"
            :alt="alt"
            :height="height"
            class="main-image zoom-in w-100"
            :cover="!isVertical"
            :contain="isVertical"
        >
            <template #placeholder>
                <v-skeleton-loader
                    type="image"
                    class="h-100 w-100 rounded-md"
                />
            </template>
        </v-img>
    </div>
</template>

<style scoped>
.image-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

/* Fondo difuminado */
.blur-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    filter: blur(10px) brightness(1);
    z-index: 0;
}

/* Imagen principal */
.main-image {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
}

/* Esqueleto visible correctamente */
::v-deep(.v-skeleton-loader__bone.v-skeleton-loader__image) {
    height: 100% !important;
    min-height: 100% !important;
}
</style>
