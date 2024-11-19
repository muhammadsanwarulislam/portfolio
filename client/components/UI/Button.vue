<template>
    <a :href="link" target="_blank">
        <button :class="computedClass">
            <slot />
        </button>
    </a>
</template>

<script setup>
const { link, variant } = defineProps({
    link: { type: String, required: true },
    variant: { type: String, default: 'default' }
});

const computedClass = computed(() => {
    const base =
        'inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring';
    const variants = {
        default: 'focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 rounded-xl w-12 h-12 backdrop-blur-md bg-main-mid-light hover:bg-main-light border-none text-alter/60 dark:bg-alter-mid-light dark:hover:bg-alter-light dark:text-main/70',
        contact: 'backdrop-blur-md rounded-xl border-4 border-ochre bg-ochre/60 hover:bg-ochre dark:hover:bg-ochre px-4 py-2 h-12 text-ochre-text hover:text-alter-light'
    };

    return `${base} ${variants[variant] || variants.default}`;
});
</script>
