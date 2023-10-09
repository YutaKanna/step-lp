<template>
    <component :is="currentComponent"></component>
  </template>
  
  <script>
  import Step1 from './Step1.vue';
  import Step2 from './Step2.vue';
  import Step3 from './Step3.vue';
  import Step4 from './Step4.vue';
  import Step5 from './Step5.vue';
  
  export default {
    props: ['step'],
    components: {
      Step1, Step2, Step3, Step4, Step5
    },
    computed: {
      currentComponent() {
        return 'Step' + this.step;
      }
    }
  };
  </script>
  