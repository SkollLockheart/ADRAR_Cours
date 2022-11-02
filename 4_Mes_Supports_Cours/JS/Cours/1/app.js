console.log('HELLO WORLD');


// Exo1

// On doit se débrouiller pour créer une variable, 
// Lui Assigner une valeur (genre un nombre ou une chaine de caractère)
// On doit afficher cette Variable dans la console du navigateur


let number = 42;
let string = 'text';
let array = ['Client1',number,105];
let objet = {
    'name1':99,
    'name2':100
};

console.log(number);
console.log(string);
console.log(array);
console.log(array[1]);
console.log(objet);
console.log(objet['name1']);
console.log(objet.name2);

// Exo 2 Calculs : 

// Afficher différents calculs dans la console du navigateur

console.log(20+33);
console.log(20-33);
console.log(20*33);
console.log(20/33);

//🚨 Attention pour les decimals
console.log(2,33+10); //❌
console.log(2.33+10); //⭕

console.log('LOL',10000);
console.log(0.1+0.2);
console.log(1+20*5);
console.log((1+20)*5);
console.log(10%2);
console.log(3%2);

//Incrémentation
let num = 0;
console.log(num+1);

// Prou faire du Cumul :
// num = num + 1 ;
num +=1; // Notation raccourcis (assignation composé)
// num = num + 5 ;
num +=5;
// Notation raccourcie incrémentation de 1
console.log(num++);
console.log(num--);

// EXO 3 : STRINGS 

// Débrouillez vous pour afficher en console ces 2 Phrases EXACTEMENT : 

// Bonjour mr."GINGLE" 

// Bonjour, J'aime la quiche

console.log('Bonjour mr."GINGLE"');
console.log('Bonjour, J\'aime la quiche');

// EXO 3.2 :  STRINGS

// Créer 2 variables : 
// - Le nom (vous assigner un nom de votre choix)
// - L’age (vous assigner un âge de votre choix)
// - la variable phrase qui contiendra les 2 précédentes variable dans une chaine de caractères
// Créer une variable phrase de bienvenue  qui affiche dans la console du navigateur:

// « Bonjour Jean-Jacques (le nom) tu as 57(l’âge) ans aujourd’hui, c’est la fiesta ! »

let nom = 'Jean-Jacques';
let age = 57; 
// Technique de la CONCATÉNATION
let phrase = 'Bonjour ' + nom + ' tu as ' + age + ' ans aujourd\'hui, c\'est la fiesta !';
console.log(phrase);
// Technique TEMPLATE STRINGS
let welcomePhrase = `Bonjour ${nom} tu as ${age} ans aujourd'hui, c'est la fiesta !`;
console.log(welcomePhrase);

// EXO 3.3 :  STRINGS
// Créer une variable qui contient un mot
// Trouver un moyen d'afficher le nombre de lettre que contient ce mot dans la console du navigateur

let longueur1 = 'mot long';
let longueur2 = 'mot court';

console.log(longueur1.length);
console.log(longueur2.length);

// Afficher en console uniquement la seconde lettre du mot
// Afficher en console uniquement la dernière lettre du mot 

console.log(longueur1[1]);
console.log(longueur1[longueur1.length-1]);
console.log(longueur2[longueur2.length-1]);

// EXO 4 ARRAYS

// Il nous faut une variable pour un nom, une pour un age, 
// une variable passion qui est une tableeu qui contient 2 
// chaine de caractères.
// Puis une variable tabUser qui est un tableau qui contiant les
// variable nom age et passions en console on affiche tabUser
// En passant par tabUser on veut afficher en console uniquement les passions
// En passant par tabUser on veut afficher en console uniquement la 2èm passion

let names = 'Jean';
let ages = 45 ;
let passion = ['Train','Oiseau'];

let tabUser = [names,ages,passion];

console.log(tabUser);
console.log(tabUser[2]);
console.log(tabUser[2][1]);

//!EXO 4.3 ARRAYS Ajout
// créer un nouveau tableau qui contient des trucs
// allez fouiner la ƒ° push()
// utiliser push pour ajouter un nouveau truc au tableau
// On affiche en console ce tableau

let truc = ['truc1','truc2','truc3','truc4','truc5'];
console.log(truc);
truc.push('trucAjouté');
console.log(truc);

// EXO 4.4 ARRAYS 

// Créer 2 variables leNom et lePrénom 
// Créer un tableau laPhrase et on y ajoute via (push)Le nom ,Le prénom Les initiales
// Afficher le tableau dans la console le nom le prénom et les initiales

let leNom = 'Dupont';
let lePrenom = 'Jean';
let laPhrase = [];

laPhrase.push(leNom,lePrenom,lePrenom[0]+leNom[0]);

console.log(laPhrase);