Vue.createApp({
    data(){
        return {
            selectCard1:false,
            selectCard2:false,
        }
    },
    methods: {
        selectionCard($card){
            if($card==1){
                this.selectCard1 = !this.selectCard1
            }else if($card==2){
                this.selectCard2 = !this.selectCard2
            }
        }
    },
    computed: {

    },
    watch: {

    }
}).mount('#app');