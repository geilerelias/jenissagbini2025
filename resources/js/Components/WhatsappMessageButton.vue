<script setup>
import { ref, computed, watch, onMounted } from "vue";

const fab = ref(false);
const menu = ref(false);
const text = ref("");
const phone = ref("573002900321");

const apilink = computed(() => {
    const baseUrl = isMobile()
        ? "https://api.whatsapp.com/send"
        : "https://web.whatsapp.com/send";
    return `${baseUrl}?phone=${phone.value}&text=${encodeURIComponent(
        text.value
    )}`;
});

function isMobile() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(
        userAgent.toLowerCase()
    );
}

onMounted(() => {
    text.value = "Hello!";
});
</script>

<template>
    <a class="text-xs-center">
        <v-menu
            min-width="300"
            top
            v-model="menu"
            :close-on-click="false"
            :close-on-content-click="false"
            :nudge-top="60"
            offset-x
        >
            <template v-slot:activator="{ on }">
                <v-fab-transition>
                    <v-btn
                        v-on="on"
                        icon
                        rounded
                        light
                        variant="text"
                        @click="
                            fab = !fab;
                            menu = false;
                        "
                        class="mr-1 secondary--text text--lighten-2"
                    >
                        <v-icon>mdi-whatsapp</v-icon>
                    </v-btn>
                </v-fab-transition>
            </template>
            <v-card>
                <!-- Header del chat -->
                <v-list dense dark class="chat-header py-0 my-0">
                    <v-list-item>
                        <v-list-item-title>Contáctanos</v-list-item-title>
                        <v-list-item-action>
                            <v-btn
                                icon
                                @click="
                                    fab = !fab;
                                    menu = false;
                                "
                            >
                                <v-icon>mdi-close-circle</v-icon>
                            </v-btn>
                        </v-list-item-action>
                    </v-list-item>
                </v-list>

                <v-divider></v-divider>

                <!-- Contenido del chat -->
                <v-container class="chat-background">
                    <v-container>
                        <v-row wrap>
                            <v-col
                                class="text-xs-right flex-row-reverse"
                                cols="12"
                                mb="4"
                            >
                                <v-chip class="chip-chat">
                                    Hola, ¿cómo podemos ayudarte?
                                    <v-icon right>mdi-check-all</v-icon>
                                </v-chip>
                            </v-col>
                            <v-col cols="10">
                                <v-text-field
                                    single-line
                                    color="teal"
                                    class="my-input"
                                    v-model="text"
                                    outlined
                                ></v-text-field>
                            </v-col>
                            <v-col cols="2">
                                <v-btn
                                    large
                                    class="teal--text"
                                    icon
                                    :href="apilink"
                                    target="_blank"
                                >
                                    <v-icon large>mdi-send</v-icon>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-container>
            </v-card>
        </v-menu>
    </a>
</template>

<style scoped>
.my-input.v-input .v-input__slot {
    border-radius: 100px;
}

.chat-background {
    background-color: #ece5dd !important;
}

.chat-header {
    background-color: #075e54 !important;
}

.chip-chat {
    background-color: #dcf8c6 !important;
}
</style>
