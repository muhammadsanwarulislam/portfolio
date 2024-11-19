<template>
    <div class="mt-5 relative overflow-hidden w-full h-full">
      <div class="flex items-center w-max animate-marquee" @mouseenter="stopAnimation" @mouseleave="startAnimation">
        <div v-for="(languageGroup, index) in duplicatedData" :key="index" class="flex">
          <div
            class="backdrop-blur-md bg-main-mid-light dark:bg-alter-mid-light border-2 border-main-dark dark:border-alter-light rounded-xl h-full mx-3">
            <div class="p-3 border-b-2 border-main-dark dark:border-alter-light">
              <h6 class="text-lg font-semibold text-center">
                {{ languageGroup.title }}
              </h6>
            </div>
            <div class="grid grid-cols-[repeat(auto-fill,minmax(80px,1fr))] p-5 gap-5 min-w-[300px]">
              <div v-for="lang in languageGroup.languages" :key="lang.name" class="flex flex-col items-center rounded-lg p-3">
                <component :is="lang.icon" class="mb-2 text-primary" />
                <span class="text-xs font-medium text-center">{{ lang.name }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  const { carouselData } = defineProps({
    carouselData: Array
  });
  
  const duplicatedData = computed(() => [...carouselData, ...carouselData]);
  
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
  animation: marquee 25s linear infinite;
  width: max-content;
  /* Ensure the width adjusts to content */
}

/* Adjust animation speed for smaller screens */
@media (max-width: 768px) {
  .animate-marquee {
    animation: marquee 30s linear infinite;
    /* Slower animation for mobile */
  }
}

/* General styling for carousel */
.backdrop-blur-md {
  width: 100%;
  max-width: 300px;
  /* Ensure blocks fit smaller screens */
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
  