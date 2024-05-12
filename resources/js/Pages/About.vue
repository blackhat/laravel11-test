<template>
    <Head title="เกี่ยวกับเรา" />
    <div>
        <h3>About Page</h3>
        <p>{{ message }}</p>
        <p>{{ postcode }}</p>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import SiteLayout from '@/Layouts/SiteLayout.vue'
defineOptions({ layout: SiteLayout})

    defineProps ({
        message: String,
        postcode: Number
    });
</script>
