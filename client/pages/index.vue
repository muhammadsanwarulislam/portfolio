<template>
  <div class="flex-1 overflow-y-auto">
    <div class="max-w-[1220px] mx-auto min-h-full px-2 md:px-5">
      <div class="pb-16 md:pb-5">
        <main class="pb-6 md:pb-0">
          <div class="space-y-20 pt-8 md:pt-16">
            <div class="max-w-[800px] mx-auto" style="opacity: 1; transform: none; will-change: transform">
              <div class="flex items-center max-md:flex-col max-md:space-y-8 md:space-x-16">
                <div class="flex flex-col items-center">
                  <div
                    class="relative size-32 md:size-64 bg-main-mid dark:bg-alter-mid rounded-full border-2 border-main-dark dark:border-alter-light">
                    <!-- <img class="rounded-full object-cover object-center"
                      style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"
                      src="/assets/img/me.jpg" alt="sanwarul.jpg" /> -->

                    <div class="absolute -top-5 md:top-3 right-0 translate-x-1/4">
                      <div
                        class="backdrop-blur-md bg-main-mid/60 dark:bg-alter-mid/60 py-2 px-2 rounded-xl text-sm max-w-[150px] text-center border-2 border-main-dark dark:border-alter-light">
                        👨&zwj;💻 Work hard
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <h1 class="text-3xl md:text-5xl font-bold text-center">
                    👋 Hey, I'm Sanwarul Islam
                  </h1>
                  <div class="flex space-x-5 mt-3 justify-center">
                    <div class="bg-main-mid-light dark:bg-alter-mid-light px-3 py-1 mt-2 rounded-full w-fit">
                      <p class="text-xs font-light text-alter dark:text-main">
                        Backend
                      </p>
                    </div>
                    <div class="bg-main-mid-light dark:bg-alter-mid-light px-3 py-1 mt-2 rounded-full w-fit">
                      <p class="text-xs font-light text-alter dark:text-main">
                        Frontend
                      </p>
                    </div>
                  </div>
                  <p class="mt-5 text-sm md:text-base font-normal leading-6 text-center">
                    Experienced fullstack developer with over 5 years of
                    experience in building products using modern technologies
                    (NextJS, NodeJS, PostgreSQL, Blockchain, etc.). I have a
                    proven ability to quickly master new fields, including
                    blockchain and frontend development. Effective both as an
                    individual contributor and a team member.
                  </p>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-[500px] mx-auto space-y-5">
                  <div class="flex flex-wrap justify-center gap-2 md:gap-3">
                    <a target="_blank" href="">
                      <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 rounded-xl w-12 h-12 backdrop-blur-md bg-main-mid-light hover:bg-main-light border-none text-alter/60 dark:bg-alter-mid-light dark:hover:bg-alter-light dark:text-main/70">
                        <UISvgGithub />
                      </button>
                    </a>
                    <a target="_blank" href="">
                      <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 rounded-xl w-12 h-12 backdrop-blur-md bg-main-mid-light hover:bg-main-light border-none text-alter/60 dark:bg-alter-mid-light dark:hover:bg-alter-light dark:text-main/70">
                        <UISvgLinkedin />
                      </button>
                    </a>
                    <a target="_blank" href="">
                      <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 backdrop-blur-md rounded-xl border-4 border-ochre bg-ochre/60 hover:bg-ochre dark:hover:bg-ochre px-4 py-2 h-12 text-ochre-text hover:text-alter-light dark:text-ochre-light-text">
                        <UISvgContact /> Contact me
                      </button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Stack Section -->
            <div>
              <h1 class="text-2xl md:text-3xl font-bold text-center">Stack</h1>
              <div class="mt-5 relative overflow-hidden w-full h-full">
                <!-- Carousel Wrapper -->
                <div class="flex items-center w-max animate-marquee" @mouseenter="stopAnimation"
                  @mouseleave="startAnimation">
                  <!-- Duplicate items for seamless looping -->
                  <div v-for="(languageGroup, index) in duplicatedData" :key="index" class="flex">
                    <div
                      class="backdrop-blur-md bg-main-mid-light dark:bg-alter-mid-light border-2 border-main-dark dark:border-alter-light rounded-xl h-full mx-3">
                      <div class="p-3 border-b-2 border-main-dark dark:border-alter-light">
                        <h6 class="text-lg font-semibold text-center">
                          {{ languageGroup.title }}
                        </h6>
                      </div>
                      <div class="grid grid-cols-[repeat(auto-fill,minmax(80px,1fr))] p-5 gap-5 min-w-[300px]">
                        <div v-for="lang in languageGroup.languages" :key="lang.name"
                          class="flex flex-col items-center rounded-lg p-3">
                          <component :is="lang.icon" class="mb-2 text-primary" />
                          <span class="text-xs font-medium text-center">{{ lang.name }}</span>
                        </div>
                      </div>
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
import UISvgPostman from '~/components/UI/Svg/Postman.vue';
import UISvgTypescript from '~/components/UI/Svg/Typescript.vue';
import UISvgGithub from '~/components/UI/Svg/Github.vue';
import UISvgLinkedin from '~/components/UI/Svg/Linkedin.vue';
import UISvgPhp from '~/components/UI/Svg/Php.vue';
import UISvgPython from '~/components/UI/Svg/Python.vue';
import UISvgLaravel from '~/components/UI/Svg/Laravel.vue';
import UISvgJs from '~/components/UI/Svg/Js.vue';
import UISvgMysql from '~/components/UI/Svg/Mysql.vue';

