<template>
  <div class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-800">
    <div class="max-w-7xl mx-auto">
      <h1 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">All Projects</h1>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <ProjectCard 
          v-for="project in allProjects" 
          :key="project.id"
          :project="project"
          @open-modal="openModal"
        />
      </div>
    </div>
    
    <ProjectModal 
      v-if="showModal" 
      :project="selectedProject" 
      @close="closeModal" 
    />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useProjects } from '~/composables/useProjects'
import ProjectCard from '~/components/ProjectCard.vue'
import ProjectModal from '~/components/ProjectModal.vue'

const { allProjects } = useProjects()

// Modal logic
const showModal = ref(false)
const selectedProject = ref(null)

const openModal = (project) => {
  selectedProject.value = project
  showModal.value = true
}

const closeModal = () => {
  showModal.value = false
}
</script>

<style scoped>
.section-title {
  position: relative;
  display: inline-block;
}

.section-title:after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 60%;
  height: 3px;
  background: linear-gradient(90deg, #0d9488, #f97316);
}
</style>