<template>
  <div class="flex flex-col items-center">
    <!-- Center container for all sections -->
    <div class="w-full max-w-4xl px-4 md:px-6">
      <section id="home" class="mb-20 md:mb-32 scroll-mt-20">
        <SectionsHome />
      </section>
      
      <section id="about" class="mb-20 md:mb-32 scroll-mt-20">
        <SectionsAbout />
      </section>
      
      <section id="projects" class="mb-20 md:mb-32 scroll-mt-20">
        <SectionsProjects />
      </section>
      
      <SectionsFooter />
    </div>
  </div>
</template>

<script setup>
onMounted(() => {
  if (typeof window !== 'undefined') {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault()
        const targetId = this.getAttribute('href').substring(1)
        const targetElement = document.getElementById(targetId)
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          })
        }
      })
    })
  }
})
</script>

<style>
html {
  scroll-behavior: smooth;
}

@media (max-width: 767px) {
  section {
    scroll-margin-top: 4rem;
  }
}
</style>