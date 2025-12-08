<template>
    <footer class="mt-20 py-10 border-t border-gray-800">
        <div class="text-center">
            <!-- Logo/Brand -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold">
                    Sanwarul<span class="text-teal-400">.</span>
                </h3>
                <p class="text-gray-400 mt-2">Full Stack Developer</p>
            </div>
            
            <!-- Social Links -->
            <div class="flex justify-center gap-6 mb-8">
                <a 
                    href="#"
                    class="text-gray-400 hover:text-teal-400 transition duration-300 text-xl"
                    aria-label="GitHub"
                >
                    <span class="inline-block w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center">
                        <span>🐱</span>
                    </span>
                </a>
                <a 
                    href="#"
                    class="text-gray-400 hover:text-teal-400 transition duration-300 text-xl"
                    aria-label="LinkedIn"
                >
                    <span class="inline-block w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center">
                        <span>💼</span>
                    </span>
                </a>
                <a 
                    href="#"
                    class="text-gray-400 hover:text-teal-400 transition duration-300 text-xl"
                    aria-label="Twitter"
                >
                    <span class="inline-block w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center">
                        <span>🐦</span>
                    </span>
                </a>
                <a 
                    href="#"
                    class="text-gray-400 hover:text-teal-400 transition duration-300 text-xl"
                    aria-label="Email"
                >
                    <span class="inline-block w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center">
                        <span>✉️</span>
                    </span>
                </a>
            </div>
            
            <!-- Copyright -->
            <div class="text-gray-500 text-sm">
                <p>© {{ currentYear }} Sanwarul. All rights reserved.</p>
                <p class="mt-2">Crafted with ❤️ by Sanwarul</p>
            </div>
            
            <!-- Back to Top -->
            <button 
                @click="scrollToTop"
                class="mt-8 text-gray-400 hover:text-teal-400 transition duration-300"
                aria-label="Back to top"
            >
                <span class="inline-block animate-bounce">↑</span>
                <span class="ml-2">Back to top</span>
            </button>
        </div>
    </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}
</script>