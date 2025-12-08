<template>
    <aside class="w-72 bg-gray-800 h-screen flex flex-col items-center p-6">
        <!-- Profile Section -->
        <div class="flex flex-col items-center">
            <img src="https://via.placeholder.com/150" alt="Profile" class="rounded-full w-32 h-32 object-cover mb-4" />
            <h2 class="text-lg font-semibold">Full Stack Developer</h2>
            <p class="text-sm text-gray-400 text-center mt-2">
                Laravel | Node | TypeScript | Vue | Nuxt | React | MySQL | PostgreSQL | Docker | CI/CD
            </p>
        </div>

        <!-- Navigation -->
        <nav class="mt-10 space-y-3 w-full">
            <a href="/home" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('home')">
                🏠 Home
            </a>
            <a href="/about" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('about')">
                👤 About
            </a>
            <a href="/projects" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('projects')">
                💻 Projects
            </a>
            <a href="/skills" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('skills')">
                🛠 Skills
            </a>
            <a href="/resume" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('resume')">
                📄 Resume
            </a>
            <a href="/contact" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition"
                @click.prevent="scrollToSection('contact')">
                📬 Contact
            </a>
        </nav>

        <!-- Social Links -->
        <div class="flex gap-4 mt-auto pt-10 text-gray-400">
            <a href="#" class="hover:text-white transition">🌐</a>
            <a href="#" class="hover:text-white transition">🐦</a>
            <a href="#" class="hover:text-white transition">💼</a>
        </div>
    </aside>
</template>

<script setup>
const scrollToSection = (id) => {
    const element = document.getElementById(id)
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    }

    // For mobile, close the menu if open
    if (window.innerWidth < 768) {
        const event = new CustomEvent('closeMobileMenu')
        window.dispatchEvent(event)
    }
}
</script>

<style scoped>
aside {
    position: sticky;
    top: 0;
}
</style>