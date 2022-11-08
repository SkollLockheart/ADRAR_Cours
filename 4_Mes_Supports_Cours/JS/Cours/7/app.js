//------------REAGIR AUX EVENT DU DOM KEYUP surveiller clavier (capter les events)--------------
// Sur tout le document on va ecouter l'event keyup
// en réaction à cet event on va faire un console.log('Yes je peux ecrire')

addEventListener('keyup', (unEvent)=>{
    console.log('Yes je peux ecrire)');
    console.log(unEvent.key);
})

// TODO 4: Tjrs dans la Fonction dans addEventListener, dans une variable monImg, créer une img html
// TODO 5: Ensuite, modifier l'attribut src de monImg (url de l'img au choix)
// TODO 6: sur monImg, modifier dans style, la position en "absolute"
// TODO 7: sur monImg, modifier dans style, le left, on assigne la coordonnées x du click
// TODO 8: sur monImg, modifier dans style, le top, on assigne la coordonnées y du click
// TODO 9: placer monImg dans la page

addEventListener('click', (clickWhere)=>{
    let duck = document.createElement('img');
    duck.setAttribute('src','duck.jpg');
    document.body.append(duck);
    duck.style.position='absolute';
    duck.style.left=clickWhere.x + 'px';
    duck.style.top=clickWhere.y + 'px';
})