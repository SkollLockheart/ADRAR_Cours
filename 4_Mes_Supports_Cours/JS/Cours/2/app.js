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