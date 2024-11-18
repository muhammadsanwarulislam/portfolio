<template>
    <header class="sticky top-0 left-0 w-full z-10">
        <div class="h-full max-w-[1220px] mx-auto p-2 md:p-5">
            <div class="p-3 rounded-xl backdrop-blur-md bg-main-mid-light/90 dark:bg-alter-mid-light/90">
                <div class="flex items-center justify-between">
                    <!-- Left Section -->
                    <div>
                        <div class="flex">
                            <span class="text-2xl">✌️</span>
                            <div class="flex flex-col justify-start">
                                <nuxt-link class="block text-ochre text-2xl font-semibold transition-colors" to="/">
                                    <span class="sr-only">Home</span>{{ $t("sanwarul") }}.
                                </nuxt-link>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 ml-1 mt-1">
                            <div class="flex items-center">
                                <span class="relative flex size-2 mr-2">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75 bg-green-400"></span>
                                    <span class="relative inline-flex rounded-full size-2 bg-green-500"></span>
                                </span>
                                <p class="text-xs font-normal">Available for work</p>
                            </div>
                            <span class="text-xs">/</span>
                            <p class="text-xs font-normal">Remote</p>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="hidden md:block transition-all">
                        <nav aria-label="Global">
                            <ul class="flex items-center gap-3 text-sm">
                                <li>
                                    <nuxt-link
                                        class="nav-item transition-all hover:bg-main dark:hover:bg-alter-light px-3 rounded-lg min-w-20 h-12 flex flex-col items-center justify-center bg-main dark:bg-alter-light text-ochre dark:text-ochre"
                                        to="/">
                                        <UISvgHome />
                                        <p class="text-xs font-normal mt-1">{{ $t("home") }}</p>
                                    </nuxt-link>
                                </li>
                                <li>
                                    <nuxt-link
                                        class="nav-item transition-all hover:bg-main dark:hover:bg-alter-light px-3 rounded-lg min-w-20 h-12 flex flex-col items-center justify-center"
                                        to="/experience">
                                        <UISvgExperience />
                                        <p class="text-xs font-normal mt-1">{{ $t("experience") }}</p>
                                    </nuxt-link>
                                </li>
                                <li>
                                    <nuxt-link
                                        class="nav-item transition-all hover:bg-main dark:hover:bg-alter-light px-3 rounded-lg min-w-20 h-12 flex flex-col items-center justify-center"
                                        to="/projects">
                                        <UISvgProjects />
                                        <p class="text-xs font-normal mt-1">{{ $t("projects") }}</p>
                                    </nuxt-link>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Language and Theme -->
                    <div class="flex items-center gap-3">
                        <button @click="openModal"
                            class="inline-flex items-center justify-center h-10 w-10 rounded-xl bg-main-mid-light dark:bg-alter-light/60 hover:bg-main dark:hover:bg-alter-light text-sm font-medium">
                            <span>{{ selected_lang === 'en' ? 'EN' : 'BN' }}</span>
                        </button>
                        <button
                            class="inline-flex items-center justify-center h-10 w-10 rounded-xl bg-moonstone-light/50 hover:bg-moonstone/50">
                            <UISvgMoon />
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <UILanguageModal v-if="isModalOpen" :isOpen="isModalOpen" :selectedLang="selected_lang" :languages="languages"
            @close="closeModal" @select="handleLanguageSelection" />
    </header>
</template>


<script setup>
const state_user_data = storeUserData();
const { addLang } = state_user_data;

// Change Language
const { locale, t } = useI18n();
const state = storeUserData();

const selected_lang = ref(state.lang ? state.lang : "en");
locale.value = selected_lang.value;

// Available Languages
const languages = [
    { name: "English", code: "en" },
    { name: "Bangla", code: "bn" },
];

// Change Language
function changeLanguage() {
    addLang(selected_lang.value);
    locale.value = selected_lang.value;
}

// Handle Language Selection from Modal
function handleLanguageSelection(lang) {
    selected_lang.value = lang;
    changeLanguage();
}

// Modal State
const isModalOpen = ref(false);

const openModal = () => {
    isModalOpen.value = true;
};

const closeModal = () => {
    isModalOpen.value = false;
};

</script>