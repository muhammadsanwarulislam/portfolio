<template>
  <div>
    <!-- Loading Screen -->
    <div v-if="isLoading" class="loading-screen">
      <div class="loading-container">
        <!-- Animated Logo/Circle -->
        <div class="logo-animation">
          <div class="logo-circle">
            <div class="logo-inner"></div>
            <div class="logo-dot"></div>
          </div>
        </div>
        
        <!-- Loading Text -->
        <div class="loading-text">
          <span class="text-gradient">Sanwarul Islam</span>
          <p class="text-subtitle">Full Stack Developer</p>
        </div>
        
        <!-- Loading Bar -->
        <div class="loading-bar">
          <div class="loading-progress" :style="{ width: loadingProgress + '%' }"></div>
        </div>
        
        <!-- Tech Stack Animation -->
        <div class="tech-stack">
          <span v-for="tech in techStack" :key="tech" class="tech-item">
            {{ tech }}
          </span>
        </div>
      </div>
    </div>
    
    <!-- Main Content -->
    <div :class="{ 'content-hidden': isLoading }">
      <NuxtLayout>
        <NuxtPage />
      </NuxtLayout>
    </div>
  </div>
</template>

<script setup>
import { useContent } from '~/composables/useContent'
import { ref, onMounted, onBeforeMount } from 'vue'

const { getSiteConfig } = useContent()
const config = getSiteConfig()

const isLoading = ref(true)
const loadingProgress = ref(0)

const techStack = ['Laravel', 'Nuxt.js', 'Vue', 'PHP', 'MySQL', 'TypeScript', 'Redis']

// Simulate loading progress
const simulateLoading = () => {
  const interval = setInterval(() => {
    loadingProgress.value += Math.random() * 15
    if (loadingProgress.value >= 100) {
      loadingProgress.value = 100
      clearInterval(interval)
      
      // Wait a bit before hiding loading screen
      setTimeout(() => {
        isLoading.value = false
      }, 500)
    }
  }, 100)
}

onMounted(() => {
  // Start loading simulation
  simulateLoading()
  
  // Set a timeout to ensure loading screen doesn't stay forever
  setTimeout(() => {
    if (isLoading.value) {
      isLoading.value = false
    }
  }, 3000)
})

useHead({
  title: config.site.title,
  meta: [
    { name: 'description', content: config.site.description },
    { name: 'keywords', content: config.site.keywords.join(', ') },
    { name: 'author', content: config.site.author },
    { property: 'og:title', content: config.site.title },
    { property: 'og:description', content: config.site.description },
    { property: 'og:image', content: config.meta.ogImage },
    { property: 'og:type', content: 'website' }
  ],
  link: [
    { rel: 'icon', href: config.meta.favicon }
  ]
})
</script>

<style scoped>
.loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  overflow: hidden;
}

.loading-container {
  text-align: center;
  max-width: 500px;
  padding: 2rem;
}

/* Logo Animation */
.logo-animation {
  margin-bottom: 2rem;
}

.logo-circle {
  position: relative;
  width: 120px;
  height: 120px;
  margin: 0 auto;
  border-radius: 50%;
  background: linear-gradient(135deg, #0d9488 0%, #7c3aed 100%);
  animation: rotate 4s linear infinite;
}

.logo-inner {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  border-radius: 50%;
  background: #1e293b;
  animation: pulse 2s ease-in-out infinite;
}

.logo-dot {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20px;
  height: 20px;
  background: #0d9488;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  animation: bounce 1s ease-in-out infinite;
  box-shadow: 0 0 20px rgba(13, 148, 136, 0.5);
}

/* Loading Text */
.loading-text {
  margin-bottom: 3rem;
}

.text-gradient {
  font-size: 2.5rem;
  font-weight: bold;
  background: linear-gradient(135deg, #0d9488 0%, #7c3aed 50%, #0ea5e9 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: textGlow 2s ease-in-out infinite;
}

.text-subtitle {
  color: #94a3b8;
  font-size: 1.2rem;
  margin-top: 0.5rem;
  animation: fadeInOut 3s ease-in-out infinite;
}

/* Loading Bar */
.loading-bar {
  width: 100%;
  height: 4px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 2rem;
}

.loading-progress {
  height: 100%;
  background: linear-gradient(90deg, #0d9488, #7c3aed);
  border-radius: 10px;
  transition: width 0.3s ease;
  position: relative;
  overflow: hidden;
}

.loading-progress::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
  animation: shimmer 2s infinite;
}

/* Tech Stack Animation */
.tech-stack {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  margin-top: 2rem;
}

.tech-item {
  padding: 8px 16px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 20px;
  color: #cbd5e1;
  font-size: 0.9rem;
  animation: floatUp 3s ease-in-out infinite;
}

.tech-item:nth-child(1) { animation-delay: 0s; }
.tech-item:nth-child(2) { animation-delay: 0.2s; }
.tech-item:nth-child(3) { animation-delay: 0.4s; }
.tech-item:nth-child(4) { animation-delay: 0.6s; }
.tech-item:nth-child(5) { animation-delay: 0.8s; }
.tech-item:nth-child(6) { animation-delay: 1s; }
.tech-item:nth-child(7) { animation-delay: 1.2s; }
.tech-item:nth-child(8) { animation-delay: 1.4s; }

/* Content Transition */
.content-hidden {
  opacity: 0;
  transform: translateY(20px);
}

.content-hidden.nuxt-layout {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

/* Animations */
@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
    opacity: 0.7;
  }
  50% {
    transform: scale(0.95);
    opacity: 1;
  }
}

@keyframes bounce {
  0%, 100% {
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.2);
  }
}

@keyframes textGlow {
  0%, 100% {
    filter: drop-shadow(0 0 10px rgba(13, 148, 136, 0.3));
  }
  50% {
    filter: drop-shadow(0 0 20px rgba(13, 148, 136, 0.6));
  }
}

@keyframes fadeInOut {
  0%, 100% {
    opacity: 0.5;
  }
  50% {
    opacity: 1;
  }
}

@keyframes shimmer {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
  }
}

@keyframes floatUp {
  0%, 100% {
    transform: translateY(0);
    opacity: 0.5;
  }
  50% {
    transform: translateY(-10px);
    opacity: 1;
  }
}

/* Page Load Animation */
.page-enter-active,
.page-leave-active {
  transition: all 0.4s;
}

.page-enter-from,
.page-leave-to {
  opacity: 0;
  transform: translateY(20px);
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .loading-container {
    padding: 1rem;
  }
  
  .text-gradient {
    font-size: 2rem;
  }
  
  .tech-item {
    padding: 6px 12px;
    font-size: 0.8rem;
  }
}
</style>