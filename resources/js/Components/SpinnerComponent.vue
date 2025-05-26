<script setup>
defineProps({
    value: {
        type: Boolean,
        default: true,
        required: false,
    },
    opacity: {
        type: Number,
        default: 0.9,
    },
    color: {
        type: String,
        default: "primary",
    },
    text: {
        type: String,
        default: "Un momento por favor, estamos procesando su solicitud",
    },
});
</script>

<template>
    <div class="d-flex fill-height justify-center align-center text-center">
        <v-overlay
            class="align-center justify-center"
            :model-value="value"
            :opacity="opacity"
            :color="color"
            :persistent="true"
        >
            <div class="d-flex justify-center flex-column mb-6 text-center">
                <div class="spinner mx-auto mb-4">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <p class="text-white">
                    {{ text }}
                </p>
            </div>
        </v-overlay>
    </div>
</template>

<style>
.spinner {
    width: 150px;
    height: 150px;
    text-align: center;
    font-size: 10px;
}

/*#1acc6a*/
/*#fedc2c*/
/*#05bae5*/
.spinner > div {
    background-color: #ffffff;
    height: 100%;
    width: 6px;
    display: inline-block;
    border-radius: 50px;
    margin-left: 2px;
    margin-right: 2px;
    -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
    animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.spinner .rect2 {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
}

.spinner .rect3 {
    -webkit-animation-delay: -1s;
    animation-delay: -1s;
}

.spinner .rect4 {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
}

.spinner .rect5 {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
}

@-webkit-keyframes sk-stretchdelay {
    0%,
    40%,
    100% {
        -webkit-transform: scaleY(0.4);
    }
    20% {
        -webkit-transform: scaleY(1);
    }
}

@keyframes sk-stretchdelay {
    0%,
    40%,
    100% {
        transform: scaleY(0.4);
        -webkit-transform: scaleY(0.4);
    }
    20% {
        transform: scaleY(1);
        -webkit-transform: scaleY(1);
    }
}
</style>
