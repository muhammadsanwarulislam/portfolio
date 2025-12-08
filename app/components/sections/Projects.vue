<template>
    <section id="projects" class="text-center">
        <h2 class="text-3xl font-bold mb-4">My Latest <span class="text-teal-400">Projects</span></h2>
        <p class="text-gray-400 mb-12 max-w-2xl mx-auto">
            Here are some of my recent projects that showcase my skills and passion for development.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <ProjectCard 
                title="E-Commerce Platform"
                description="A full-featured e-commerce solution with cart, checkout, and admin dashboard."
                image="https://via.placeholder.com/400x250/1e40af/ffffff"
                :technologies="['Laravel', 'Vue.js', 'MySQL']"
                isLive
                liveLink="#"
                githubLink="#"
            />
            
            <ProjectCard 
                title="Task Management App"
                description="Collaborative task management application with real-time updates."
                image="https://via.placeholder.com/400x250/7c3aed/ffffff"
                :technologies="['Node.js', 'React', 'Socket.io']"
                liveLink="#"
                githubLink="#"
            />
            
            <ProjectCard 
                title="Portfolio Website"
                description="Modern portfolio website built with Nuxt.js and Tailwind CSS."
                image="https://via.placeholder.com/400x250/0d9488/ffffff"
                :technologies="['Nuxt.js', 'Tailwind', 'TypeScript']"
                isLive
                liveLink="#"
                githubLink="#"
            />
            
            <ProjectCard 
                title="API Gateway"
                description="Microservices API gateway with authentication and rate limiting."
                image="https://via.placeholder.com/400x250/db2777/ffffff"
                :technologies="['Node.js', 'Express', 'Redis', 'Docker']"
                githubLink="#"
            />
            
            <ProjectCard 
                title="Weather Dashboard"
                description="Real-time weather application with interactive charts and maps."
                image="https://via.placeholder.com/400x250/f59e0b/ffffff"
                :technologies="['Vue.js', 'Chart.js', 'Weather API']"
                isLive
                liveLink="#"
            />
            
            <ProjectCard 
                title="Blog CMS"
                description="Content management system for blogging with rich text editor."
                image="https://via.placeholder.com/400x250/4f46e5/ffffff"
                :technologies="['Laravel', 'Alpine.js', 'PostgreSQL']"
                githubLink="#"
            />
        </div>
        
        <!-- View More Button -->
        <div class="mt-12">
            <a href="#" 
               class="inline-flex items-center gap-2 px-6 py-3 border border-gray-600 hover:border-teal-500 text-gray-300 hover:text-teal-400 rounded-lg font-medium transition duration-300">
                View All Projects
                <span>→</span>
            </a>
        </div>
    </section>
</template>

<script setup>
</script>