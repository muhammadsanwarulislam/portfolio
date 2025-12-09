<template>
    <div class="group perspective-1000">
        <div class="relative bg-linear-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-gray-700/50 shadow-2xl transition-all duration-500 h-full transform-style-preserve-3d hover:rotate-y-6 hover:scale-105 hover:shadow-teal-500/20"
            @mouseenter="handleMouseEnter" @mousemove="handleMouseMove" @mouseleave="handleMouseLeave" ref="card">
            <!-- 3D Lighting Effects -->
            <div
                class="absolute inset-0 bg-linear-to-tr from-teal-500/5 via-transparent to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
            </div>

            <!-- Glowing Border Effect -->
            <div
                class="absolute -inset-0.5 bg-linear-to-r from-teal-500/30 to-purple-500/30 rounded-2xl blur opacity-0 group-hover:opacity-100 transition duration-500">
            </div>

            <!-- Content Container -->
            <div class="relative bg-gray-900/95 backdrop-blur-sm h-full rounded-2xl z-10">
                <!-- Project Image with Parallax -->
                <div class="relative overflow-hidden rounded-t-2xl h-48">
                    <img :src="image" :alt="title"
                        class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110"
                        :style="imageTransform" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-linear-to-t from-gray-900 via-gray-900/50 to-transparent"></div>

                    <!-- Live Badge with Glow -->
                    <div v-if="isLive"
                        class="absolute top-4 right-4 bg-linear-to-r from-green-500 to-emerald-400 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow-lg shadow-green-500/25">
                        <span class="animate-pulse mr-1">●</span> Live
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-6 flex-1 flex flex-col">
                    <h3
                        class="text-xl font-bold mb-3 text-white group-hover:text-teal-400 transition-colors duration-300">
                        {{ title }}
                    </h3>

                    <p class="text-gray-400 mb-6 flex-1 text-sm leading-relaxed">
                        {{ description }}
                    </p>

                    <!-- Technologies with 3D Effect -->
                    <div class="mb-6">
                        <div class="flex flex-wrap gap-2">
                            <span v-for="(tech, index) in technologies" :key="tech"
                                class="px-3 py-1.5 bg-gray-800 text-gray-300 text-xs rounded-lg font-medium transform transition-all duration-300 hover:scale-110 hover:bg-gray-700 hover:text-white"
                                :style="`transition-delay: ${index * 50}ms`">
                                {{ tech }}
                            </span>
                        </div>
                    </div>

                    <!-- Action Buttons with 3D Depth -->
                    <div class="flex gap-3 mt-auto">
                        <a v-if="liveLink" :href="liveLink" target="_blank"
                            class="flex-1 relative group/btn overflow-hidden">
                            <div
                                class="absolute inset-0 bg-linear-to-r from-teal-600 to-emerald-500 transform transition-transform duration-300 group-hover/btn:scale-110">
                            </div>
                            <div
                                class="relative px-4 py-2.5 text-white rounded-lg text-center font-medium transition-all duration-300 group-hover/btn:shadow-lg group-hover/btn:shadow-teal-500/25">
                                Live Demo
                            </div>
                        </a>

                        <a v-if="githubLink" :href="githubLink" target="_blank"
                            class="flex-1 relative group/btn overflow-hidden">
                            <div
                                class="absolute inset-0 bg-linear-to-r from-gray-800 to-gray-700 transform transition-transform duration-300 group-hover/btn:scale-110">
                            </div>
                            <div
                                class="relative px-4 py-2.5 border border-gray-600 text-gray-300 rounded-lg text-center font-medium transition-all duration-300 group-hover/btn:text-white group-hover/btn:border-teal-400">
                                GitHub
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Floating Elements for 3D Depth -->
                <div
                    class="absolute -bottom-2 -right-2 w-16 h-16 bg-teal-500/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-700">
                </div>
                <div
                    class="absolute -top-2 -left-2 w-12 h-12 bg-purple-500/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-700">
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

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

const card = ref(null)
const imageTransform = ref('')

const handleMouseEnter = () => {
    // Initial state
    imageTransform.value = 'scale(1)'
}

const handleMouseMove = (e) => {
    if (!card.value) return

    const rect = card.value.getBoundingClientRect()
    const x = e.clientX - rect.left
    const y = e.clientY - rect.top

    // Calculate rotation based on mouse position
    const rotateY = ((x - rect.width / 2) / rect.width) * 10
    const rotateX = -((y - rect.height / 2) / rect.height) * 10

    // Apply subtle image parallax
    const moveX = ((x - rect.width / 2) / rect.width) * 10
    const moveY = ((y - rect.height / 2) / rect.height) * 10

    imageTransform.value = `translateX(${moveX}px) translateY(${moveY}px) scale(1.1)`

    // Apply 3D rotation to card
    card.value.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`
}

const handleMouseLeave = () => {
    if (card.value) {
        card.value.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)'
    }
    imageTransform.value = 'scale(1)'
}
</script>

<style scoped>
.perspective-1000 {
    perspective: 1000px;
}

.transform-style-preserve-3d {
    transform-style: preserve-3d;
}

.hover\:rotate-y-6:hover {
    transform: rotateY(6deg);
}

/* Custom scrollbar for the page */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #1f2937;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #0d9488, #7c3aed);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #0d9488, #8b5cf6);
}
</style>