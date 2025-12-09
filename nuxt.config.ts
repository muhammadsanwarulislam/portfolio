import tailwindcss from "@tailwindcss/vite";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  css: ['/assets/css/main.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ],
    json: { stringify: true }
  },
  app: {
    head: {
      titleTemplate: '%s | Sanwarul Islam',
      title: 'Portfolio',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1.0' },
        { name: 'description', content: 'Full Stack Developer Portfolio' }
      ],
      htmlAttrs: {
        lang: 'en'
      }
    }
  },
  nitro: {
    preset: 'node-server'
  }
})
