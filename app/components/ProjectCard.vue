<template>
    <div class="bg-gray-800 p-5 rounded-xl max-w-xl flex gap-4">
        <img :src="image" :alt="title" class="rounded-md w-32 h-24 object-cover" />
        <div>
            <h3 class="font-semibold text-lg mb-2">
                {{ title }}
                <span v-if="isLive" class="bg-pink-600 text-white text-xs px-2 py-1 rounded-lg ml-2">
                    Live
                </span>
            </h3>
            <p class="text-gray-400 text-sm">{{ description }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
        required: true
    },
    image: {
        type: String,
        default: 'https://via.placeholder.com/120x80'
    },
    isLive: {
        type: Boolean,
        default: false
    }
})
</script>