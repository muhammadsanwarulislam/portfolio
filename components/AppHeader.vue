<template>
  <nav class="fixed w-full bg-gray-800/95 backdrop-blur-md border-b border-gray-700 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <NuxtLink to="/" class="text-2xl font-bold text-white hover:text-secondary-500 transition-colors">SI</NuxtLink>
      <div class="hidden md:flex space-x-8">
        <NuxtLink to="#about" class="text-gray-300 hover:text-secondary-500 transition-colors font-medium">About</NuxtLink>
        <NuxtLink to="#skills" class="text-gray-300 hover:text-secondary-500 transition-colors font-medium">Skills</NuxtLink>
        <NuxtLink to="#projects" class="text-gray-300 hover:text-secondary-500 transition-colors font-medium">Projects</NuxtLink>
        <NuxtLink to="#experience" class="text-gray-300 hover:text-secondary-500 transition-colors font-medium">Experience</NuxtLink>
        <NuxtLink to="#contact" class="text-gray-300 hover:text-secondary-500 transition-colors font-medium">Contact</NuxtLink>
      </div>
      <button @click="toggleMenu" class="md:hidden text-gray-300 focus:outline-none">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    
    <!-- Mobile Menu -->
    <div v-show="isMenuOpen" class="md:hidden bg-gray-800 border-b border-gray-700">
      <div class="px-4 py-2 space-y-2">
        <NuxtLink to="#about" class="block text-gray-300 hover:text-secondary-500 transition-colors font-medium py-2">About</NuxtLink>
        <NuxtLink to="#skills" class="block text-gray-300 hover:text-secondary-500 transition-colors font-medium py-2">Skills</NuxtLink>
        <NuxtLink to="#projects" class="block text-gray-300 hover:text-secondary-500 transition-colors font-medium py-2">Projects</NuxtLink>
        <NuxtLink to="#experience" class="block text-gray-300 hover:text-secondary-500 transition-colors font-medium py-2">Experience</NuxtLink>
        <NuxtLink to="#contact" class="block text-gray-300 hover:text-secondary-500 transition-colors font-medium py-2">Contact</NuxtLink>
      </div>
    </div>
  </nav>
</template>

<script setup>
const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}
</script>