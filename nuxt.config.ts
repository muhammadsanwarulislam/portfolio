import tailwindcss from "@tailwindcss/vite";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-05-15',
  devtools: { enabled: true },
  css: ['~/assets/css/main.css'],
  vite: {
    plugins: [
      tailwindcss()
    ]
  },
  app: {
    head: {
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1.0',
      title: 'Sanwarul Islam | Software Engineer',
      meta: [
        { name: 'description', content: 'Sanwarul Islam - Software Engineer Portfolio. Expert in PHP, Laravel, and Nuxt.js for building scalable web applications.' },
        { name: 'keywords', content: 'software engineer, PHP, Laravel, Nuxt.js, web developer, portfolio, remote work' },
        { name: 'author', content: 'Sanwarul Islam' }
      ],
      link: [
        { rel: 'icon', type: 'image/png', href: '/favicon.ico' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap' }
      ]
    }
  }
})
