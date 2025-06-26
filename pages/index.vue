<template>
  <div>
    <!-- Hero Section -->
    <section class="min-h-screen pt-32 pb-20 px-4 sm:px-6 lg:px-8 flex items-center bg-gradient-to-br from-primary-500 to-gray-800">
      <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
          Hi, I'm <span class="gradient-text">Sanwarul Islam</span>
        </h1>
        <h2 class="text-2xl sm:text-3xl text-gray-200 mb-8 font-semibold">Software Engineer | Laravel & Nuxt.js Expert</h2>
        <p class="text-lg sm:text-xl text-gray-300 mb-10 max-w-3xl mx-auto leading-relaxed">
          Building robust, scalable web applications with PHP, Laravel, and Nuxt.js. 
          Passionate about delivering seamless user experiences and optimized backend solutions for remote teams.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
          <NuxtLink to="#projects" class="bg-secondary-500 hover:bg-secondary-600 text-white px-8 py-3 rounded-lg font-medium transition-colors shadow-md hover:shadow-lg hover-scale">
            View My Work
          </NuxtLink>
          <NuxtLink to="#contact" class="border-2 border-secondary-500 text-secondary-500 hover:bg-secondary-500/10 px-8 py-3 rounded-lg font-medium transition-colors hover-scale">
            Contact Me
          </NuxtLink>
          <a href="/resume.pdf" download class="border-2 border-gray-300 text-gray-300 hover:bg-gray-700 px-8 py-3 rounded-lg font-medium transition-colors flex items-center justify-center hover-scale">
            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Download Resume
          </a>
        </div>
        
        <!-- Stats Row -->
        <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-3xl mx-auto">
          <div v-for="(stat, index) in stats" :key="stat.label" 
               class="bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-700"
               :style="`animation-delay: ${0.1 * (index + 1)}s`">
            <div class="text-3xl font-bold text-secondary-500">{{ stat.value }}</div>
            <div class="text-gray-300 text-sm">{{ stat.label }}</div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-800">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">About Me</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="md:col-span-2">
            <p class="text-lg text-gray-300 mb-6 leading-relaxed">
              I'm a dedicated Software Engineer with a strong focus on PHP and Laravel for backend development, paired with Nuxt.js for crafting dynamic, SEO-friendly frontends.
            </p>
            <p class="text-lg text-gray-300 mb-6 leading-relaxed">
              My expertise lies in building scalable, secure web applications, optimizing performance, and ensuring smooth remote collaboration through agile practices and clear communication.
            </p>
            <p class="text-lg text-gray-300 leading-relaxed">
              When I'm not coding, I explore new tech trends, contribute to open-source Laravel packages, or enjoy photography and traveling.
            </p>
          </div>
          <div class="space-y-6">
            <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
              <h3 class="font-bold text-white mb-2">Education</h3>
              <p class="text-gray-300">BSc Computer Science</p>
              <p class="text-gray-400 text-sm">Your University, 2019</p>
            </div>
            <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
              <h3 class="font-bold text-white mb-2">Current Role</h3>
              <p class="text-gray-300">Software Engineer</p>
              <p class="text-gray-400 text-sm">Your Company, 2020-Present</p>
            </div>
            <div class="bg-gray-700 p-4 rounded-lg shadow-sm">
              <h3 class="font-bold text-white mb-2">Location</h3>
              <p class="text-gray-300">Your City (Open to Remote)</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Technical Skills</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div>
            <h3 class="text-xl font-semibold mb-4 text-white">Backend</h3>
            <div class="flex flex-wrap gap-3">
              <span v-for="skill in backendSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">
                {{ skill }}
              </span>
            </div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-4 text-white">Frontend</h3>
            <div class="flex flex-wrap gap-3">
              <span v-for="skill in frontendSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">
                {{ skill }}
              </span>
            </div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-4 text-white">DevOps & Tools</h3>
            <div class="flex flex-wrap gap-3">
              <span v-for="skill in devopsSkills" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">
                {{ skill }}
              </span>
            </div>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-4 text-white">Methodologies</h3>
            <div class="flex flex-wrap gap-3">
              <span v-for="skill in methodologies" :key="skill" class="skill-pill bg-gray-800 px-4 py-2 rounded-full shadow-md border border-gray-700">
                {{ skill }}
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-800">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Featured Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ProjectCard 
            v-for="project in featuredProjects" 
            :key="project.id"
            :project="project"
            @open-modal="openModal"
          />
        </div>
        <div class="text-center mt-12">
          <button @click="openAllProjectsModal" class="inline-flex items-center text-secondary-500 hover:text-secondary-600 font-medium hover-scale">
            View All Projects
            <svg class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Professional Experience</h2>
        <div class="space-y-8">
          <div v-for="exp in experiences" :key="exp.title" class="bg-gray-800 p-6 rounded-lg shadow-md border border-gray-700">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
              <h3 class="text-xl font-bold text-white">{{ exp.title }}</h3>
              <span class="text-secondary-500 font-medium">{{ exp.company }} • {{ exp.duration }}</span>
            </div>
            <ul class="list-disc list-inside text-gray-300 space-y-2">
              <li v-for="item in exp.responsibilities" :key="item">{{ item }}</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-800">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 section-title text-white">Get In Touch</h2>
        <div class="grid md:grid-cols-2 gap-12">
          <div>
            <h3 class="text-xl font-semibold mb-4 text-white">Contact Information</h3>
            <div class="space-y-4">
              <div class="flex items-start">
                <svg class="h-6 w-6 text-secondary-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-gray-300">sanwarul.islam@example.com</span>
              </div>
              <div class="flex items-start">
                <svg class="h-6 w-6 text-secondary-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="text-gray-300">Your Phone Number</span>
              </div>
              <div class="flex items-start">
                <svg class="h-6 w-6 text-secondary-500 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-gray-300">Your City (Open to Remote)</span>
              </div>
            </div>
            <h3 class="text-xl font-semibold mt-8 mb-4 text-white">Connect With Me</h3>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-300 hover:text-secondary-500 transition-colors hover-scale">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                </svg>
              </a>
              <a href="#" class="text-gray-300 hover:text-secondary-500 transition-colors hover-scale">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
              </a>
              <a href="#" class="text-gray-300 hover:text-secondary-500 transition-colors hover-scale">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/>
                </svg>
              </a>
            </div>
          </div>
          <div>
            <ContactForm />
          </div>
        </div>
      </div>
    </section>

    <ProjectModal 
      v-if="showModal" 
      :project="selectedProject" 
      @close="closeModal" 
    />

    <!-- All Projects Modal -->
    <div v-if="showAllProjectsModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70">
      <div class="bg-gray-900 rounded-xl max-w-5xl w-full mx-4 p-8 relative overflow-y-auto max-h-[90vh]">
        <button class="absolute top-4 right-4 text-gray-300 hover:text-white" aria-label="Close modal" @click="closeAllProjectsModal">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <h2 class="text-2xl font-bold text-white mb-8">All Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ProjectCard 
            v-for="project in allProjects" 
            :key="project.id"
            :project="project"
            @open-modal="openModal"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useProjects } from '~/composables/useProjects'
