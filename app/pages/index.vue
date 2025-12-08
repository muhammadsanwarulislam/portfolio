<template>
  <div>
    <section id="home" class="mb-16 scroll-mt-20">
      <SectionsHome />
    </section>
    
    <section id="about" class="mb-16 scroll-mt-20">
      <SectionsProjects />
    </section>
    
    <SectionsFooter />
  </div>
</template>

<script setup>
// Add smooth scrolling globally
onMounted(() => {
  if (typeof window !== 'undefined') {
    // Add smooth scrolling to anchor links
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
/* Global smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* Offset for fixed header on mobile */
@media (max-width: 767px) {
  section {
    scroll-margin-top: 4rem; /* Height of mobile menu */
  }
}
</style>