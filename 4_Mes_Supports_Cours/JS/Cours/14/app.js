// EXO array.includes 

// Dans une page web on a un champs de texte 
// Il faut se débrouiller pour afficher en console ce qui est tapé dans l'input MAIS sans les voyelles

const noVoyellesTab = [];
const voyelles = ["a","e","i","o","u","y"];

const zone = document.querySelector('textarea');


zone.addEventListener('keypress',function(unEvent){
    console.log(unEvent);
    const uneTouche = unEvent.key;
    if(!voyelles.includes(uneTouche)){
        noVoyellesTab.push(uneTouche);
    }else{
        noVoyellesTab.push('_') 
    }
    console.log(noVoyellesTab.join(''));
});

