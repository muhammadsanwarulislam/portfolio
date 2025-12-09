<template>
    <section id="resume" class="mb-16">
        <h2 class="text-3xl font-bold mb-4 text-center">
            My <span class="text-teal-400">Resume</span>
        </h2>
        <p class="text-gray-400 mb-12 text-center max-w-2xl mx-auto">
            Professional experience and project contributions in software engineering
        </p>
        
        <!-- Experience Timeline -->
        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold mb-8 text-white border-b border-gray-700 pb-3">
                💼 Work Experience
            </h3>
            
            <div class="space-y-8">
                <div 
                    v-for="exp in experiences" 
                    :key="exp.id"
                    class="bg-gray-800/30 p-6 rounded-xl border-l-4"
                    :class="{
                        'border-teal-500': exp.color === 'teal',
                        'border-blue-500': exp.color === 'blue',
                        'border-green-500': exp.color === 'green'
                    }"
                >
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                        <h4 class="text-xl font-bold text-white">{{ exp.company }}</h4>
                        <span 
                            class="font-medium px-4 py-1 rounded-full mt-2 md:mt-0"
                            :class="{
                                'bg-teal-500/10 text-teal-400': exp.color === 'teal',
                                'bg-blue-500/10 text-blue-400': exp.color === 'blue',
                                'bg-green-500/10 text-green-400': exp.color === 'green'
                            }"
                        >
                            {{ exp.duration }}
                        </span>
                    </div>
                    <p class="text-gray-300 mb-2 font-medium">{{ exp.position }}</p>
                    <p class="text-gray-400 mb-4">{{ exp.description }}</p>
                    <ul class="space-y-2 text-gray-400">
                        <li 
                            v-for="(achievement, index) in exp.achievements" 
                            :key="index"
                            class="flex items-start gap-2"
                        >
                            <span 
                                class="mt-1"
                                :class="{
                                    'text-teal-400': exp.color === 'teal',
                                    'text-blue-400': exp.color === 'blue',
                                    'text-green-400': exp.color === 'green'
                                }"
                            >
                                ✓
                            </span>
                            <span>{{ achievement }}</span>
                        </li>
                    </ul>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span 
                            v-for="tech in exp.technologies" 
                            :key="tech"
                            class="px-3 py-1 bg-gray-900 text-gray-300 text-sm rounded-lg"
                        >
                            {{ tech }}
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Download Resume Button -->
            <div class="mt-12 text-center">
                <a 
                    :href="profile.personal.resumeUrl" 
                    download
                    class="inline-flex items-center gap-2 px-8 py-3 bg-teal-600 hover:bg-teal-700 text-white rounded-lg font-semibold transition duration-300"
                >
                    <span>📥</span>
                    Download Full Resume (PDF)
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
const { getProfile, getExperiences } = useContent()
const profile = getProfile()
const experiences = getExperiences()
</script>