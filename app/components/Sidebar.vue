<template>
    <aside class="w-72 theme-surface h-screen flex flex-col items-center p-6 border-r theme-border">
        <!-- Profile Section -->
        <div class="flex flex-col items-center">
            <img :src='`/assets/images/1.png`' alt="Profile" class="rounded-full w-32 h-32 object-cover mb-4" />
            <h2 class="text-lg font-semibold theme-text">{{ profile.personal.title }}</h2>
            <p class="text-sm text-gray-400 text-center mt-2">
                PHP | Laravel |October CMS | PHALCON | Vue | Nuxt | MySQL | Redis
            </p>
        </div>

        <!-- Navigation -->
        <nav class="mt-10 space-y-3 w-full">
            <NuxtLink v-for="item in menuItems" :key="item.id" :to="`${item.id}`"
                @click.prevent="scrollToSection(item.id)"
                class="flex items-center gap-3 px-4 py-2 rounded-lg theme-bg hover:theme-surface transition" active-class="bg-gradient-to-r from-teal-500/20 to-purple-500/20 border border-teal-500/30">
                {{ item.icon }} {{ item.name }}
            </NuxtLink>
        </nav>

        <!-- Social Links -->
        <div class="flex gap-4 mt-auto pt-10 text-gray-400">
            <a v-for="link in socialLinks" :key="link.id" :href="link.url" target="_blank" rel="noopener noreferrer" class="hover:text-white transition">
                {{ link.icon }}
            </a>
        </div>
    </aside>
</template>

<script setup>
const { getSocialLinks,getProfile } = useContent()
const socialLinks = getSocialLinks()
const profile = getProfile()

const menuItems = [
    { name: 'Home', icon: '🏠', id: '/' },
    { name: 'About', icon: '👤', id: 'about' },
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