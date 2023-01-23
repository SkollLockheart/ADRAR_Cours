Vue.createApp({
    data(){
        return {
            leNombre: 0,
            indice: 'Trouve le JUSTE PRIX !',
        }
    },
    methods: {

    },
    computed: {

    },
    watch: {
        leNombre(value){
            if(value!=0){
                setTimeout(() => {
                    this.leNombre=0;
                }, 5000);
            }else if(value == 7){
                return this.indice = "C'est le JUSTE PRIX !"
            }else if(value < 7){
                return this.indice = "C'est plus !"
            }else {
                return this.indice = "C'est moins !"
            }
        }
    }
}).mount('#app');