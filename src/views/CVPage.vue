<template>
  <div
    class="min-w-full max-w-full overflow-hidden mx-auto bg-white flex flex-col p-6 gap-2 min-h-screen cv-container"
  >
    <!-- Name and title -->
    <div>
      <h1 class="font-bold text-3xl">Pegah Heidari</h1>
      <p class="font-semibold text-blue">Software Engineer</p>
      <p class="font-semibold text-slate">
        {{ dob.toLocaleDateString('nl-NL') }}
        ({{ age }} years old)
      </p>
    </div>

    <!-- Contact info -->
    <div class="flex">
      <div v-for="contactMethod in contactMethods" :key="contactMethod.type">
        <a
          target="_blank"
          :href="contactMethod.items[0]?.href ?? ''"
          class="contact-item"
        >
          {{ contactMethod.items[0]?.value }} |
        </a>
      </div>
      <div>
        <a
          target="_blank"
          :href="linkedinSocial?.url ?? ''"
          class="contact-item"
        >
          {{ linkedinSocial?.friendlyURL }} |
        </a>
      </div>
      <div>
        <a target="_blank" :href="portfolio.url" class="contact-item">
          {{ portfolio.friendlyURL }}
        </a>
      </div>
    </div>

    <div class="flex flex-col py-1 gap-2">
      <!-- Summary -->
      <section>
        <h3 :class="styles.sectionTitle">SUMMARY</h3>
        <p class="leading-tight text-justify">{{ summary }}</p>
      </section>

      <!-- Skills -->
      <section>
        <h3 :class="styles.sectionTitle">SKILLS</h3>
        <div>
          <span
            v-for="technicalSkill in technicalSkills"
            :key="technicalSkill.name"
            class="leading-loose mr-1 mb-1 px-1 rounded border-2 inline-block"
          >
            {{ technicalSkill.name }}
          </span>
        </div>
      </section>

      <!-- Experiences -->
      <section>
        <h3 :class="styles.sectionTitle">EXPERIENCE</h3>
        <div
          class="flex flex-col mb-0 leading-tight experience-item"
          v-for="experience in experiences"
          :key="experience.company"
        >
          <p class="flex justify-between">
            <span>
              <b class="text-sm">{{ experience.company }}</b> -
              {{ experience.location }}
            </span>
            <span class="text-slate">{{ experience.duration }}</span>
          </p>
          <p class="text-blue">
            {{ experience.title }}
          </p>

          <p class="mb-1">{{ experience.description }}</p>
          <p v-for="achievement in experience.achievements" :key="achievement">
            • {{ achievement }}
          </p>
        </div>
      </section>

      <!-- Educations -->
      <section>
        <h3 :class="styles.sectionTitle">EDUCATION</h3>
        <div
          v-for="education in educationList"
          class="mb-1 leading-tight"
          :key="education.degree"
        >
          <p class="flex justify-between">
            <span>
              <b class="text-sm">{{ education.degree }}</b> in
              {{ education.field }} (GPA: {{ education.grade }})
            </span>
            <span class="text-slate">{{ education.duration }}</span>
          </p>
          <p class="text-slate">
            <span>{{ education.institution }} - {{ education.location }}</span>
          </p>
        </div>
      </section>

      <!-- Languages -->
      <section>
        <h3 :class="styles.sectionTitle">LANGUAGES</h3>
        <div class="flex justify-between">
          <div v-for="language in languages" :key="language.name">
            <span>{{ language.name }}</span>
            <span class="text-slate align-super"> ({{ language.level }})</span>
          </div>
        </div>
      </section>

      <!-- Certificates -->
      <section class="mt-12">
        <h3 :class="styles.sectionTitle">CERTIFICATES</h3>
        <div
          v-for="certificate in certifications"
          class="flex justify-between mb-1"
          :key="certificate.title"
        >
          <a :href="certificate.link">• {{ certificate.title }}</a>
          <a
            target="_blank"
            :href="certificate.provider.url"
            class="text-slate"
            >{{ certificate.provider.name }}</a
          >
        </div>
      </section>
    </div>
  </div>
</template>

<script setup lang="ts">
  import { contactMethods, socialLinks, portfolio } from '@/consts/contacts';
  import { summary, dob, age } from '@/consts/summary';
  import { technicalSkills, languages } from '@/consts/skills';
  import { experiences } from '@/consts/experiences';
  import { educationList } from '@/consts/educations';
  import { certifications } from '@/consts/certifications';

  const linkedinSocial = socialLinks.find(sL => sL.name === 'LinkedIn');

  const styles = {
    sectionTitle:
      'font-bold text-navy border-b border-b-2 border-b-navy mb-1 text-base',
  };
</script>
