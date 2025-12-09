<template>
  <div class="theme-bg theme-text min-h-screen transition-colors duration-300">
    <!-- Mobile Menu -->
    <MobileMenu />
    
    <div class="flex min-h-screen">
      <!-- Fixed Sidebar -->
      <div class="hidden md:block fixed left-0 top-0 h-screen overflow-y-auto">
        <Sidebar />
      </div>
      
      <!-- Scrollable Main Content -->
      <main class="flex-1 md:ml-72 p-6 md:p-12 w-full overflow-y-auto">
        <!-- Theme Toggle (Floating) -->
        <div class="fixed bottom-6 right-6 z-50">
          <ThemeToggle />
        </div>
        
        <slot />
      </main>
    </div>
  </div>
</template>

<script setup>
</script>