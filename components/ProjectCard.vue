<template>
  <div class="project-card bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-700 transition-all hover:shadow-xl" @click="emitOpenModal">
    <div class="project-image h-48 bg-gray-700 overflow-hidden">
      <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-primary-500 to-secondary-500">
        <span class="text-white text-4xl">{{ project.emoji }}</span>
      </div>
    </div>
    <div class="p-6">
      <div class="flex justify-between items-start mb-2">
        <h3 class="text-xl font-bold text-white">{{ project.title }}</h3>
        <span class="text-xs bg-orange-100 text-secondary-600 px-2 py-1 rounded">{{ project.type }}</span>
      </div>
      <p class="text-gray-300 mb-4">{{ project.shortDescription }}</p>
      <div class="flex flex-wrap gap-2 mb-4">
        <span v-for="tech in project.technologies" :key="tech" class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">
          {{ tech }}
        </span>
      </div>
      <div class="flex space-x-3">
        <button @click="$emit('open-modal', project)" class="text-secondary-500 hover:text-secondary-600 text-sm font-medium">
          View Details
        </button>
        <a :href="project.codeLink" class="text-gray-300 hover:text-white text-sm font-medium">Code</a>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  project: { type: Object, required: true }
});
const emit = defineEmits(['open-modal']);
function emitOpenModal() {
  emit('open-modal', props.project);
}
</script>

<style scoped>
.project-card:hover .project-image {
  transform: scale(1.05);
  transition: transform 0.3s ease;
}
</style>