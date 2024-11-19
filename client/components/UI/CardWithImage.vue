<template>
  <div class="flex items-center max-md:flex-col max-md:space-y-8 md:space-x-16">
    <div class="flex flex-col items-center">
      <div
        class="relative size-32 md:size-64 bg-main-mid dark:bg-alter-mid rounded-full border-2 border-main-dark dark:border-alter-light">
        <img class="rounded-full object-cover object-center" style="
                        position: absolute;
                        height: 100%;
                        width: 100%;
                        inset: 0px;
                        color: transparent;
                      " :src="profileImg" :alt="imgAlt" />
        <div class="absolute -top-5 md:top-3 right-0 translate-x-1/4">
          <div
            class="backdrop-blur-md bg-main-mid/60 dark:bg-alter-mid/60 py-2 px-2 rounded-xl text-sm max-w-[150px] text-center border-2 border-main-dark dark:border-alter-light">
            👨‍💻 Work hard
          </div>
        </div>
      </div>
    </div>
    <div class="flex-1">
      <h1 class="text-3xl md:text-5xl font-bold text-center">
        👋 Hey, I'm {{ name }}
      </h1>
      <div class="flex space-x-5 mt-3 justify-center">
        <div v-for="tag in tags" :key="tag"
          class="bg-main-mid-light dark:bg-alter-mid-light px-3 py-1 mt-2 rounded-full w-fit">
          <p class="text-xs font-light text-alter dark:text-main">
            {{ tag }}
          </p>
        </div>
      </div>
      <p class="mt-5 text-sm md:text-base font-normal leading-6 text-center">
        {{ description }}
      </p>
    </div>
  </div>
</template>

<script setup>
defineProps({
  name: String,
  profileImg: String,
  imgAlt: String,
  tags: Array,
  description: String
});
</script>