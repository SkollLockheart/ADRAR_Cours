Vue.createApp({
    data(){
        return {
            champTop: '',
            champBot: '',
            resultatTop: '',
            resultatBot: '',
        }
    },
    methods: {
        afficheTop(){
            return this.resultatTop=this.champTop;
        },
        afficheBot(){
            return this.resultatBot=this.champBot;
        },
        alerte(){
            return alert('ALERTE GENERALE');
        }
    }

}).mount('#app');