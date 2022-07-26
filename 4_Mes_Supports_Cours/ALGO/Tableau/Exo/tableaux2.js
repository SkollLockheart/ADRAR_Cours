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

/*let tabprix = Array.from({length: 31}, () => Math.floor(Math.random() * 31));
tabprix.sort((a,b)=>a-b);
console.log(tabprix);
function justePrix(tab,num){
    let bot = 0;
    let top = tab.length-1;

    for(let i=0;i<tab.length;i++){
        let prix = tab[((bot-top)/2)+bot];
        if(num<prix){
            top = top/2;
        } else if (num>prix){
            bot = top/2;
        } else if(num=prix){
            console.log(num+" existe!");
        } else {
            console.log(num+" n'existe pas!");
        }       
    }
}

console.log(("Résultat Exo 8"));
justePrix(tabprix,14);*/

let tab7 = []
for(let i=1;i<7778;i++){
    tab7.push(i);
}

console.log(("Résultat Exo 9"));
console.log(tab7);

function justePrix(tab, num){
    let begin = 0;
    let finish = (tab.length-1);
    
    while (begin <= finish){
        console.log(begin, finish);
        let middle = Math.round((begin + finish)/2);
        console.log('je regarde ' + middle);
        if (num == tab[middle]){
            return true;
        } else if (num < tab[middle]){
            finish = middle -1 ;
        } else{
            begin = middle +1;
        }        
    }
    return false;
}
console.log(("Résultat Exo 8"));
justePrix(tabprix,14);*/

// Créer un tableau qui contient [1,2,3,...,7777].
let tab7 = []
for(let i=1;i<7778;i++){
    tab7.push(i);
}

console.log(("Résultat Exo 9"));
console.log(tab7);

// Créer un tableau qui contient [10,20,30,...,77770].
let tab70 = []
for(let i=1;i<7778;i++){
    tab70.push(i*10);
}

console.log(("Résultat Exo 10"));
console.log(tab70);

// En se servant du tableau précédent, créer un tableau qui contient [5,10,15,...,38885].
let tab5 = []
for(let i=1;i<38886;i++){
    tab5.push(i*5);
}

console.log(("Résultat Exo 11"));
console.log(tab5);

// Écrire une fonction qui prend un tableau en entrée et qui en supprime les dernières valeurs, tant qu'elles sont inférieures à 50.
function leNomDeVotreFonction(tab){
    for(let i=0;i<tab.length;i++){
        if (tab[tab.length-1]<50){
            tab.pop();
        } else {
            return tab
        }
    }    
}

console.log(("Résultat Exo 12"));
console.log(leNomDeVotreFonction([1,45,88,54,23,-100,12])); // doit afficher [1,45,88,54]