import { useTheme } from '~/composables/useTheme'

export default defineNuxtPlugin(() => {
  const { initTheme, watchSystemTheme } = useTheme()
  
  // Initialize theme on client
  if (process.client) {
    initTheme()
    watchSystemTheme()
    
    // Apply theme class immediately
    const theme = localStorage.getItem('portfolio-theme') || 
                  (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
    document.documentElement.setAttribute('data-theme', theme)
  }
})