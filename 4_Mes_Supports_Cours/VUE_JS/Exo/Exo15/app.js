Vue.createApp({
    data(){
        return {
            inputClasse : '',
            nomClasse :'',
            couleur : '',
            affiche :'',
            afficheTitle : 'Masquer'
        }
    },
    methods:{
        hidden(){
            if (this.affiche != 'maClasseHidden'){
                this.affiche = 'maClasseHidden';
                this.afficheTitle = 'Afficher';
            } else if (this.affiche === 'maClasseHidden'){
                this.affiche = 'maClasseVisible';
                this.afficheTitle = 'Masquer';
            }
        }
    },
    watch:{
        inputClasse(value){
            if ( value === 'Hello'){
                this.nomClasse = 'maClasseHello'
            } else if ( value === 'World' ){
                this.nomClasse = 'maClasseWorld'
            }
        }
    }
}).mount('#app')