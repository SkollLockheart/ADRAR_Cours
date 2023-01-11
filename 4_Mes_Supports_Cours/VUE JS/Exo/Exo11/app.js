Vue.createApp({
    data(){
        return {
            nomFilm:'',
            mesFilms: [],
        }
    },
    methods: {
        ajouterFilm(){
          this.mesFilms.push(this.nomFilm);
        }, 
    },
    computed: {

    },
    watch: {

    }
}).mount('#app');