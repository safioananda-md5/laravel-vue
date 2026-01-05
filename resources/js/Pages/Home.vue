<script setup>
import { Head } from "@inertiajs/vue3";
import DangerButton from "@/Components/DangerButton.vue";
import Navbar from "@/Layouts/Navbar.vue";

defineProps({
    nama: String,
});
</script>

<template>
    <Navbar />
    <Head title="Home" />
    <div class="mb-3">
        <img
            src="https://images.pexels.com/photos/35463798/pexels-photo-35463798.jpeg"
            class="h-[70vh] w-full object-cover shadow rounded"
            alt="img"
        />
    </div>
    <DangerButton>{{ nama }}</DangerButton>
</template>

<style scoped></style>
