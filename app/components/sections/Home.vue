<template>
    <section id="home" class="text-center md:text-left">
        <!-- Animated welcome text -->
        <div class="mb-2">
            <span class="text-teal-400 font-semibold text-lg">Hello, I'm</span>
        </div>

        <h1
            class="text-5xl md:text-6xl font-bold flex flex-col md:flex-row items-center gap-3 justify-center md:justify-start">
            <span class="text-white">{{ profile.personal.name }}</span>
            <span class="text-4xl">💻</span>
        </h1>

        <h2 class="text-2xl md:text-3xl text-gray-400 mt-4 font-medium">
            {{ profile.personal.title }}
        </h2>

        <!-- Description with better styling -->
        <div class="mt-10 max-w-2xl mx-auto md:mx-0">
            <p class="text-lg text-gray-300 leading-relaxed">
                {{ profile.personal.about }}
            </p>

            <!-- Tech Stack Tags -->
            <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
                <span v-for="tech in profile.stats" :key="tech"
                    class="bg-gray-800/50 p-4 rounded-xl text-center flex flex-col items-center">
                    <span>{{ tech.icon }}</span>
                    <span>{{ tech.value }}</span>
                    <span>{{ tech.label }}</span>
                    <span v-if="tech.subtext">{{ tech.subtext }}</span>
                </span>
            </div>

            <!-- Call to Action -->
            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <!-- <a href="#projects"
                    class="px-8 py-3 bg-teal-600 hover:bg-teal-700 text-white rounded-lg font-medium transition duration-300 text-center">
                    View My Work
                </a> -->
                <!-- <a href="#contact"
                    class="px-8 py-3 border border-gray-600 hover:border-teal-500 text-gray-300 hover:text-teal-400 rounded-lg font-medium transition duration-300 text-center">
                    Get In Touch
                </a> -->
            </div>
        </div>
    </section>
</template>

<script setup>
const { getProfile, getSocialLinks } = useContent()
const profile = getProfile()
const social = getSocialLinks()
</script>

<style scoped>
h1 {
    background: linear-gradient(90deg, #ffffff, #60a5fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>