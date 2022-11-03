function maSuperFonction(){
    console.log('Ma fonction fonctionne');
    console.log(10+2);
};
maSuperFonction();

function disMonNom(unNomBidon){
    console.log(unNomBidon);
};
disMonNom('JACKO');

// EXO 5 : Function
// créer une fonction qui prend un nombre en paramètre
// La ƒ° doit afficher en console 33 + le nombre en paramètre
// créer une autre fonction qui prend 2 nombres en paramètre
// Cette seconde ƒ° doit afficher en console l'ADDITION des 2 nombres reçus en paramètre 

function fonctionParametre(nbParametre){
    console.log('33','+', nbParametre);
};

fonctionParametre('27');

function addition(a,b){
    console.log(a+b);
}

addition(33,27);

// La notion de scope (la portée d'une variable)
// Dans l'exemple ci-dessous on a 2 fois la même variable testScope1 qui est déclarée ?????
// En fait même si elles ont le même nom ce ne sont pas les même espaces mémoires qui sont alloués
// let testScope1 = 99; est dans le scope global de notre programme 
// let testScope1 = 12; est dans le scope de la fonction
console.log('-------SCOPE-------');
let testScope1 = 99;
function maFonctionTestScope(){
    let testScope1 = 12;
    console.log('scope de la fonction :',testScope1);
};
maFonctionTestScope();
console.log('scope hors de la fonction :',testScope1);

// EXO 5.1 : Quizz Function
// Pourquoi ca beug ?

function buggyFunction() {
    let wtf = 9;
    console.log(wtf);

}; 
buggyFunction();

//! EXO 5.1.2 : Quizz Function
//TODO : Pourquoi ca beug / Pourquoi ca marche pas ?

let something = 44;
function functionBugParent() {
    let something = 9;
    console.log(something);
    function functionBugEnfant() {
        let lesNews = `
        Scoop : Alerte Épervier !
        un volcan vient de PT en Ardèche.
        `;
        console.log(lesNews);
        
    }
    functionBugEnfant()
};
functionBugParent();
console.log(something);

// EXO 5.2 FUNCTION : la moyenne 

// EXO 5.2 : La moyenne de 2 notes 
// Créer une fonction qui calcule la moyenne de 2 notes
// Afficher le résultat en console

let math = 5;
let sport = 15;

function moyenne(note1,note2){
    return(note1+note2)/2;
}

console.log(moyenne(math,sport));

function numAverage(a) {
    let b = a.length,
        c = 0, i;
    for (i = 0; i < b; i++){
      c += Number(a[i]);
    }    
    return c/b;
}
  
console.log(numAverage([15, 11, 13, 14, 5]));

//-------OPERATEURS DE COMPARAISON-------
// on peut utiliser == (égalité) & != (différent de) pour comparer 2 variables
// Cela nous renvoit un BOOLEAN (true ou false)
let a=1;
let b=2;
let c='2';
console.log(a==a);
console.log(a==b);
console.log(a!=a);
console.log('⚠ Type',b===c);
// Plus d'autres opérateurs de comparaison (on connait déjà)
console.log(a>b);
console.log(a<b);
console.log(a>=b);
console.log(a<=b);
//-------CONDITIONS TERNAIRES-------
// on combine un opérateur de comparaison et l'opérateur ? pour établir une condition qui return une chose ou une autre chose
// cela permet de faire une condition if (simple) avec une syntaxe racourcie
let whatIsYourAge = 6;
console.log(whatIsYourAge >18 ? '🍹':'👮‍♂️');
// Astuce pour check si une variable est définie (si ya QQchose dans son espace mémoire)
let userPremium;
// On check si une variable est définie la condition c'est juste uneVariable ?
console.log(userPremium?'OK 🤙':'FLC👺');
// ↑ c'est l'équivalent de ↓
console.log(userPremium ==true?'OK 🤙':'FLC👺');
// on doit lui assigner QQCHOSE
userPremium = 'YES';
console.log(userPremium?'OK 🤙':'FLC👺');
// On peut utiliser des operateur aussi pour combiner des conditions && (pour ET) || (pour OU)
console.log(3==3&&3<4);
let typeUtilisateur = 'Extra';
console.log(typeUtilisateur == 'Extra' || typeUtilisateur == 'Premium');