//-------CONDITION avec IF ELSE-------
// Avec if on va pouvoir créer un bloc de code qui s'execute si une condition est remplie
function calculTableResto(nombreDeReservation) {
    if (nombreDeReservation>=30){
        return 'il nous reste pas beaucoup de tables, ca serait pour combien de personnes ? (en sueur😅)';
    }
    else if(nombreDeReservation<10){
        return 'Il nous reste une table'
    }
    else{
        return 'On est fermé !'
    }
};
console.log(calculTableResto(50));

// EXO 7 - IF ELSE
// Créer une fonction reçoit un tableau de 3 notes et qui calcule une moyenne entre ces 3 notes
// Dans cette ƒ°, SI la moyenne est suppérieur ou égale à 15 on renvoi une string (très Bien) 
// Dans cette ƒ°, SINON SI la moyenne est suppérieur ou égale à 10 on renvoi une string (assez Bien) 
// Dans cette ƒ°, SINON renvoi une string (refus)

function motion(a) {
    let b = a.length,
        c = 0, i;
    for (i = 0; i < b; i++){
    c += Number(a[i]);
    }    
    if (c/b>=15){
        return 'Très bien!';
    } else if (c/b<15 && c/b>=10){
        return 'Assez bien';
    } else {
        return 'Refus';
    }
}
console.log(motion([13, 14, 5]));