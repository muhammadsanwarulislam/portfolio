import { ref, watch } from 'vue';

interface Project {
  key: string;
  title: string;
  description: string;
  technologies: string[];
  liveLink: string;
  codeLink: string;
}

const projects: Record<string, Project> = {
  ecommerce: {
    key: 'ecommerce',
    title: 'E-commerce Platform',
    description: 'A Laravel-based e-commerce platform with Nuxt.js frontend, featuring payment gateways, admin panel, and inventory management. Optimized for performance and scalability.',
    technologies: ['Laravel', 'Nuxt.js', 'MySQL'],
    liveLink: '#',
    codeLink: '#'
  },
  cms: {
    key: 'cms',
    title: 'Content Management System',
    description: 'A CMS built with Laravel and Nuxt.js, offering dynamic content editing, SEO optimization, and user-friendly interface for content creators.',
    technologies: ['Laravel', 'Nuxt.js', 'Redis'],
    liveLink: '#',
    codeLink: '#'
  },
  api: {
    key: 'api',
    title: 'API for Mobile App',
    description: 'A secure Laravel API for a mobile app, with JWT authentication, real-time data sync, and robust error handling.',
    technologies: ['Laravel', 'MySQL', 'JWT'],
    liveLink: '#',
    codeLink: '#'
  }
};

// Singleton composable
let instance: ReturnType<typeof createModal> | null = null;

function createModal() {
  const isOpen = ref(false);
  const project = ref<Project | null>(null);

  // Debug state changes
  watch(isOpen, (newVal, oldVal) => {
    console.log(`[useModal] isOpen changed from ${oldVal} to ${newVal}, project: ${project.value?.key || 'none'}`);
    if (newVal && !oldVal) {
      console.trace('[useModal] Modal opened, call stack:');
    }
  });

  const open = (key: string) => {
    console.log(`[useModal] Attempting to open modal for project: ${key}`);
    console.trace('[useModal] Open called, call stack:');
    if (projects[key]) {
      project.value = projects[key];
      isOpen.value = true;
    } else {
      console.warn(`[useModal] Project with key ${key} not found`);
    }
  };

  const close = () => {
    if (!isOpen.value) {
      console.log('[useModal] Modal already closed, skipping close');
      return;
    }
    console.log('[useModal] Closing modal');
    isOpen.value = false;
    setTimeout(() => {
      if (!isOpen.value) project.value = null;
    }, 300);
  };

  return { isOpen, project, open, close };
}

export function useModal() {
  if (!instance) {
    console.log('[useModal] Creating new useModal instance');
    instance = createModal();
  }
  return instance;
}