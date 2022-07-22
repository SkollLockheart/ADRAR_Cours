let nivJoueur1 = 0;
let nivJoueur2 = 0;
let nivJoueur3 = 0;
let nivJoueur4 = 0;
let nivJoueur5 = 0;
let nivJoueur6 = 0;
let sommeNiv = somme();
let nombreDeJoueurs = 0;
let nivMoyenGroupe = moyenne();
let facile = -1;
let moyen = 0;
let ardu = +1;
let difficile = +2;
let heroique = +3;
let rencontreDifficulte = 0;
let rencontreFP = groupeFP();

/* Somme des niveau des Joueurs */
function somme (){
    return nivJoueur1 + nivJoueur2 + nivJoueur3 + nivJoueur4 + nivJoueur5 + nivJoueur6;
}

/* Moyenne du niveau des Joueurs */
function moyenne (){
    return sommeNiv / nombreDeJoueurs;
}

/* FP final avec ajout de la difficulté */
function groupeFP (){
    return nivMoyenGroupe + rencontreDifficulte;
}

function compute(){
    console.log(rencontreFP);
}
