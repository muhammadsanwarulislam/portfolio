import { ref } from 'vue';

const allProjects = ref([
  {
    id: 'ecommerce',
    key: 'ecommerce',
    title: 'E-commerce Platform',
    description: 'A Laravel-based e-commerce platform with Nuxt.js frontend, featuring payment gateways and admin panel.',
    type: 'Full-stack',
    icon: '🛍️',
    technologies: ['Laravel', 'Nuxt.js', 'MySQL'],
    liveLink: '#',
    codeLink: '#'
  },
  {
    id: 'cms',
    key: 'cms',
    title: 'Content Management System',
    description: 'A CMS built with Laravel and Nuxt.js, offering dynamic content editing and SEO optimization.',
    type: 'Full-stack',
    icon: '📋',
    technologies: ['Laravel', 'Nuxt.js', 'Redis'],
    liveLink: '#',
    codeLink: '#'
  },
  {
    id: 'api',
    key: 'api',
    title: 'API for Mobile App',
    description: 'A secure Laravel API for a mobile app, with authentication and real-time data sync.',
    type: 'Backend',
    icon: '🔗',
    technologies: ['Laravel', 'MySQL', 'JWT'],
    liveLink: '#',
    codeLink: '#'
  }
]);

function getProjectByKey(key: string) {
  return allProjects.value.find(p => p.key === key);
}

export function useProjects() {
  return {
    allProjects,
    getProjectByKey
  };
}
