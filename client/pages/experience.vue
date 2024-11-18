<template>
    <div class="flex-1 overflow-y-auto">
      <div class="max-w-[1220px] mx-auto px-4 md:px-8 py-10">
        <h1 class="text-3xl font-bold text-center mb-8 text-main-dark dark:text-white">My Professional Experience</h1>
        <div class="relative">
          <!-- Timeline -->
          <div class="absolute left-4 top-0 h-full w-1 bg-gray-300 dark:bg-gray-600"></div>
  
          <div class="space-y-8">
            <!-- Experience Item -->
            <div
              v-for="(experience, index) in experiences"
              :key="index"
              class="relative flex flex-col sm:flex-row items-start sm:items-center"
            >
              <!-- Circle Indicator -->
              <div class="relative z-10 w-8 h-8 rounded-full bg-primary border-4 border-white dark:border-gray-800 flex items-center justify-center">
                <span class="text-xs font-semibold text-white">{{ index + 1 }}</span>
              </div>
  
              <!-- Content Section -->
              <div class="ml-12 sm:ml-16 mt-4 sm:mt-0 p-6 border-2 border-main-dark dark:border-alter-light shadow-lg rounded-lg w-full">
                <h3 class="text-xl font-semibold mb-2">{{ experience.role }}</h3>
                <p class="mb-1">
                  <span class="font-semibold">Company:</span> {{ experience.company }}
                </p>
                <p class="mb-1">
                  <span class="font-semibold">Duration:</span> {{ experience.duration }}
                </p>
                <ul class="list-disc list-inside mt-4 space-y-2">
                  <li v-for="(task, idx) in experience.responsibilities" :key="idx">{{ task }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
<script lang="ts" setup>

const experiences = ref([
  {
    role: 'Senior Software Engineer',
    company: 'Tech Solutions Ltd.',
    duration: '2020 - Present',
    responsibilities: [
      'Developed and maintained scalable web applications.',
      'Led a team of 5 developers to complete key projects on time.',
      'Implemented CI/CD pipelines to automate deployment.',
    ],
  },
  {
    role: 'Software Engineer',
    company: 'Innovative Minds Inc.',
    duration: '2017 - 2020',
    responsibilities: [
      'Designed REST APIs and integrated third-party services.',
      'Collaborated with UX/UI designers to improve usability.',
      'Optimized application performance by 30%.',
    ],
  },
  {
    role: 'Junior Developer',
    company: 'Startup Hub',
    duration: '2015 - 2017',
    responsibilities: [
      'Built responsive front-end components using Vue.js.',
      'Assisted in database design and query optimization.',
      'Participated in weekly agile sprint planning meetings.',
    ],
  },
]);
</script>
<style scoped>
/* Flag Design Styles */
.relative {
  position: relative;
}

.bg-primary {
  background-color: #3b82f6; /* Tailwind's blue-500 */
}

.bg-gray-300 {
  background-color: #d1d5db; /* Tailwind's gray-300 */
}

.dark\:bg-gray-600 {
  background-color: #4b5563; /* Tailwind's gray-600 */
}

.shadow-lg {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.rounded-lg {
  border-radius: 0.5rem;
}

.list-inside {
  list-style-position: inside;
}

.list-disc {
  list-style-type: disc;
}

.text-primary {
  color: #3b82f6;
}

.text-gray-600 {
  color: #4b5563;
}

.dark\:text-gray-300 {
  color: #d1d5db;
}

.border-white {
  border-color: #ffffff;
}

.dark\:border-gray-800 {
  border-color: #1f2937;
}
</style>
  