
Vue.createApp({
    data(){
        return {
            count: 3,

        }
    },

    methods: {

        },

    computed:{
        isDisabled(){
            if(this.count >= 3){
                return false;
            }
            else {
                return true;
            }

        }
    },
    
    watch:{
    
    }
}).mount('#appAttackSpe')

//______________________________________________________

Vue.createApp({
    data(){
        return {
            viePlayer : 100,
            vieAdverse : 100,
            ecranFin: "",

        }
    },

    methods: {
/*         endGame(){
            if(this.viePlayer > 0 && this.vieAdverse <=0){
                this.finCombat = "VICTOIRE";
            }
            else if(viePlayer <= 0 && vieAdverse > 0){
                this.finCombat = "PERDU";
            }
            else if(viePlayer <= 0 && vieAdverse <= 0){
                this.finCombat = "EGALITE";
            }
            else{
                this.finCombat = "EN COMBAT";
            }
        } */
        zero(){
            this.vieAdverse = 0;
        }

        },

    computed:{

        finCombat(){
            if(this.viePlayer > 0 && this.vieAdverse <=0){
                this.ecranFin = "VICTOIRE"
            }
            else if(this.viePlayer <= 0 && this.vieAdverse > 0){
                this.ecranFin = "PERDU"
            }
            else if(this.viePlayer <= 0 && this.vieAdverse <= 0){
                this.ecranFin = "EGALITE"
            }
        }
    },
    
    watch:{
        viePlayer(value){


    
    }
}).mount('#appVIF')

