// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  ssr: false,
  compatibilityDate: "2024-04-03",
  devtools: { enabled: true },
  css: ["~/assets/css/main.css"],

  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },

  modules: ["@nuxtjs/i18n", "@pinia/nuxt", "@pinia-plugin-persistedstate/nuxt"],

  i18n: {
    vueI18n: "./i18n.config.ts",
  },

  runtimeConfig: {
    public: {
      apiURL: process.env.NUXT_PUBLIC_API_URL,
      appMode: process.env.NUXT_PUBLIC_APP_MODE,
    },
  },

  app: {
    head: {
      title: "Portfolio | Sanwarul",
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        {
          hid: "description",
          name: "description",
          content: "This is portfolio of Sanwarul.",
        },
        {
          hid: "keywords",
          name: "keywords",
          content: "sanwarul, centerpoint, muhammad, laravel, nuxt3",
        },
        { name: "author", content: "Muhammad Sanwarul Islam" },
        { property: "og:title", content: "sanwarul" },
        { property: "og:description", content: "Your website description" },
        { property: "og:image", content: "/path-to-your-image.jpg" },
        { property: "og:url", content: "https://sanwarul.com" },
        { name: "twitter:card", content: "summary_large_image" },
        { name: "twitter:title", content: "Your Website Title" },
        { name: "twitter:description", content: "Your website description" },
        { name: "twitter:image", content: "/path-to-your-image.jpg" },
      ],
    },
  },
});
