// EXO 20.1 
// Créer une ƒ° ajouterTexte qui prend 2 params : 
// pseudo et duTexte

// La fonction a pour but :
// de créer puis remplir et enfin placer un paragraphe contenant pseudo et duTexte

//(Bonus) : Dans le paragraphe le pseudo est affiché en gras

function messagePresentation (nom,text){
    const presentation = document.createElement('p');
    presentation.innerHTML = `Je m'appel <strong>${nom}</strong>, ${text}.`
    document.body.append(presentation);
}

messagePresentation(`Jean`,`j'aime beaucoup les trains`);

const lienGoogle = document.createElement('a');
lienGoogle.innerHTML = `Google`
document.body.append(lienGoogle);
lienGoogle.setAttribute('href','https://www.google.fr/');