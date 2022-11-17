// RECUPERATION ET AFFICHAGE DE LA METEO DU JOUR

// Fichiers fournis :
// - index.html
// - style.css
// - script.js vide

// Tâches à effectuer :
// 1) Installer la librairie FontAwesome (https://fontawesome.com/)
// 2) Placer dans le html l'icône Cloud-sun (https://fontawesome.com/icons/cloud-sun?s=solid) juste avant le bouton Charger
// 3) Installer la librairie Animate on Scroll (https://github.com/michalsnik/aos)
// 4) Animer la div cardMeteo avec une durée de 1 seconde (soit 1000ms)

// La suite sera uniquement réalisée en Javascript :
// 5) Créer une div que vous stockerez dans une variable info
// 6) Donner à cette div les propriétés CSS suivantes
//     - une hauteur de 300px
//     - une largeur de 200px
//     - un margin en haut et en bas de 16px
//     - un border de 3px, solid, en gris
//     - un padding en haut de 16px, à droite et à gauche de 12px, et en bas de 24px
// 7) Insérer cette div dans la div cardMeteo, avant le bouton
// 8) Créer une fonction addInfo() qui va ajouter du texte à la div précédement créée
// 9) Créer une fonction bouton() qui ajoute la class "button__cardMeteo" à notre bouton html
// 10) Faire en sorte que lorsqu'on maintien le click de la souris (event mousedown) sur le bouton charger, sa couleur de fond devient orange
// 11) Faire en sorte que lorsqu'on relâche le click de la souris (event mouseup) n'importe où, cela annule la couleur précedente
// 12) Faire en sorte que lorsqu'on clique (event click) sur le bouton charger, cela interroge l'API météo ("https://prevision-meteo.ch/services/json/toulouse") et nous affiche les informations météos suivantes :
//     - La condition actuelle
//     - La température actuelle
//     - La température maximum du jour 0
//     - La température minimum du jour 0
// NOTE : vous afficherez les informations dans la div précédement créé en appelant la fonction addInfo(). Si vous n'avez pas réussi à la créer et la palcer, affichez les informations dans un console.log
// 13) Au moment où vous affichez les informations météos, appelez la fonction bouton()

// J'ai sotcker tout les donnée l'HTML pour pouvoir les utiliser
const cardMeteo = document.querySelector('.cardMeteo');
const cardMeteo__titre = document.querySelector('.cardMeteo__titre');
const btn = document.querySelector('button');

// J'ai créé un nouvelle div pour y stocker les futut info météo
const info = document.createElement('div');

// J'ai créé le visuel du cadre de la nouvelle div
info.style.height = '300px';
info.style.width = '200px';
info.style.margin = '16px 0px';
info.style.border = '3px solid grey';
info.style.padding = '16px 12px 24px';

// Ya surement plus simple mais pour pas perdre de temps je vais rester sur ca !
cardMeteo.appendChild(info);
cardMeteo.appendChild(btn);

// Je crée une fontion pour ajouter du text dans ma nouvelle div
function addInfo(text){
    // J'ai crée une balise <p> dans ma nouvelle div pour y mettre les info météo
    const infoText = document.createElement('p');
    // Je le positionne le <p> dans la div
    info.appendChild(infoText);
    // Je lui met le paramètre lié a un innerHTML pour pouvoir écrire dedans quand j'appel la fonction
    infoText.innerHTML = text;
};

// J'ajoute la classe = button__cardMeteo au bouton
function bouton(){
    btn.setAttribute('class','button__cardMeteo');
};

// Je passe la couleur du bouton en orange en coutant la pression de la souris
btn.addEventListener('mousedown',()=>{
    btn.style.background = 'orange';
})
// Je repasse la couleur du bouton a sa couleur initial en écoutant l'arret de pression du bouton
btn.addEventListener('mouseup',()=>{
    btn.style.background = 'forestgreen';
})

// J'écoute le clique de la souris sur le bouton
btn.addEventListener('click',async ()=>{
    // Je récupère les donné de l'api et les stock dans une variable
    const dataMeteo = await fetch('https://prevision-meteo.ch/services/json/toulouse');
    // Je transforme les donnés de l'api en JSON et les stock dans une autre variable
    const dataMeteoTransform = await dataMeteo.json();
    // Je récupère et stock dans des variables tout les donnée de l'api dont j'aurais besoin
    const conditionAct = dataMeteoTransform.current_condition.condition;
    const tempAct = dataMeteoTransform.current_condition.tmp;
    const tempMaxAct = dataMeteoTransform.fcst_day_0.tmax;
    const tempMinAct = dataMeteoTransform.fcst_day_0.tmin;
    // J'appel ma fonction qui écrit dans le p de la div pour y ajouter les info récupérer de l'api
    addInfo(`Météo actuel: ${conditionAct}.
    La température est actuellement de ${tempAct}°C.
    Pour des maximals de ${tempMaxAct}°C et des minimals de ${tempMinAct}°C.`);
    // J'appel la fonction bouton afin de le faire changer de couleur.
    bouton();
});