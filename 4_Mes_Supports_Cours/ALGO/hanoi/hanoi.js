//Exercice bonus (beaucoup plus compliqué) :
/*
Tour de Hanoi : https://www.mathsisfun.com/games/towerofhanoi.html
Il y a 3 tours, et des disques sur l'une d'entre elles. On ne peut déplacer qu'un seul disque à la fois, et on ne peut pas placer un disque sur un autre plus petit.

Le but est d'écrire une fonction qui **affiche dans la console** la solution de ce problème.
Exemple avec le code (obfusqué) plus bas :
*/

function hanoi(n1,n2,n3,n4){
  
}

hanoi(3,"un","trois","deux"); // Je demande : comment déplacer 3 disques de la tour "un" vers la tour "trois", avec la tour "deux" en intermédiaire.
/*

     |            |            |
     |            |            |
     |            |            |
    -|-           |            |        Disque1
   --|--          |            |        Disque2
  ---|---         |            |        Disque3
=====|=====  =====|=====  =====|=====
    un          deux         trois
*/
// Résultat (dans la console) :
// Déplacer de un vers trois      'Disque1'
// Déplacer de un vers deux       'Disque2
// Déplacer de trois vers deux    'Disque1'
// Déplacer de un vers trois      'Disque3'
// Déplacer de deux vers un       'Disque1'
// Déplacer de deux vers trois    'Disque2'
// Déplacer de un vers trois      'Disque1'


/*
=====!!!!!=====
Code solution
Le but n'est pas d'essayer de lire ce code ! :D
Ça permet juste de pouvoir tester le code
=====!!!!!=====
*/
function hanoi(n,debut,fin,inter) {
    if(n == 1) {
        console.log("Déplacer de",debut,"vers la tour",fin);
    } else {
        hanoi(n-1,debut,inter,fin);
        console.log("Déplacer de",debut,"vers la tour",fin);
        hanoi(n-1,inter,fin,debut);
    }
}
//var _0x46d6=['Déplacer\x20de\x20','log'];(function(_0xc4e4ba,_0x67764c){var _0x46d64f=function(_0x5dd88d){while(--_0x5dd88d){_0xc4e4ba['push'](_0xc4e4ba['shift']());}};_0x46d64f(++_0x67764c);}(_0x46d6,0x8d));var _0x5dd8=function(_0xc4e4ba,_0x67764c){_0xc4e4ba=_0xc4e4ba-0x1ae;var _0x46d64f=_0x46d6[_0xc4e4ba];return _0x46d64f;};function hanoi(_0x52aa04,_0x48ecf8,_0x1a53ff,_0x5f2a2e){var _0x5208d9=_0x5dd8;_0x52aa04>0x0&&(hanoi(_0x52aa04-0x1,_0x48ecf8,_0x5f2a2e,_0x1a53ff),console[_0x5208d9(0x1ae)](_0x5208d9(0x1af)+_0x48ecf8+'\x20vers\x20'+_0x1a53ff),hanoi(_0x52aa04-0x1,_0x5f2a2e,_0x1a53ff,_0x48ecf8));}