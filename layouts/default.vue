<template>
  <div class="min-h-screen bg-gray-900 text-gray-100 font-sans antialiased">
    <AppHeader />
    <main>
      <slot />
    </main>
    <AppFooter />
  </div>
</template>

<script setup>
import AppHeader from '~/components/AppHeader.vue'
import AppFooter from '~/components/AppFooter.vue'
</script>

<style>
html {
  scroll-behavior: smooth;
}
</style>