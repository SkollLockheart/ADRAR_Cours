Vue.createApp({
    data(){
        return {
            leNombre: 0,
            ajouter: 1,
        }
    },
    
    methods: {
        ajout(){
            return this.leNombre+=1;
        },
        soustrait(){
            return this.leNombre-=1;
        }
    }

}).mount('#app');