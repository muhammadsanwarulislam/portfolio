<template>
    <section id="skills" class="mb-16">
        <h2 class="text-3xl font-bold mb-4 text-center">
            My <span class="text-teal-400">Skills</span> & Expertise
        </h2>
        <p class="text-gray-400 mb-12 text-center max-w-2xl mx-auto">
            Technical skills and technologies I work with daily to build robust applications
        </p>
        
        <!-- Skills Categories -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div 
                v-for="category in skills.categories" 
                :key="category.id"
                class="bg-gray-800/50 p-6 rounded-xl border border-gray-700 hover:border-teal-500/30 transition"
            >
                <div class="flex items-center gap-3 mb-4">
                    <div class="text-teal-400 text-2xl">{{ category.icon }}</div>
                    <h3 class="text-xl font-semibold text-white">{{ category.name }}</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span 
                        v-for="skill in category.skills" 
                        :key="skill"
                        class="px-3 py-2 bg-gray-900 text-gray-300 rounded-lg font-medium hover:bg-gray-800 hover:text-white transition"
                    >
                        {{ skill }}
                    </span>
                </div>
            </div>
        </div>
        
        <!-- Expertise Levels -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold mb-6 text-center text-white">Expertise Levels</h3>
            <div class="max-w-3xl mx-auto space-y-6">
                <div 
                    v-for="expertise in skills.expertise" 
                    :key="expertise.title"
                    class="bg-gray-800/30 p-4 rounded-lg"
                >
                    <div class="flex justify-between mb-2">
                        <h4 class="font-semibold text-white">{{ expertise.title }}</h4>
                        <span class="text-teal-400 font-bold">{{ expertise.level }}%</span>
                    </div>
                    <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                        <div 
                            class="h-full bg-gradient-to-r from-teal-500 to-teal-600 rounded-full transition-all duration-1000"
                            :style="{ width: `${expertise.level}%` }"
                        ></div>
                    </div>
                    <p class="text-sm text-gray-400 mt-2">{{ expertise.description }}</p>
                </div>
            </div>
        </div>
        
        <!-- Key Strengths -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold mb-6 text-center text-white">Key Strengths</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray-800/30 p-4 rounded-lg text-center">
                    <div class="text-teal-400 text-xl mb-2">⚡</div>
                    <h4 class="font-semibold text-white mb-1">Performance Optimization</h4>
                    <p class="text-sm text-gray-400">Improved API response times by 30%</p>
                </div>
                <div class="bg-gray-800/30 p-4 rounded-lg text-center">
                    <div class="text-teal-400 text-xl mb-2">🏗️</div>
                    <h4 class="font-semibold text-white mb-1">Scalable Solutions</h4>
                    <p class="text-sm text-gray-400">Building maintainable backend systems</p>
                </div>
                <div class="bg-gray-800/30 p-4 rounded-lg text-center">
                    <div class="text-teal-400 text-xl mb-2">🛡️</div>
                    <h4 class="font-semibold text-white mb-1">Security Implementation</h4>
                    <p class="text-sm text-gray-400">OAuth2 & secure authentication systems</p>
                </div>
                <div class="bg-gray-800/30 p-4 rounded-lg text-center">
                    <div class="text-teal-400 text-xl mb-2">👥</div>
                    <h4 class="font-semibold text-white mb-1">Team Collaboration</h4>
                    <p class="text-sm text-gray-400">Cross-functional team leadership</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const { getSkills } = useContent()
const skills = getSkills()
</script>