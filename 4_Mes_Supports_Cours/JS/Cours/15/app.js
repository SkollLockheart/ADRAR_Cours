// EXO Random + Array

//TODO faire une fonction melangerTab qui prend un tableau en paramètre
//TODO On aura besoin d'une variable random qui va stocker un nombre random, arrondi entre 0 et 6
//TODO Dans cette fonction on va parcourir avec une boucle les cases du tableau
//TODO Se débrouiller pour intervertir les cases de façon random (on aura peut être besoin d'une variable temporaire)
//TODO Après la boucle for la fonction retourne le tableau reçu en paramètre
//TODO En dehors de la fonction, dans un console log on va executer la fonction en lui passant un tableau de 6 chiffres

function melangerTab(tab){
    const tempTab = [];
    for(i=0;i<6;i++){
        const random = Math.floor(Math.random()*tab.length);
        tempTab.push(tab[random]);
        tab.splice(random,1);
        console.log(tab);
    };
    return tempTab;
}

console.log(melangerTab([1,2,3,4,5,6]));

function melangerTab(tab){
    let temporaire = 0;
    let random = 0;

    for(i=0;i<tab.length;i++){
        // On défini le random pour notre tableau
        random = Math.floor(Math.random()*tab.length);
        // Now on fais l'échange, pour pas perdre ce qu'il ya dans tab[i]
        // On va le stocker dans temporaire 
        temporaire = tab[i];
        // Du coup tab[i] on peut écraser sa valeur c'est pas grave, 
        //on peut lui mettre la valeur de la case random
        tab[i] = tab[random];
        // Ce qu il y avait dans tab[i] c'est safe dans temporaire
        // Donc on peut l'assigner à la case indice random
        tab[random] = temporaire;
    }
    return tab
};
console.log(melangerTab([1,2,3,4,5,6]));