definePageMeta({ layout: "default" });

const languagesData = ref([
  {
    title: 'Languages',
    languages: [
      { name: 'JavaScript', icon: UISvgJs },
      { name: 'TypeScript', icon: UISvgTypescript },
      { name: 'PHP', icon: UISvgPhp },
      { name: 'Python', icon: UISvgPython },
    ]
  },
  {
    title: 'Library/Framework',
    languages: [
      { name: 'Laravel', icon: UISvgLaravel }
    ]
  },
  {
    title: 'Database',
    languages: [
      { name: 'MySQL', icon: UISvgMysql },
    ]
  },
  {
    title: 'Testing',
    languages: [
      { name: 'MySQL', icon: UISvgMysql },
    ]
  }
]);

const currentIndex = ref(0);
const interval = ref(null);

const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % languagesData.value.length;
};

onMounted(() => {
  if (languagesData.value.length > 3) {
    interval.value = setInterval(nextSlide, 1000);
  }
});

onUnmounted(() => {
  clearInterval(interval.value);
});

// Duplicate data for seamless looping
const duplicatedData = ref([...languagesData.value, ...languagesData.value]);

// Pause and resume animation
const stopAnimation = () => {
  const marquee = document.querySelector(".animate-marquee");
  marquee.style.animationPlayState = "paused";
};

const startAnimation = () => {
  const marquee = document.querySelector(".animate-marquee");
  marquee.style.animationPlayState = "running";
};
</script>

<style scoped>
/* Keyframe animation for marquee effect */
@keyframes marquee {
  from {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-100%);
  }
}

.animate-marquee {
  display: flex;
  animation: marquee 20s linear infinite;
  width: max-content; /* Ensure the width adjusts to content */
}

/* Adjust animation speed for smaller screens */
@media (max-width: 768px) {
  .animate-marquee {
    animation: marquee 30s linear infinite; /* Slower animation for mobile */
  }
}

/* General styling for carousel */
.backdrop-blur-md {
  width: 100%;
  max-width: 300px; /* Ensure blocks fit smaller screens */
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
  gap: 1rem;
}

/* Ensure icons and text scale correctly */
.component {
  font-size: 1.5rem;
}

.text-xs {
  font-size: 0.75rem;
}
</style>

