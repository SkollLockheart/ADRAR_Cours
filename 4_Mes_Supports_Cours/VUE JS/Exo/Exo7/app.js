Vue.createApp({
    data(){
        return {
            leNombre: 0,
            nameUser:"",
        }
    },
    methods: {
        ajout(){
            this.nameUser = "Skoll";
            return this.leNombre+=1;
        },
        soustrait(){
            this.nameUser = "";
            return this.leNombre-=1;
        }
    },
    computed: {
        afficherName(){
            console.log('Fonction exécutée');
            if(this.nameUser == ""){
                return 'test';
            }else{
                return 'autre test';
            }
        },
    }
}).mount('#app');