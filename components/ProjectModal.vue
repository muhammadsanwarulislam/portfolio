<template>
  <div v-if="isOpen" id="project-modal" class="fixed inset-0 modal-overlay flex items-center justify-center z-50" role="dialog" aria-labelledby="modal-title">
    <div class="modal bg-gray-800 rounded-xl max-w-lg w-full mx-4 p-6 relative" :class="{ show: isOpen }">
      <button class="absolute top-4 right-4 text-gray-300 hover:text-white" aria-label="Close modal" @click="$emit('close')">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h3 id="modal-title" class="text-2xl font-bold text-white mb-4">{{ project?.title || 'Project Details' }}</h3>
      <p id="modal-description" class="text-gray-300 mb-4">{{ project?.description || 'No description available' }}</p>
      <div id="modal-technologies" class="flex flex-wrap gap-2 mb-4">
        <span v-for="tech in project?.technologies || []" :key="tech" class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">{{ tech }}</span>
      </div>
      <div class="flex space-x-4">
        <a :href="project?.liveLink || '#'" class="text-orange-500 hover:text-orange-600 font-medium hover-scale" aria-label="View project live demo">View Live</a>
        <a :href="project?.codeLink || '#'" class="text-gray-300 hover:text-white font-medium hover-scale" aria-label="View project source code">Source Code</a>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { computed } from 'vue';
const props = defineProps({
  project: Object
});
const isOpen = computed(() => !!props.project);
</script>