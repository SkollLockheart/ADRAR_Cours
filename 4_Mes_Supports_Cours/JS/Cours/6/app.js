// //------------REAGIR AUX EVENT DU DOM--------------
// // Mode ƒ° => (anonyme + fléchée) 
// let leH1 = document.querySelector('h1');
// leH1.addEventListener('click',()=>{
//     leH1.innerText = 'LOL MDR';
// });
// // Mode fonction anonyme classique
// leH1.addEventListener('click',function(){
//     leH1.innerText = 'LOL MDR';
// });
// // la fonction est en dehors
// function maModifTitre(){
//     leH1.innerText = 'LOL MDR';
// }
// // On apelle la fonction quand click
// leH1.addEventListener('click',maModifTitre);

// EXO 24 - ClassList 

// ** addEventListener - classList.add() - classList.remove() - classList.toggle()
// En CSS on crée une classe maCouleur (vous modifiez ce que vous voulez)
//1: récupérer le titre dans une variable leTitre
//2: récupérer tous les liens dans une variable lesLiens
//3-1: Sur le 1er lien placer un addEventListener qui écoute le "click" et éxecute une fonction
//3-2: Dans cette fonction on ajoute la classe "maCouleur" sur titre
//4-1: Sur le 2e lien placer un addEventListener qui écoute le "click" et éxecute une fonction
//4-2: Dans cette fonction on supprime la classe "maCouleur" sur titre
//5-1: Sur le 3e lien placer un addEventListener qui écoute le "click" et éxecute une fonction
//5-2: Dans cette fonction on toggle la classe "maCouleur" sur titre

let leTitre = document.querySelector('h1');
let lesLiens = document.querySelectorAll('a');
lesLiens[0].addEventListener('click',function(){
    leTitre.classList.add('maCouleur');
})
lesLiens[1].addEventListener('click',function(){
    leTitre.classList.remove('maCouleur');
})
lesLiens[2].addEventListener('click',function(){
    leTitre.classList.toggle('maCouleur');
})

// ** addEventListener - "mouseout" - display
// EN CSS le titre H1 à un display à none
// TODO 1: Dans une variable monTitre, récupérer tous le titre h1
// TODO 2: Sur document, placer un addEventListener qui écoute "mouseout" et qui execute une fonction
// TODO 3: dans cette fonction, on va modifier dans le style de monTitre le display que l'on met à "block"

let monTitre2 = document.querySelector('h2');
let monTitre3 = document.querySelector('h3');
document.addEventListener('mouseout',function(){
    monTitre2.classList.add('block');
});
document.addEventListener('mouseout',function(){
    monTitre3.style.display='block';
});

// ** addEventListener - focus - blur
// TODO 1: récupérer l'input dans une variable leInput
// TODO 2-1: sur leInput, utiliser addEventListener pour surveiller "focus" 
// TODO 2-2:et execute une fonction qui modif la bg color de leInput en (couleur au choix)
// TODO 3-1: sur leInput, utiliser addEventListener pour surveiller "blur"
// TODO 3-2: et execute une fonction qui modif la bg color de leInput en blanc ou transparent

let leInput = document.querySelector('input');
leInput.addEventListener('focus',()=>{
    leInput.style.backgroundColor='blue';
})
leInput.addEventListener('blur',()=>{
    leInput.style.backgroundColor='red';
})

// EXO 24.4
// TODO 1: récupérer le textarea dans une variable txt
// TODO 2: récupérer le button dans une variable btn
// TODO 3-1: Sur txt placer un addEventListener qui écoute les touches clavier et éxecute une fonction
// TODO 3-2: Dans cette fonction, si ce qu'on tape dans l'input dépasse 5 caractères alors on désactive le button

let txt = document.querySelector('textarea');
let btn = document.querySelector('button');

txt.addEventListener('keyup',() =>{ txt.value.length >=5? 
    btn.disabled= true:btn.disabled= false});

txt.addEventListener('keyup',() =>{ btn.dosabled = txt.value.length >=5? true:false});    

txt.addEventListener('keyup',() =>{ txt.value.length >=10? 
    btn.style.display = 'none' :btn.style.display = 'block'});