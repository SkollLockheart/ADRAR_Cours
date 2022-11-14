// EXO Algo JS 
// - on a une variable maCarte qui contient 'magmar'
// - on a une variable taCarte qui contient 'ronflex'

// Trouver un moyen de faire un échange de carte 
// à la fin il faut que dans maCarte j'ai 'ronflex' et que  que dans taCarte j'ai 'magmar'

let maCarte = 'Magmar';
let taCarte = 'Ronflex';
console.log(`Ma carte contient : `+ maCarte);
console.log(`Ta carte contient : `+ taCarte)

function echange(stockA,stockB){
    let stockC = stockA;
    stockA = stockB;
    stockB = stockC;
    maCarte = stockA;
    taCarte = stockB;
    console.log(`Boop-boop-bip! Echange terminé!`);
    console.log(`Ma carte contient maintenant : `+ maCarte);
    console.log(`Ta carte contient maintenant : `+ taCarte);
}

echange(maCarte,taCarte);

// Version echange destructuré
// [maCarte,taCarte] = [taCarte,maCarte];