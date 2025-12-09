<template>
    <section id="about" class="text-center md:text-left">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h2 class="text-4xl font-bold mb-4">
                About <span class="text-transparent bg-clip-text bg-linear-to-r from-teal-400 to-purple-500">Me</span>
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                {{ profile.personal.tagline }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Personal Info Card -->
            <div class="bg-gray-800/50 rounded-2xl p-6 border border-gray-700 hover:border-teal-500/30 transition">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-linear-to-br from-teal-500 to-purple-600 rounded-full mx-auto flex items-center justify-center text-4xl mb-4">
                        {{ getInitials(profile.personal.name) }}
                    </div>
                    <h3 class="text-2xl font-bold text-white">{{ profile.personal.name }}</h3>
                    <p class="text-teal-400 font-medium">{{ profile.personal.title }}</p>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-gray-300">
                        <span class="text-teal-400">🏢</span>
                        <span>{{ profile.personal.currentRole }}</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-300">
                        <span class="text-teal-400">📍</span>
                        <span>{{ profile.personal.location }}</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-300">
                        <span class="text-teal-400">🎓</span>
                        <span>{{ profile.education.degree }}</span>
                    </div>
                </div>
            </div>

            <!-- About Text Card -->
            <div class="lg:col-span-2 bg-gray-800/50 rounded-2xl p-6 border border-gray-700 hover:border-teal-500/30 transition">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="text-teal-400">Professional</span> Overview
                </h3>
                
                <div class="space-y-4">
                    <p class="text-gray-300 leading-relaxed">
                        {{ profile.personal.about }}
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                        <div v-for="stat in profile.stats" :key="stat.label" 
                             class="bg-gray-900/50 p-4 rounded-xl text-center hover:bg-gray-900 transition">
                            <div class="text-2xl mb-2">{{ stat.icon }}</div>
                            <div class="text-xl font-bold text-white">{{ stat.value }}</div>
                            <div class="text-xs text-gray-400">{{ stat.label }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact & Education Card -->
            <div class="lg:col-span-3 bg-gray-800/50 rounded-2xl p-6 border border-gray-700 hover:border-teal-500/30 transition">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <span class="text-teal-400">Get In</span> Touch
                        </h3>
                        
                        <div class="space-y-4">
                            <a :href="`mailto:${profile.personal.email}`" 
                               class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-xl hover:bg-gray-900 transition group">
                                <div class="w-12 h-12 bg-teal-500/20 rounded-xl flex items-center justify-center">
                                    <span class="text-2xl">✉️</span>
                                </div>
                                <div class="text-left">
                                    <div class="text-gray-400 text-sm">Email</div>
                                    <div class="text-white group-hover:text-teal-400 transition">{{ profile.personal.email }}</div>
                                </div>
                            </a>
                            
                            <a :href="`tel:${profile.personal.phone}`" 
                               class="flex items-center gap-4 p-4 bg-gray-900/50 rounded-xl hover:bg-gray-900 transition group">
                                <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center">
                                    <span class="text-2xl">📱</span>
                                </div>
                                <div class="text-left">
                                    <div class="text-gray-400 text-sm">Phone</div>
                                    <div class="text-white group-hover:text-blue-400 transition">{{ profile.personal.phone }}</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Education Details -->
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <span class="text-teal-400">Education</span> Background
                        </h3>
                        
                        <div class="p-4 bg-linear-to-br from-gray-900 to-gray-800 rounded-xl">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center">
                                    <span class="text-2xl">🎓</span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white">{{ profile.education.university }}</h4>
                                    <p class="text-gray-400 text-sm">{{ profile.education.duration }}</p>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">Degree</span>
                                    <span class="text-white">{{ profile.education.degree }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">CGPA</span>
                                    <span class="text-teal-400 font-bold text-lg">{{ profile.education.cgpa }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const { getProfile } = useContent()
const profile = getProfile()

const getInitials = (name) => {
    return name.split(' ').map(word => word[0]).join('').toUpperCase()
}
</script>