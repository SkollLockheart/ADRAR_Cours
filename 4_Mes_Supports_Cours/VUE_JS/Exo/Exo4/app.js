Vue.createApp({
    data(){
        return {
            image: 'https://i.pinimg.com/564x/4f/29/63/4f296397929dabd4febc258047d9e546.jpg',
            nom: 'Gatsu',
            age: 25,
            nbRand : Math.random()
        }
    },
    methods: {
        older(){
            return this.age+10;
        }
    }
}).mount('#app');