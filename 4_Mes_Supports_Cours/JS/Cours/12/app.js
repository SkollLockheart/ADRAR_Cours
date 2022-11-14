// class User{
//     constructor(nom,prenom,mail){
//         this._nom=nom;
//         this._prenom=prenom;
//         this._mail=mail;
//     }
// }

// CLASS - IMC 
// Créer un programme pour Calculer l'IMC (indice de masse corporelle)

// -Créer une classe Imc avec un constructeur qui recevra un nom un poids une taille dans cette classe on doit aussi avoir une donnée imc à laquelle on assigne la fonction calculImc();
// -Créer la fonction de calcul de l'imc, qui retourne le résultat du calcul à 2 nombre après la,
// -Créer la fonction d'affichage display, elle a pour rôle d'afficher en console.le nom de la PageTransitionEvent, son poids, sa taille et son imc dans une phrase.
// -Créer un tableau nommé list
// -Dans list créer plusieur instance de la classe imc en injectant des données dans le constructeur comme ceci: new Imc("Sébastien Chabal",135,1.89),
// -Trouver un moyen de parcourir tous les éléments dans list, sur chaque élément on utilisera k=la fonction display()

class Imc{
    constructor(nom,poid,taille,imc){
        this.nom=nom;
        this.poid=poid;
        this.taille=taille;
        this.calculImc(poid,taille)=imc;
    };
    calculImc(poid,taille){
        return Math.round((poid/(taille*taille)*100)/100);
    };
    display(){
        console.log(`${nom} pèse ${poid} kg et mesure ${taille} cm, il posède donc un IMC de ${calculImc}`);
    };
};