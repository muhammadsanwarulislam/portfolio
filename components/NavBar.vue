<template>
  <nav class="fixed w-full bg-gray-800/95 backdrop-blur-md border-b border-gray-700 z-50" aria-label="Main navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-white hover:text-orange-500 transition-colors" aria-label="Home">SI</a>
      <div class="hidden md:flex space-x-8">
        <a href="#about" class="text-gray-300 hover:text-orange-500 transition-colors font-medium">About</a>
        <a href="#skills" class="text-gray-300 hover:text-orange-500 transition-colors font-medium">Skills</a>
        <a href="#projects" class="text-gray-300 hover:text-orange-500 transition-colors font-medium">Projects</a>
        <a href="#experience" class="text-gray-300 hover:text-orange-500 transition-colors font-medium">Experience</a>
        <a href="#contact" class="text-gray-300 hover:text-orange-500 transition-colors font-medium">Contact</a>
      </div>
      <button id="mobile-menu-button" class="md:hidden text-gray-300 focus:outline-none" aria-label="Toggle mobile menu" @click="toggleMenu">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <div id="mobile-menu" :class="{ 'hidden': !isMenuOpen }" class="md:hidden bg-gray-800 border-b border-gray-700">
      <div class="px-4 py-2 space-y-2">
        <a href="#about" class="block text-gray-300 hover:text-orange-500 transition-colors font-medium py-2" @click="toggleMenu">About</a>
        <a href="#skills" class="block text-gray-300 hover:text-orange-500 transition-colors font-medium py-2" @click="toggleMenu">Skills</a>
        <a href="#projects" class="block text-gray-300 hover:text-orange-500 transition-colors font-medium py-2" @click="toggleMenu">Projects</a>
        <a href="#experience" class="block text-gray-300 hover:text-orange-500 transition-colors font-medium py-2" @click="toggleMenu">Experience</a>
        <a href="#contact" class="block text-gray-300 hover:text-orange-500 transition-colors font-medium py-2" @click="toggleMenu">Contact</a>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
const isMenuOpen = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};
</script>