import ProjectCard from '~/components/ProjectCard.vue'
import ProjectModal from '~/components/ProjectModal.vue'

// Stats data
const stats = ref([
  { value: '4+', label: 'Years Experience' },
  { value: '20+', label: 'Projects Completed' },
  { value: '5M+', label: 'Users Served' },
  { value: '100%', label: 'Client Satisfaction' }
])

// Skills data
const backendSkills = ref(['PHP', 'Laravel', 'MySQL', 'Redis', 'RESTful APIs'])
const frontendSkills = ref(['Nuxt.js', 'Vue.js', 'JavaScript', 'Tailwind CSS', 'Vuetify'])
const devopsSkills = ref(['Docker', 'AWS', 'Git', 'CI/CD', 'Laravel Forge'])
const methodologies = ref(['Agile', 'Scrum', 'TDD', 'PHPUnit', 'SEO'])

// Projects data
const { allProjects } = useProjects()
const featuredProjects = allProjects.value.slice(0, 3)

// Modal logic for single project
const showModal = ref(false)
const selectedProject = ref(null)

const openModal = (project) => {
  selectedProject.value = project
  showModal.value = true
}

const closeModal = () => {
  showModal.value = false
}

// Modal logic for all projects
const showAllProjectsModal = ref(false)
const openAllProjectsModal = () => {
  showAllProjectsModal.value = true
}
const closeAllProjectsModal = () => {
  showAllProjectsModal.value = false
}
</script>

<style scoped>
.gradient-text {
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  background-image: linear-gradient(90deg, #0d9488, #f97316);
}

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

.hover-scale {
  transition: transform 0.2s ease;
}

.hover-scale:hover {
  transform: scale(1.05);
}

.skill-pill {
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.skill-pill:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Animations */
.animate-fade-in {
  animation: fadeIn 1s ease-in-out;
}

.animate-slide-up {
  animation: slideUp 0.5s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes slideUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>