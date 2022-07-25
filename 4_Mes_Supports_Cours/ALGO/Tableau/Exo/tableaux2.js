// Écrire une fonction qui prend un tableau en entrée et affiche le dernier élément de ce tableau.
let tabTest =[205,208,250,150,208,180];

function lastc(tab){
    console.log(tab[tab.length-1]);
}
console.log("Résultat Exo 1");
lastc(tabTest);
// Écrire une fonction qui prend un tableau en entrée et retourne le dernier élément de ce tableau.
function lastr(tab){
    return(tab[tab.length-1]);
}
console.log("Résultat Exo 2");
console.log(lastr(tabTest));

// Écrire une fonction qui prend en entrée un tableau et qui retourne le minimum de ce tableau.
function min(tab){
    let varMin = tab[0];
    for(let i=1;i<tab.length;i++){
        if(tab[i]<=varMin){
            varMin = tab[i];
        }else {

        }
    }
    return(varMin);
}
console.log("Résultat Exo 3");
console.log(min(tabTest));
// Écrire une fonction qui prend en entrée un tableau et qui retourne le maximum de ce tableau.

function max(tab){
    let varMax = tab[0];
    for(let i=1;i<tab.length;i++){
        if(tab[i]>=varMax){
            varMax = tab[i];
        }else {

        }
    }
    return varMax;
}
console.log("Résultat Exo 4");
console.log(max(tabTest));
// [Plus difficile - bonus] Écrire une fonction qui prend en entrée un tableau de nombres positifs et qui retourne la deuxième plus grande valeur du tableau.
function second(tab){
    let numero1 = 0;
    let numero2 = 0;
    for(let i=0;i<tab.length;i++){
        if(tab[i]>=numero1){
            numero2 = numero1
            numero1 = tab[i];
        }else if(numero2<=tab[i]){
            numero2=tab[i];
        }
    }
    return numero2;
}
console.log("Résultat Exo 5");
console.log(second(tabTest));
// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne le nombre de fois que ce nombre apparaît dans le tableau.
function combien(tab,num){
    compteur=0;
    for(let i=0;i<tab.length;i++){
        if(tab[i] == num){
            compteur++;
        }
    }
    return compteur;
}
console.log("Résultat Exo 6");
console.log(combien(tabTest,208));
// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne true si le nombre existe dans le tableau, false sinon.
function existe(tab,num){
    compteur=0;
    for(let i=0;i<tab.length;i++){
        if(tab[i] == num){
            compteur++;
        }
    }
    if (compteur==0){
        return false;

    } else {
        return true;
    }
}
console.log("Résultat Exo 7");
console.log(existe(tabTest,7));
console.log(existe(tabTest,208));
// [Bonus] Suite de l'exo : on **sait** que le tableau reçu est trié (on ne le vérifie pas). Comment exploiter cette information pour améliorer la recherche d'un élément ?

function justePrix(tab,num){
    let bot = tab[0];
    let top = tab.length-1;
    let prix;
    for(let i=0;i<tab.length;i++){
        if(num<(prix=tab[top]/2)){
            top = prix;
        } else if (num>(prix=tab[top/2])){
            bot = prix;
        } else {
            
        }
    }
}
// Créer un tableau qui contient [1,2,3,...,7777].

// Créer un tableau qui contient [10,20,30,...,77770].

// En se servant du tableau précédent, créer un tableau qui contient [5,10,15,...,38885].

// Écrire une fonction qui prend un tableau en entrée et qui en supprime les dernières valeurs, tant qu'elles sont inférieures à 50.
// console.log(leNomDeVotreFonction([1,45,88,54,23,-100,12]); // doit afficher [1,45,88,54]