<script setup>
import {onMounted, ref} from "vue";
import AdminDrawer from "@/base/AdminDrawer.vue";
import AdminHeader from "@/base/AdminHeader.vue";
import AdminFooter from "@/base/AdminFooter.vue";
import {Head} from "@inertiajs/vue3";
import AOS from "aos";
import Breadcrumbs from "@/base/Breadcrumbs.vue";

const drawer = ref(false);
defineProps({
    title: String,
    route: String
});

onMounted(() => {
    AOS.init();
})
</script>

<template>
    <v-app>
        <Head :title="title"/>
        <admin-drawer></admin-drawer>
        <admin-header name="app-bar"></admin-header>

        <v-main style="min-height: 300px;">
            <breadcrumbs :name="title" :route="route"></breadcrumbs>
            <slot></slot>
        </v-main>

        <admin-footer></admin-footer>

    </v-app>
</template>


<style>
.ps {
    height: calc(100vh - 64px);
}
</style>

