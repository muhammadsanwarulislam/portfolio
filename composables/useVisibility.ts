import { ref, onMounted, onUnmounted } from 'vue';

export function useVisibility(elementRef: Ref<HTMLElement | null>, options: IntersectionObserverInit = {}) {
  const isVisible = ref(false);

  onMounted(() => {
    if (!elementRef.value || !window.IntersectionObserver) return;

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          isVisible.value = true;
          observer.disconnect(); // Trigger animation once
        }
      },
      { threshold: 0.1, ...options }
    );

    observer.observe(elementRef.value);
    onUnmounted(() => observer.disconnect());
  });

  return isVisible;
}