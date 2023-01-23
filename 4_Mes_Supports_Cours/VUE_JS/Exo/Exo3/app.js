Vue.createApp({
    data(){
        return{
        }
    },

    methods: {
        random(){
            if(Math.random() < 0.5){
                return 'Vous avez gagné!'
            }else{
                return 'Vous avez perdu!'
            }
        }
    }
}).mount('#app');