import tailwindcss from "@tailwindcss/vite";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  css: ['./app/assets/css/main.css'],
  vite: {
    plugins: [
      tailwindcss(),
    ]
  },
  app: {
    head: {
      title: 'Sanwarul Islam - Software Engineer',
      htmlAttrs: {
        lang: 'en',
      },
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { name: 'description', content: 'Portfolio of Sanwarul Islam, a passionate Software Engineer specializing in web development and software solutions.' },
        { name: 'author', content: 'Sanwarul Islam' },
        { name: 'keywords', content: 'Software Engineer, PHP, Laravel, MySQL, Nuxt.js, Vue.js, Full-Stack Developer' },
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
      ],
  },
  },
})
