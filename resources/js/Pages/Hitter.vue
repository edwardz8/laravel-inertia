<script setup>
defineProps({
    hitter: Object 
})
</script>

<template>
    <article class="mx-auto mt-10 flex justify-center max-w-5xl border-b-2">
        <div class="text-left flex flex-col pt-5 pb-10 px-10">
            <h1 class="text-xl font-semibold mb-10">{{ hitter.team }}</h1>
            <p>{{ hitter.name }}</p>
        </div>
    </article>
</template>