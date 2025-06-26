<template>
  <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900 animate-fade-in">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Technical Skills</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold mb-4 text-white">Backend</h3>
          <div class="flex flex-wrap gap-3">
            <span v-for="skill in backendSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">{{ skill }}</span>
          </div>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-4 text-white">Frontend</h3>
          <div class="flex flex-wrap gap-3">
            <span v-for="skill in frontendSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">{{ skill }}</span>
          </div>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-4 text-white">DevOps & Tools</h3>
          <div class="flex flex-wrap gap-3">
            <span v-for="skill in devopsSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">{{ skill }}</span>
          </div>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-4 text-white">Methodologies</h3>
          <div class="flex flex-wrap gap-3">
            <span v-for="skill in methodologySkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">{{ skill }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
const backendSkills = ['PHP', 'Laravel', 'MySQL', 'Redis', 'RESTful APIs'];
const frontendSkills = ['Nuxt.js', 'Vue.js', 'JavaScript', 'Tailwind CSS', 'Vuetify'];
const devopsSkills = ['Docker', 'AWS', 'Git', 'CI/CD', 'Laravel Forge'];
const methodologySkills = ['Agile', 'Scrum', 'TDD', 'PHPUnit', 'SEO'];
</script>