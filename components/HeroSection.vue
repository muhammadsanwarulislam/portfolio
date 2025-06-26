<template>
  <section class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8 flex items-center bg-hero" aria-labelledby="hero-heading">
    <div class="max-w-5xl mx-auto text-center animate-fade-in">
      <h1 id="hero-heading" class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
        Hi, I'm <span class="gradient-text">Sanwarul Islam</span>
      </h1>
      <h2 class="text-2xl sm:text-3xl text-gray-200 mb-8 font-semibold">Software Engineer | Laravel & Nuxt.js Expert</h2>
      <p class="text-lg sm:text-xl text-gray-300 mb-10 max-w-3xl mx-auto leading-relaxed">
        Building robust, scalable web applications with PHP, Laravel, and Nuxt.js. 
        Passionate about delivering seamless user experiences and optimized backend solutions for remote teams.
      </p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
        <a href="#projects" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-medium transition-colors shadow-md hover:shadow-lg hover-scale">View My Work</a>
        <a href="#contact" class="border-2 border-orange-500 text-orange-500 hover:bg-orange-500/10 px-8 py-3 rounded-lg font-medium transition-colors hover-scale">Contact Me</a>
        <a href="/resume.pdf" download class="border-2 border-gray-300 text-gray-300 hover:bg-gray-700 px-8 py-3 rounded-lg font-medium transition-colors flex items-center justify-center hover-scale">
          <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
          </svg>
          Download Resume
        </a>
      </div>
      <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-3xl mx-auto">
        <div class="bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-700 animate-slide-up" style="--delay: 0.1s">
          <div class="text-3xl font-bold text-orange-500">4+</div>
          <div class="text-gray-300 text-sm">Years Experience</div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-700 animate-slide-up" style="--delay: 0.2s">
          <div class="text-3xl font-bold text-orange-500">20+</div>
          <div class="text-gray-300 text-sm">Projects Completed</div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-700 animate-slide-up" style="--delay: 0.3s">
          <div class="text-3xl font-bold text-orange-500">5M+</div>
          <div class="text-gray-300 text-sm">Users Served</div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-700 animate-slide-up" style="--delay: 0.4s">
          <div class="text-3xl font-bold text-orange-500">100%</div>
          <div class="text-gray-300 text-sm">Client Satisfaction</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
</script>