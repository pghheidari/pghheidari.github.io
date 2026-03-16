<template>
  <footer class="bg-navy dark:bg-black text-light py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-light/60 text-sm">
        &copy; {{ currentYear }} Pegah Heidari. All rights reserved.
      </p>
      <p class="text-light/50 text-xs mt-2">
        Built with
        <HeartIcon
          class="w-4 h-4 inline-block text-orange hover:animate-pulse"
        />
        on
        <a
          href="https://github.com/pghheidari/pghheidari.github.io"
          target="_blank"
          ><GitHubIcon class="m-1 w-4 h-4 inline-block text-gray-300"
        /></a>
      </p>
    </div>
  </footer>
</template>

<script setup lang="ts">
  import { computed } from 'vue';
  import { HeartIcon } from '@heroicons/vue/24/solid';
  import { GitHubIcon } from 'vue3-simple-icons';

  const currentYear = computed(() => new Date().getFullYear());
</script>
