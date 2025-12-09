<template>
    <section id="projects" class="text-center relative">
        <!-- Background Elements -->
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl"></div>

        <div class="relative z-10">
            <h2 class="text-4xl font-bold mb-4">
                My <span class="text-transparent bg-clip-text bg-linear-to-r from-teal-400 to-purple-500">Latest
                    Projects</span>
            </h2>

            <p class="text-gray-400 mb-12 max-w-2xl mx-auto text-lg">
                Here are some of my recent projects that showcase my skills and passion for development.
                Each project demonstrates different aspects of my technical expertise.
            </p>

            <!-- Project Filters -->
            <!-- <div class="mb-10 flex flex-wrap justify-center gap-3">
                <button v-for="category in categories" :key="category.id" @click="activeCategory = category.id" :class="[
                    'px-4 py-2 rounded-lg font-medium transition duration-300',
                    activeCategory === category.id
                        ? 'bg-teal-600 text-white hover:bg-teal-700'
                        : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'
                ]">
                    {{ category.icon }} {{ category.name }}
                </button>
            </div> -->

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <ProjectCard v-for="project in filteredProjects" :key="project.id" :title="project.title"
                    :description="project.description" :image="project.image" :technologies="project.technologies"
                    :isLive="project.isLive" :liveLink="project.liveLink" :githubLink="project.githubLink" />
            </div>

            <!-- Empty State -->
            <div v-if="filteredProjects.length === 0" class="text-center py-12">
                <div class="text-5xl mb-4">📁</div>
                <h3 class="text-xl font-semibold text-gray-300 mb-2">No projects in this category</h3>
                <p class="text-gray-500">Try selecting a different category above</p>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed } from 'vue'

const { getProjects, getProjectCategories } = useContent()

const categories = getProjectCategories()
const activeCategory = ref('all')

const filteredProjects = computed(() => {
    return getProjects(activeCategory.value)
})

const showAllProjects = () => {
    activeCategory.value = 'all'
    document.getElementById('projects').scrollIntoView({ behavior: 'smooth' })
}
</script>