<template>
    <div class="md:hidden flex justify-between p-4 bg-gray-800 sticky top-0 z-50">
        <span class="text-xl font-bold">Sanwarul</span>
        <button @click="toggleMenu" class="text-2xl">
            {{ isOpen ? '✕' : '☰' }}
        </button>
    </div>

    <div v-if="isOpen" class="md:hidden bg-gray-800 p-4 fixed w-full z-40 top-16">
        <nav class="space-y-3">
            <a v-for="item in menuItems" :key="item.id" :href="`#${item.id}`"
                @click.prevent="handleMenuItemClick(item.id)"
                class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                {{ item.icon }} {{ item.label }}
            </a>
        </nav>
    </div>
</template>

<script setup>
const isOpen = ref(false)

const menuItems = [
    { id: 'home', label: 'Home', icon: '🏠' },
    { id: 'about', label: 'About', icon: '👤' },
    { id: 'projects', label: 'Projects', icon: '💻' },
    { id: 'skills', label: 'Skills', icon: '🛠' },
    { id: 'resume', label: 'Resume', icon: '📄' },
    { id: 'contact', label: 'Contact', icon: '📬' }
]

const toggleMenu = () => {
    isOpen.value = !isOpen.value
}

const handleMenuItemClick = (id) => {
    const element = document.getElementById(id)
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    }
    isOpen.value = false
}

// Listen for close event from sidebar
onMounted(() => {
    window.addEventListener('closeMobileMenu', () => {
        isOpen.value = false
    })
})
</script>