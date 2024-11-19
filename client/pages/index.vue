<template>
  <div class="flex-1 overflow-y-auto">
    <div class="max-w-[1220px] mx-auto min-h-full px-2 md:px-5">
      <div class="pb-16 md:pb-5">
        <main class="pb-6 md:pb-0">
          <div class="space-y-20 pt-8 md:pt-16">
            <div class="max-w-[800px] mx-auto">
              <UICardWithImage 
                name="Sanwarul Islam"
                profileImg="/assets/img/me.jpg"
                imgAlt="sanwarul.jpg"
                :tags="['Backend', 'Frontend']"
                description="Experienced fullstack developer with over 5 years of
                    experience in building products using modern technologies
                    (NextJS, NodeJS, PostgreSQL, Blockchain, etc.). I have a
                    proven ability to quickly master new fields, including
                    blockchain and frontend development. Effective both as an
                    individual contributor and a team member." />
                    
              <div class="mt-8">
                <div class="max-w-[500px] mx-auto space-y-5">
                  <div class="flex flex-wrap justify-center gap-2 md:gap-3">
                    <UIButton link="https://github.com" variant="default">
                      <UISvgGithub />
                    </UIButton>
                    <UIButton link="https://linkedin.com" variant="default">
                      <UISvgLinkedin />
                      </UIButton>
                    <UIButton link="mailto:sanwarul@example.com" variant="contact">
                      <UISvgContact /> Contact me
                    </UIButton>
                  </div>
                </div>
              </div>
            </div>

            <!-- Stack Section -->
            <div>
              <h1 class="text-2xl md:text-3xl font-bold text-center">Stack</h1>
              <UICarousel :carouselData="carouselData" />
            </div>

          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import UISvgPostman from "~/components/UI/Svg/Postman.vue";
import UISvgTypescript from "~/components/UI/Svg/Typescript.vue";
import UISvgGithub from "~/components/UI/Svg/Github.vue";
import UISvgLinkedin from "~/components/UI/Svg/Linkedin.vue";
import UISvgPhp from "~/components/UI/Svg/Php.vue";
import UISvgPython from "~/components/UI/Svg/Python.vue";
import UISvgLaravel from "~/components/UI/Svg/Laravel.vue";
import UISvgJs from "~/components/UI/Svg/Js.vue";
import UISvgMysql from "~/components/UI/Svg/Mysql.vue";

const carouselData = ref([
  {
    title: "Languages",
    languages: [
      { name: "JavaScript", icon: UISvgJs },
      { name: "TypeScript", icon: UISvgTypescript },
      { name: "PHP", icon: UISvgPhp },
      { name: "Python", icon: UISvgPython },
    ],
  },
  {
    title: "Library/Framework",
    languages: [{ name: "Laravel", icon: UISvgLaravel }],
  },
  {
    title: "Database",
    languages: [{ name: "MySQL", icon: UISvgMysql }],
  },
  {
    title: "Testing",
    languages: [{ name: "MySQL", icon: UISvgMysql }],
  },
]);
</script>
