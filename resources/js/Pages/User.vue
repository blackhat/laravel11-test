<template>
    <Head title="ข้อมูลผู้ใช้" />


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in users.data" :key="item.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ item.id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ item.name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ item.email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ new Date(item.created_at).toLocaleDateString() }}
                        <!-- {{ new Date(item.created_at).toLocaleDateString('th-TH') }} -->
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <Pagination :links="users.links"/>
    </div>

</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import SiteLayout from '@/Layouts/SiteLayout.vue'
import Pagination from '@/Components/Pagination.vue'
defineOptions({ layout: SiteLayout})

defineProps ({
        // users: Array,
        users: Object,
    });

</script>

