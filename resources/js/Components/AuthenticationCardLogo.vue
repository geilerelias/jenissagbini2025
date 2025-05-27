<script setup>
import {Link} from '@inertiajs/vue3';
import name from '@images/favicon/favicon-96x96.png';
</script>

<template>
    <Link :href="'/'">
        <div class="d-flex align-center justify-center flex-column">
            <img
                :src="name"
                alt="logo name"
                class="h-14"
                data-aos="fade-down"
                data-aos-delay="200"
                data-aos-duration="1000"
                style="height: 100px;object-fit: contain;width: 80vw;"
            />
        </div>
    </Link>
</template>
