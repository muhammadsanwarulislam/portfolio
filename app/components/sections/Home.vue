<template>
    <section id="home" class="text-center md:text-left">
        <!-- Animated welcome text -->
        <div class="mb-2">
            <span class="text-teal-400 font-semibold text-lg">Hello, I'm</span>
        </div>
        
        <h1 class="text-5xl md:text-6xl font-bold flex flex-col md:flex-row items-center gap-3 justify-center md:justify-start">
            <span class="text-white">Sanwarul</span>
            <span class="text-4xl">💻</span>
        </h1>
        
        <h2 class="text-2xl md:text-3xl text-gray-400 mt-4 font-medium">
            Full Stack Developer
        </h2>
        
        <!-- Description with better styling -->
        <div class="mt-10 max-w-2xl mx-auto md:mx-0">
            <p class="text-lg text-gray-300 leading-relaxed">
                I am a passionate developer with experience in both frontend and backend development using modern
                technologies. I enjoy building scalable systems and visually appealing applications.
            </p>
            
            <!-- Tech Stack Tags -->
            <div class="mt-8 flex flex-wrap gap-3 justify-center md:justify-start">
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">Laravel</span>
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">Node.js</span>
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">Vue/Nuxt</span>
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">React</span>
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">TypeScript</span>
                <span class="px-4 py-2 bg-gray-800 rounded-full text-sm text-gray-300">Docker</span>
            </div>
            
            <!-- Call to Action -->
            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="#projects" 
                   class="px-8 py-3 bg-teal-600 hover:bg-teal-700 text-white rounded-lg font-medium transition duration-300 text-center">
                    View My Work
                </a>
                <a href="#contact" 
                   class="px-8 py-3 border border-gray-600 hover:border-teal-500 text-gray-300 hover:text-teal-400 rounded-lg font-medium transition duration-300 text-center">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>
</template>

<style scoped>
h1 {
    background: linear-gradient(90deg, #ffffff, #60a5fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>