<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="navbar navbar-light bg-light rounded mb-3 shadow-sm">
        <div class="container-fluid border-bottom py-2">
            <a class="navbar-brand">START</a>
            <form class="d-flex">
                <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form>
        </div>
        <div>
            <nav class="nav">
                <Link
                    :href="route('home')"
                    class="nav-link"
                    :class="{ 'active fw-bold': route().current('home') }"
                    >Home</Link
                >
                <Link
                    :href="route('profile')"
                    class="nav-link"
                    :class="{ 'active fw-bold': route().current('profile') }"
                    >Profile</Link
                >
            </nav>
        </div>
    </nav>
</template>

<style scoped></style>
