<template>
    <div
      v-if="isOpen"
      class="fixed inset-0 z-50 grid place-items-center bg-black/50 backdrop-blur-sm"
      @click.self="emitClose"
    >
      <div
        role="dialog"
        aria-labelledby="modal-title"
        aria-describedby="modal-description"
        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-[90%] max-w-md p-6"
      >
        <div class="flex justify-between items-center mb-4">
          <h2 id="modal-title" class="text-lg font-bold">Change Language</h2>
          <button
            @click="emitClose"
            class="text-gray-500 hover:text-gray-800 dark:hover:text-white"
          >
            ✕
          </button>
        </div>
        <p id="modal-description" class="text-sm text-gray-600 dark:text-gray-400 mb-4">
          Select your preferred language:
        </p>
        <ul>
          <li
            v-for="(lang, index) in languages"
            :key="index"
            @click="emitSelect(lang.code)"
            class="cursor-pointer py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700"
            :class="{ 'bg-gray-200 dark:bg-gray-700': lang.code === selectedLang }"
          >
            <span class="font-medium">{{ lang.name }}</span>
            <span class="text-sm text-gray-500 ml-2">({{ lang.code }})</span>
          </li>
        </ul>
      </div>
    </div>
  </template>
  
  <script setup>
  defineProps({
    isOpen: {
      type: Boolean,
      required: true,
    },
    selectedLang: {
      type: String,
      required: true,
    },
    languages: {
      type: Array,
      required: true,
    },
  });
  
  const emit = defineEmits(["close", "select"]);
  
  const emitClose = () => {
    emit("close"); // Notify the parent to close the modal
  };
  
  const emitSelect = (lang) => {
    emit("select", lang); // Notify the parent about the selected language
    emitClose(); // Close the modal after language selection
  };
  </script>
  