<template>
  <div class="flex-1 overflow-y-auto">
    <div class="max-w-[1220px] mx-auto min-h-full px-2 md:px-5">
      <div class="pb-16 md:pb-5">
        <main class="pb-6 md:pb-0">
          <div class="space-y-20 pt-8 md:pt-16">
            <!-- Projects Section -->
            <div>
              <div class="mt-5 relative w-full h-full">
                <!-- Static Grid for Projects -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                  <div v-for="(project, index) in projects" :key="index" class="flex flex-col p-4 bg-main-mid-light dark:bg-alter-mid-light border-2 border-main-dark dark:border-alter-light rounded-xl">
                    <img :src="project.image" :alt="project.title" class="rounded-t-lg mb-4 w-full h-40 object-cover" />
                    <div class="p-3 border-b text-center">
                      <h6 class="text-xl font-semibold text-main-dark dark:text-alter-light">
                        {{ project.title }}
                      </h6>
                    </div>
                    <div class="mt-4">
                      <p class="text-sm">
                        {{ project.description }}
                      </p>
                    </div>
                    <!-- Stack Section -->
                    <div class="mt-4">
                      <h6 class="text-sm font-medium text-main-dark dark:text-alter-light">Tech Stack:</h6>
                      <ul class="mt-2 flex flex-wrap gap-2">
                        <li v-for="(tech, techIndex) in project.stack" :key="techIndex" 
                            class="px-2 py-1 border-main-dark dark:border-alter-light rounded text-xs text-gray-800 dark:text-gray-200">
                          {{ tech }}
                        </li>
                      </ul>
                    </div>
                    <div class="mt-4 flex justify-center">
                      <a :href="project.link" target="_blank" class="text-primary underline">
                        View Project
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import project1Image from '~/assets/img/project_1.jpg';
import project2Image from '~/assets/img/project_2.jpg';
import project3Image from '~/assets/img/project_3.jpg';
import project4Image from '~/assets/img/project_4.jpg';

definePageMeta({ layout: "default" });

const projects = ref([
  {
    title: 'E-Commerce Platform',
    description: 'A full-featured e-commerce platform with advanced search, payment integration, and analytics.',
    link: 'https://example.com/e-commerce',
    image: project1Image,
    stack: ['Vue.js', 'Nuxt.js', 'Tailwind CSS', 'Node.js', 'MongoDB']
  },
  {
    title: 'Portfolio Website',
    description: 'A personal portfolio showcasing design and development projects.',
    link: 'https://example.com/portfolio',
    image: project2Image,
    stack: ['HTML', 'CSS', 'JavaScript', 'Vue.js']
  },
  {
    title: 'Task Management App',
    description: 'A productivity app for managing tasks, projects, and teams effectively.',
    link: 'https://example.com/task-manager',
    image: project3Image,
    stack: ['React', 'Redux', 'TypeScript', 'Firebase']
  },
  {
    title: 'Social Media Dashboard',
    description: 'An analytics dashboard for tracking social media metrics in real-time.',
    link: 'https://example.com/social-dashboard',
    image: project1Image,
    stack: ['Angular', 'SCSS', 'Chart.js', 'Node.js']
  },
]);
</script>

<style scoped>
/* Styling for static project layout */
.grid {
  gap: 1.5rem;
}

.border {
  border: 1px solid #e5e7eb;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.shadow-lg {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.bg-white {
  background-color: #ffffff;
}

.dark\:bg-gray-800 {
  background-color: #1f2937;
}

.text-main-dark {
  color: #374151;
}

.text-alter-light {
  color: #ffffff;
}

.text-primary {
  color: #3b82f6;
}

.underline {
  text-decoration: underline;
}

/* Tech Stack Styling */
.bg-gray-100 {
  background-color: #f3f4f6;
}

.dark\:bg-gray-700 {
  background-color: #374151;
}
</style>
