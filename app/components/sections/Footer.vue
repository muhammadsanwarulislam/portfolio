<template>
  <footer class="mt-20 py-10 border-t border-gray-800">
    <div class="text-center">
      <!-- Logo/Brand -->
      <div class="mb-6">
        <h3 class="text-2xl font-bold">
          {{ profile.personal.name }}<span class="text-teal-400">.</span>
        </h3>
        <p class="text-gray-400 mt-2">{{ profile.personal.title }}</p>
      </div>

      <!-- Social Links -->
      <div class="flex justify-center gap-6 mb-8">
        <a v-for="link in socialLinks" :key="link.id" :href="link.url" target="_blank" rel="noopener noreferrer"
          class="text-gray-400 hover:text-white transition">
          {{ link.icon }}
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-gray-500 text-sm">
        <p>© {{ currentYear }} {{profile.personal.name}}. All rights reserved.</p>
        <p class="mt-2">Crafted with ❤️ by {{ profile.personal.name }}</p>
      </div>

      <!-- Back to Top -->
      <button @click="scrollToTop" class="mt-8 text-gray-400 hover:text-teal-400 transition duration-300"
        aria-label="Back to top">
        <span class="inline-block animate-bounce">↑</span>
        <span class="ml-2">Back to top</span>
      </button>
    </div>
  </footer>
</template>

<script setup>
const { getSocialLinks,getProfile } = useContent()
const socialLinks = getSocialLinks()
const profile = getProfile()
const currentYear = new Date().getFullYear()

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}
</script>