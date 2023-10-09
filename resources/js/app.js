Vue.component('step-component', require('./components/StepComponent.vue').default);

const app = new Vue({
    el: '#app',
    props: ['step'],
    components: {
        Step1, Step2, Step3, Step4, Step5
    },
    computed: {
        currentComponent() {
            return 'Step' + this.step;
        }
    }
});
