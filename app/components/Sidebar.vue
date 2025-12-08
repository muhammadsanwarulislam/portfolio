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
            <NuxtLink v-for="item in menuItems" :key="item.id" :to="`${item.id}`"
                @click.prevent="scrollToSection(item.id)"
                class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                {{ item.icon }} {{ item.name }}
            </NuxtLink>
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
const menuItems = [
    { name: 'Home', icon: '🏠', id: '/' },
    { name: 'About', icon: '👤', id: 'about' },
    { name: 'Projects', icon: '💻', id: 'projects' },
    { name: 'Skills', icon: '🛠', id: 'skills' },
    { name: 'Resume', icon: '📄', id: 'resume' },
]
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