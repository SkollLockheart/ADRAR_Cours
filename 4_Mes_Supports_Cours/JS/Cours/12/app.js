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
    constructor(nom,poid,taille){
        this.nom=nom;
        this.poid=poid;
        this.taille=taille;
        this.imc=this.calculImc();
    };
    calculImc(){
        return (this.poid/(this.taille**2)).toFixed(2);
    };
    display(){
        console.log(`${this.nom} pèse ${this.poid} kg et mesure ${this.taille} cm, il posède donc un IMC de ${this.imc}`);
    };
};
//* progr principal -> injection des données
const list = [
    new Imc("Sébastien Chabal",135, 1.70),
    new Imc("Escaladeuse Ultra Svelte", 45, 1.68),
    new Imc("JOJO ", 300, 2.00),
    ];
//*Boucle forEach qui parcourt le tableau avec une variable temporaire uneCase
list.forEach(uneCase => uneCase.display());


// POO - Ma petite Entreprise

// Gérer une PME

// Un salarier = nom, prénom, age, salaire mensuel
// Il est payé sur N mois
// En plus il y a XXX de charge
// Une pme = nom, une équipe de salariés
// Elle a des revenus dus à ses ventes R
// mais aussi:
//     - des frais fixes FF (impôts,...)
//     - des frais d'achat de matériel FA
// °TODO
//     - Créer une classe Ome & une classe Employee
//     - Utiliser des fonctions
//     - Faire le bilan annuel de l'entreprise et l'afficher en console.
// °Détails
//     - 3 salariée qui gagnet par mois: 2000, 3000, 4000
//     - R = 300000
//     - FF = 20000
//     - FA = 50000
//     - N = 12
//     - XXX = 90%

class Pme{
    constructor(nomPme,salarie,revenue,fraisFixe,fraisAchat){
        this._nomPme=nomPme;
        this._salarie=salarie;
        this._revenue=revenue;
        this._coutInit=fraisFixe+fraisAchat;
        this._fraisAchat=fraisAchat;
    };
    bilanCalculed(){
        let cumulEquipe = 0;
        for (let unSalarie of this._salarie){ 
            cumulEquipe += unSalarie.getCout();
        }
        console.log(
`-------------------------MA PME-------------------------
 ${this._nomPme} : Cout Initial : ${this._coutInit}
 ${this._nomPme} : Cout Total Equipe : ${cumulEquipe}
 ${this._nomPme} : VENTES : ${this._revenue}
 ${this._nomPme} : BILAN : ${(this._revenue-(this._coutInit+cumulEquipe))}`
        );
    };
};

class Employee {
    constructor(nom, prenom, age, salaireMensuel) {
        this._nom = nom;    
        this._prenom = prenom;
        this._age = age;
        this._salaireMensuel = salaireMensuel;
        this._cout = this.calculCout();// Calcul cout annuel de l'employé :attribut en outMode
    };
// me servira à passer le cout d 1 employé dans la classe PME
// Comme ça quand dans la classe PME je vais utiliser des objet Employee, cette fonction facilitera les choses
// Pour retrouver le cout total d'un employee sur un an
    getCout() {
        return this._cout;
    };
//calcul cout total d 1 salarié
    calculCout() {    
// ON va calculer le cout total d'un emplyé sur 1 an
        return ((this._salaireMensuel*12)*(1+0.9));
    };
};

  // Scénario
const pme = new Pme (
    //Le nom entreprise
      "Ma Petite Entreprise - ", 
      //L'equipe de salariés (un tableau)
      [new Employee ("Duval", "Paul", 30, 2000),
      new Employee ("Durand", "Alain", 40, 3000),
      new Employee ("Dois", "Sylvia", 50, 4000),],
       //le revenu , frais fixe, frais d'achat
      300000,
      20000,
      50000);



console.log(pme.bilanCalculed());