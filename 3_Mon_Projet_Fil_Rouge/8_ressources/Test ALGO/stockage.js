let nivJoueur1 = 8;
let nivJoueur2 = 8;
let nivJoueur3 = 8;
let nivJoueur4 = 8;
let nivJoueur5 = 0;
let nivJoueur6 = 0;
let sommeNiv = 0;
let nombreDeJoueurs = 4;
let nivMoyenGroupe = 0;
let facile = -1;
let moyen = 0;
let ardu = +1;
let difficile = +2;
let heroique = +3;
let rencontreDifficulte = 0;

let rencontreFP = 0;

/* Somme des niveau des Joueurs */
function somme (nivJoueur1 , nivJoueur2 , nivJoueur3 , nivJoueur4 , nivJoueur5 , nivJoueur6){
    let sommeNiv = 0;
    sommeNiv = nivJoueur1 + nivJoueur2 + nivJoueur3 + nivJoueur4 + nivJoueur5 + nivJoueur6;
    console.log(sommeNiv); 
}

/* Moyenne du niveau des Joueurs */
function moyenne (sommeNiv , nombreDeJoueurs){
    let nivMoyen
    nivMoyenGroupe = sommeNiv / nombreDeJoueurs;
    console.log(nivMoyenGroupe); 
}

/* FP final avec ajout de la difficulté */
function groupeFP (nivMoyenGroupe , rencontreDifficulte){
    rencontreFP = nivMoyenGroupe + rencontreDifficulte;
    console.log(rencontreFP);
}

console.log(rencontreFP);
