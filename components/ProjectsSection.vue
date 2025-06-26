<template>
  <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-800">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Featured Projects</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <ProjectCard
          v-for="(project, index) in featuredProjects"
          :key="project.key"
          :project="project"
          @open-modal="openProjectModal"
        />
      </div>
      <div class="text-center mt-12">
        <a href="/projects" class="inline-flex items-center text-orange-500 hover:text-orange-600 font-medium hover-scale" aria-label="View all projects">
          View All Projects
          <svg class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { useProjects } from '~/composables/useProjects';
import { useModal } from '~/composables/useModal';
import ProjectCard from './ProjectCard.vue';

const { allProjects } = useProjects();
const featuredProjects = allProjects.value.slice(0, 3);

const openProjectModal = (project) => {
  const modal = useModal();
  modal.open(project.key);
};
</script>