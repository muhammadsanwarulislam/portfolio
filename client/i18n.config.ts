export default defineI18nConfig(async () => {
    const defaultLocale = 'en'
    const locales = ['en', 'bn']
    const messages = {}

    // Fetch translations for each locale
    for (const locale of locales) {
        try {
            const response = await $http(`/translations/${locale}`, {
                method: "GET",
            })
            messages[locale] = response
        } catch (error) {
            console.error(`Failed to load ${locale} translations:`, error)
            messages[locale] = {}
        }
    }

    return {
        legacy: false,
        locale: defaultLocale,
        messages,
        fallbackLocale: defaultLocale,
    }
})
