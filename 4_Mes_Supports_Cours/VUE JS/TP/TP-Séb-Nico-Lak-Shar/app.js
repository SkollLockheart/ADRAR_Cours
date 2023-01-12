Vue.createApp({
    data(){
        return {
            viePlayer : 100,
            vieAdverse : 100,
            ecranFin: "",
            etatFin : 'none',
            etatFuite: 'none',
            blur: 'none',
            count: 1,
            attaqueSpeciale : 20 ,
            attaquePlayer:  Math.floor(Math.random() * (10 - 8)) + 8 ,
            attaqueAdverse:  Math.floor(Math.random() * (12- 8)) + 8 ,
            soinsSurPlayer: Math.floor(Math.random() * (20- 15)) + 15 ,
        }
    },
    methods: {
        attackSurPlayer(){
            let dgt = this.attaqueAdverse;
            for(let i=0; i<dgt; i++){
                if(this.viePlayer !=0){
                    this.viePlayer= this.viePlayer - 1;
                }
            };
            this.count++
            console.log(this.count)
            this.finCombat();
        },
        attackSurAdversaire() {
            let dgt = this.attaquePlayer;
            for(let i=0; i<dgt; i++){
                if(this.vieAdverse !=0){
                    this.vieAdverse= this.vieAdverse - 1;
                }
            };
            this.attackSurPlayer();
        },
        soinsPlayer(){
            let soin = this.soinsSurPlayer;
            for(let i=0; i<soin; i++){
                if(this.viePlayer !=100){
                    this.viePlayer = this.viePlayer + 1;
                }
            };
            this.attackSurPlayer()
        },
        attaqueSpecial(){
            let dgt = this.attaqueSpeciale;
            for(let i=0; i<dgt; i++){
                if(this.vieAdverse !=0){
                    this.vieAdverse= this.vieAdverse - 1;
                }
            };
            this.count = 0;
            this.attackSurPlayer()
        },
        reset(){
            location.reload();
        },
    },
    computed: {
        fuite(){
            this.etatFuite = 'block';
            this.blur = 'block';
        },
        finCombat(){
            if(this.viePlayer > 0 && this.vieAdverse == 0){
                this.ecranFin = "Victoire !"
                this.etatFin = 'block';
                this.blur = 'block';
                
            }
            else if(this.viePlayer == 0 && this.vieAdverse > 0){
                this.ecranFin = "Perdu !"
                this.etatFin = 'block';
                this.blur = 'block';
            }
            else if(this.viePlayer == 0 && this.vieAdverse == 0){
                this.ecranFin = "Egalite !"
                this.etatFin = 'block';
                this.blur = 'block';
            }
        },
        isDisabled(){
            if(this.count >= 3){
                return false;
            }
            else {
                return true;
            }

        }
    },
    watch: {

    }
}).mount('#app');