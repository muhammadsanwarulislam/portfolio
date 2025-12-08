<template>
    <div class="bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700 hover:border-teal-500/30 transition-all duration-300 hover:transform hover:-translate-y-2 h-full flex flex-col">
        <!-- Project Image -->
        <div class="relative overflow-hidden">
            <img 
                :src="image" 
                :alt="title" 
                class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110"
            />
            
            <!-- Live Badge -->
            <div v-if="isLive" 
                 class="absolute top-3 right-3 bg-green-500 text-white text-xs px-3 py-1 rounded-full font-semibold">
                Live
            </div>
        </div>
        
        <!-- Project Content -->
        <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-xl font-bold mb-3 text-white">{{ title }}</h3>
            <p class="text-gray-400 mb-6 flex-1">{{ description }}</p>
            
            <!-- Technologies -->
            <div class="mb-6 flex flex-wrap gap-2">
                <span 
                    v-for="tech in technologies" 
                    :key="tech"
                    class="px-3 py-1 bg-gray-900 text-gray-300 text-xs rounded-full"
                >
                    {{ tech }}
                </span>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex gap-3 mt-auto">
                <a 
                    v-if="liveLink"
                    :href="liveLink"
                    target="_blank"
                    class="flex-1 px-4 py-2 bg-teal-600 hover:bg-teal-700 text-white rounded-lg text-center font-medium transition duration-300"
                >
                    Live Demo
                </a>
                <a 
                    v-if="githubLink"
                    :href="githubLink"
                    target="_blank"
                    class="flex-1 px-4 py-2 border border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white rounded-lg text-center font-medium transition duration-300"
                >
                    GitHub
                </a>
            </div>
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
        default: 'https://via.placeholder.com/400x250'
    },
    technologies: {
        type: Array,
        default: () => []
    },
    isLive: {
        type: Boolean,
        default: false
    },
    liveLink: {
        type: String,
        default: ''
    },
    githubLink: {
        type: String,
        default: ''
    }
})
</script>