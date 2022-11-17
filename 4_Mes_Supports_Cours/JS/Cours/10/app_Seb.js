// EXO API FETCH
// ** contacter une api - fetch() - async - await
// TODO 1: récupérer le titre h2 dans une variable counter
// TODO 2-1: créer une variable majCounter à laquelle on assigne une fonction fléchée
// TODO 2-2: dans la F =>, créer une variable data à laquelle on assigne la fonction fetch()
// TODO 2-3: fetch(), prend en param l'Url de l'API
// TODO 3-1: Tjrs dans la F =>,créer une variable dataTransformed à laquelle on assigne data
// TODO 3-2: sur la variable data on utilise la fonction .json()
// TODO 3-3: Faire un console log de data
// TODO 4-1: Tjrs dans la F =>,au InnerHTML de counter, assigner la value dans dataTransformed
// TODO 4-2: remmettre le filter de counter en "blur(0)"
// TODO 5: on éxecute notre fonction majCounter 

let counter = document.querySelector('h2');
let majCounter = async ()=>{
    let data = await fetch('https://api.countapi.xyz/hit/sltcava/visites');
    console.log(data);
    let dataTransformed = await data.json();
    console.log(dataTransformed);
    counter.innerHTML = dataTransformed.value;
    counter.style.filter ='blur(0)';
}

majCounter();

let pokemon = document.querySelector('h3');
let imgPokemon = document.querySelector('img')
let nbRandom = Math.floor(Math.random()*19);
let majPokemon = async ()=>{
    let dataPokemon = await fetch('https://pokeapi.co/api/v2/pokemon');
    console.log(dataPokemon);
    let namePokemon = await dataPokemon.json();
    console.log(namePokemon);
    pokemon.innerHTML = `${namePokemon.results[nbRandom].name} !!!`;
    pokemon.style.filter ='blur(0)';
    imgPokemon.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${nbRandom+1}.png`;
    imgPokemon.style.filter ='blur(0)';
}

majPokemon();