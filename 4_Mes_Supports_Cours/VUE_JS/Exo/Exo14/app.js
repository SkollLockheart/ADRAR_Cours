Vue.createApp({
    data(){
        return {
            nomArticle:'',
            mesArticles: [],
            messageBouton:'Masquer la liste',
            satutBouton: false,
        }
    },
    methods: {
        ajouterArticle(){
            this.mesArticles.push(this.nomArticle);
            console.log('ajouter')
        }, 
        supprimerArticle(index){
            this.mesArticles.splice(index,1);
            console.log('supprimer')
        },
        switchBouton(){
            if(this.satutBouton == false){
                this.satutBouton = true;
                return this.messageBouton = 'Afficher la liste';
            }else if (this.satutBouton == true){
                this.satutBouton = false;
                return this.messageBouton = 'Masquer la liste';
            }
        }
    },
    computed: {

    },
    watch: {

    }
}).mount('#app');