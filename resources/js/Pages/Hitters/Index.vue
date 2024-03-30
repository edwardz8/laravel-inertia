<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    hitters: Object,
});
</script>

<template>
    <Head title="Hitters" />

    <div class="py-12">
        <h2 class="px-10 font-semibold text-xl text-gray-800">Batting Projections 2024</h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y grid grid-cols-4">
                <article class="bg-gray-300 mx-2 my-2 py-2 px-2 rounded-lg" v-for="hitter in hitters" :key="hitter.id">
                    <p class="font-bold">{{ hitter.name }}</p>
                    <p>{{ hitter.team }}</p>
                    <p>Games: {{ hitter.games }}</p>
                    <p>Hits: {{ hitter.hits }}</p>
                  <Link as="button" type="button" :href="'/hitters/' + hitter.id">
                    <button class="bg-gray-900 hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded">View</button>
                </Link>
                </article>
            </div>
        </div>
    </div>
</template>