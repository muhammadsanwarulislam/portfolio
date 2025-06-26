<template>
  <form @submit.prevent="submitForm" class="space-y-4">
    <div>
      <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Name</label>
      <input type="text" id="name" v-model="form.name" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-gray-300 focus:ring-secondary-500 focus:border-secondary-500 hover-scale" required>
    </div>
    <div>
      <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
      <input type="email" id="email" v-model="form.email" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-gray-300 focus:ring-secondary-500 focus:border-secondary-500 hover-scale" required>
    </div>
    <div>
      <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Message</label>
      <textarea id="message" v-model="form.message" rows="4" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-gray-300 focus:ring-secondary-500 focus:border-secondary-500 hover-scale" required></textarea>
    </div>
    <div v-if="error" class="text-red-400 text-sm">{{ error }}</div>
    <button type="submit" class="w-full bg-secondary-500 hover:bg-secondary-600 text-white px-6 py-3 rounded-lg font-medium transition-colors hover-scale">
      {{ isLoading ? 'Sending...' : 'Send Message' }}
    </button>
  </form>
</template>

<script setup>
const form = ref({
  name: '',
  email: '',
  message: ''
})

const error = ref('')
const isLoading = ref(false)

const submitForm = () => {
  isLoading.value = true
  error.value = ''
  // TODO: send form data to server
  isLoading.value = false
}
</script>