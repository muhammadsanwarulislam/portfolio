<template>
    <div class="bg-gray-900 text-gray-200 font-sans min-h-screen">
        <MobileMenu />
        <div class="min-h-screen flex">
            <!-- Sidebar - Hidden on mobile, visible on medium+ screens -->
            <div class="hidden md:block fixed left-0 top-0 h-screen overflow-y-auto">
                <Sidebar />
            </div>

            <!-- Main Content -->
            <main class="flex-1 md:ml-72 p-6 md:p-12 w-full overflow-y-auto">
                <slot />
            </main>
        </div>
    </div>
</template>