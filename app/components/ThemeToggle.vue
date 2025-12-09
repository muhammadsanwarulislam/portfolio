<template>
  <div class="relative group">
    <!-- Theme Toggle Button -->
    <button
      @click="toggleTheme"
      class="flex items-center justify-center w-10 h-10 rounded-xl bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-teal-500/50 transition-all duration-300 group"
      :aria-label="`Switch to ${nextTheme} theme`"
    >
      <!-- Sun/Moon Icon -->
      <span v-if="theme === 'dark'" class="text-xl animate-spin-slow">🌙</span>
      <span v-else-if="theme === 'light'" class="text-xl animate-pulse">☀️</span>
      <span v-else class="text-xl">{{ themeIcon }}</span>
    </button>

    <!-- Theme Dropdown -->
    <div class="absolute right-0 top-full mt-2 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform origin-top-right scale-95 group-hover:scale-100">
      <div class="p-2">
        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 py-2">
          Choose Theme
        </h3>
        
        <div class="space-y-1">
          <button
            v-for="themeOption in themes"
            :key="themeOption"
            @click="setTheme(themeOption)"
            class="flex items-center justify-between w-full px-3 py-2 rounded-lg text-sm transition-all duration-200 hover:bg-gray-700"
            :class="{
              'bg-gray-700 text-white': theme === themeOption,
              'text-gray-300': theme !== themeOption
            }"
          >
            <div class="flex items-center gap-3">
              <div class="w-3 h-3 rounded-full" :class="themeColorIndicator(themeOption)"></div>
              <span class="capitalize">{{ themeOption }} Mode</span>
            </div>
            <span v-if="theme === themeOption" class="text-teal-400">✓</span>
          </button>
        </div>
      </div>

      <!-- Theme Preview -->
      <div class="p-3 border-t border-gray-700">
        <div class="text-xs text-gray-400 mb-2">Preview:</div>
        <div class="flex gap-2">
          <div
            v-for="themeOption in themes"
            :key="`preview-${themeOption}`"
            @click="setTheme(themeOption)"
            class="w-6 h-6 rounded cursor-pointer transition-transform hover:scale-110"
            :class="themeColorIndicator(themeOption)"
            :title="`Switch to ${themeOption} theme`"
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { useTheme } from '~/composables/useTheme'

const { theme, themes, setTheme, toggleDarkLight } = useTheme()

const nextTheme = computed(() => theme.value === 'dark' ? 'light' : 'dark')
const themeIcon = computed(() => {
  const icons = {
    dark: '🌙',
    light: '☀️',
    blue: '🔵',
    purple: '🟣',
    green: '🟢'
  }
  return icons[theme.value] || '🎨'
})

const toggleTheme = () => {
  toggleDarkLight()
}

const themeColorIndicator = (themeName) => {
  const colors = {
    dark: 'bg-gradient-to-br from-gray-800 to-gray-900',
    light: 'bg-gradient-to-br from-yellow-300 to-orange-400',
    blue: 'bg-gradient-to-br from-blue-500 to-cyan-400',
    purple: 'bg-gradient-to-br from-purple-500 to-pink-400',
    green: 'bg-gradient-to-br from-emerald-500 to-green-400'
  }
  return colors[themeName] || colors.dark
}
</script>

<style scoped>
.animate-spin-slow {
  animation: spin 3s linear infinite;
}

@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

/* Ensure dropdown works on mobile */
@media (max-width: 768px) {
  .group:active .absolute {
    opacity: 1;
    visibility: visible;
  }
}
</style>