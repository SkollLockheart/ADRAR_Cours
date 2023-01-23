Vue.createApp({
    data(){
        return{
            input:'',
            value:'',
        }
    },
    methods: {
        onBind(event){
            this.value = event.target.value;
        }
    }

}).mount('#app');