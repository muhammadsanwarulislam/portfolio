<template>
    <section id="about" class="text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Profile Image -->
            <div class="md:w-1/3 flex justify-center">
                <div class="relative">
                    <img 
                        src="https://via.placeholder.com/300x300" 
                        alt="Sanwarul" 
                        class="rounded-2xl w-64 h-64 object-cover border-4 border-gray-700 shadow-xl"
                    />
                    <div class="absolute -bottom-3 -right-3 bg-teal-600 text-white px-4 py-2 rounded-lg">
                        👨‍💻 Developer
                    </div>
                </div>
            </div>
            
            <!-- About Content -->
            <div class="md:w-2/3">
                <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                    <span class="text-teal-400">About</span> Me
                </h2>
                
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    I'm a passionate Full Stack Developer with expertise in modern web technologies. 
                    I specialize in creating efficient, scalable, and user-friendly applications that 
                    solve real-world problems.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-gray-800/50 p-5 rounded-xl">
                        <h3 class="text-xl font-semibold mb-3 text-teal-400">Experience</h3>
                        <p class="text-gray-400">
                            3+ years of experience in web development, working with various technologies 
                            and frameworks.
                        </p>
                    </div>
                    
                    <div class="bg-gray-800/50 p-5 rounded-xl">
                        <h3 class="text-xl font-semibold mb-3 text-teal-400">Education</h3>
                        <p class="text-gray-400">
                            BSc in Computer Science, with focus on software engineering and web technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>