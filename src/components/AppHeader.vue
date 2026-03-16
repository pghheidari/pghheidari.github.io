<template>
  <header
    class="fixed top-0 left-0 right-0 z-50 glass-effect border-b border-slate/20"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <!-- Logo -->
        <a class="flex items-center" :href="websiteAddress">
          <img
            :src="isDark ? LogoAccent : LogoDark"
            alt="Pegah Heidari Logo"
            class="h-9 min-w-24"
          />
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex space-x-8">
          <button
            v-for="item in navigationItems"
            :key="item.id"
            @click="$emit('navigate', item.id)"
            :class="['nav-link', { active: activeSection === item.id }]"
          >
            {{ item.name }}
          </button>
        </nav>

        <!-- Theme Toggle & Mobile Menu -->
        <div class="flex items-center space-x-4">
          <!-- Theme Toggle -->
          <button
            @click="toggleTheme"
            class="p-2 rounded-lg bg-slate/10 hover:bg-slate/20 dark:bg-light/10 dark:hover:bg-light/20 transition-colors duration-300"
            :title="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
          >
            <SunIcon v-if="isDark" class="w-5 h-5 text-orange" />
            <MoonIcon v-else class="w-5 h-5 text-slate" />
          </button>

          <!-- Mobile Menu Button -->
          <button
            @click="toggleMobileMenu"
            class="lg:hidden p-2 rounded-lg bg-slate/10 hover:bg-slate/20 dark:bg-light/10 dark:hover:bg-light/20 transition-colors duration-300"
          >
            <XMarkIcon v-if="isMobileMenuOpen" class="w-6 h-6" />
            <Bars3Icon v-else class="w-6 h-6" />
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <Transition
        enter-active-class="transition-all duration-300 ease-out"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition-all duration-200 ease-in"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-2"
      >
        <nav
          v-if="isMobileMenuOpen"
          class="md:hidden py-4 border-t border-slate/20"
        >
          <div class="flex flex-col space-y-2">
            <button
              v-for="item in navigationItems"
              :key="item.id"
              @click="handleMobileNavigation(item.id)"
              :class="[
                'nav-link text-left py-2 px-4 rounded-lg hover:bg-slate/10 dark:hover:bg-light/10',
                { 'active bg-orange/10': activeSection === item.id },
              ]"
            >
              {{ item.name }}
            </button>
          </div>
        </nav>
      </Transition>
    </div>
  </header>
</template>

<script setup lang="ts">
  import { ref, onMounted } from 'vue';
  import {
    SunIcon,
    MoonIcon,
    Bars3Icon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline';
  import LogoAccent from './assets/img/Logo-Accent.png';
  import LogoDark from './assets/img/Logo-Dark.png';
  import { navigationItems } from '@/consts/navigation';

  const websiteAddress = window.location.origin;

  type Props = {
    activeSection: string;
  };

  defineProps<Props>();

  const emit = defineEmits<{
    navigate: [sectionId: string];
  }>();

  // Theme management
  const isDark = ref<boolean>(false);
  const isMobileMenuOpen = ref<boolean>(false);

  // Initialize theme
  const initializeTheme = (): void => {
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia(
      '(prefers-color-scheme: dark)'
    ).matches;

    isDark.value = savedTheme ? savedTheme === 'dark' : prefersDark;
    updateTheme();
  };

  // Toggle theme
  const toggleTheme = (): void => {
    isDark.value = !isDark.value;
    updateTheme();
    localStorage.setItem('theme', isDark.value ? 'dark' : 'light');
  };

  // Update DOM theme
  const updateTheme = (): void => {
    if (isDark.value) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  };

  // Mobile menu
  const toggleMobileMenu = (): void => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
  };

  const handleMobileNavigation = (sectionId: string): void => {
    emit('navigate', sectionId);
    isMobileMenuOpen.value = false;
  };

  onMounted(() => {
    initializeTheme();
  });
</script>
