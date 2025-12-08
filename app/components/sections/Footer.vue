<template>
  <footer class="mt-20 text-gray-500 text-sm">
    © {{ currentYear }} Sanwarul <br />
    Developed by Sanwarul
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>