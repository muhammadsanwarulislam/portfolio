import { ref, computed, watchEffect } from 'vue'

export const useTheme = () => {
  // Available themes
  const themes = ['dark', 'light', 'blue', 'purple', 'green']
  const theme = ref('dark')

  // Theme colors mapping
  const themeColors = computed(() => {
    const colors = {
      dark: {
        primary: '#0d9488',
        secondary: '#7c3aed',
        bg: '#0f172a',
        surface: '#1e293b',
        text: '#f1f5f9',
        muted: '#94a3b8'
      },
      light: {
        primary: '#0891b2',
        secondary: '#7c3aed',
        bg: '#f8fafc',
        surface: '#ffffff',
        text: '#0f172a',
        muted: '#475569'
      },
      blue: {
        primary: '#2563eb',
        secondary: '#3b82f6',
        bg: '#0f172a',
        surface: '#1e293b',
        text: '#f1f5f9',
        muted: '#94a3b8'
      },
      purple: {
        primary: '#8b5cf6',
        secondary: '#a855f7',
        bg: '#0f172a',
        surface: '#1e293b',
        text: '#f1f5f9',
        muted: '#94a3b8'
      },
      green: {
        primary: '#10b981',
        secondary: '#34d399',
        bg: '#0f172a',
        surface: '#1e293b',
        text: '#f1f5f9',
        muted: '#94a3b8'
      }
    }
    return colors[theme.value] || colors.dark
  })

  // Initialize theme from localStorage or system preference
  const initTheme = () => {
    if (typeof window !== 'undefined') {
      const savedTheme = localStorage.getItem('portfolio-theme')
      if (savedTheme && themes.includes(savedTheme)) {
        theme.value = savedTheme
      } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        theme.value = 'dark'
      } else {
        theme.value = 'light'
      }
      applyTheme(theme.value)
    }
  }

  // Apply theme to document
  const applyTheme = (themeName) => {
    if (typeof window !== 'undefined') {
      document.documentElement.setAttribute('data-theme', themeName)
      document.documentElement.classList.remove(...themes)
      document.documentElement.classList.add(themeName)
    }
  }

  // Set theme
  const setTheme = (newTheme) => {
    if (themes.includes(newTheme)) {
      theme.value = newTheme
      if (typeof window !== 'undefined') {
        localStorage.setItem('portfolio-theme', newTheme)
        applyTheme(newTheme)
      }
    }
  }

  // Toggle between dark and light
  const toggleDarkLight = () => {
    setTheme(theme.value === 'dark' ? 'light' : 'dark')
  }

  // Watch for system theme changes
  const watchSystemTheme = () => {
    if (typeof window !== 'undefined') {
      const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)')
      
      const handleChange = (e) => {
        if (!localStorage.getItem('portfolio-theme')) {
          setTheme(e.matches ? 'dark' : 'light')
        }
      }
      
      mediaQuery.addEventListener('change', handleChange)
      
      // Cleanup
      return () => mediaQuery.removeEventListener('change', handleChange)
    }
  }

  return {
    theme,
    themes,
    themeColors,
    setTheme,
    toggleDarkLight,
    initTheme,
    watchSystemTheme
  }
}