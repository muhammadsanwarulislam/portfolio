<script setup>
const loader = ref(null);

onMounted(() => {
  loader.value?.show();
});

onNuxtReady(() => {
  loader.value?.hide();
});
</script>

<template>
  <div class="relative h-full w-full flex flex-col">
    <UILoding ref="loader" />
    <NuxtLayout>
      <NuxtPage />
    </NuxtLayout>
  </div>
</template>
