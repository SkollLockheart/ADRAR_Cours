// METHODE avec Fetch + async Await */

const counter = document.getElementById('counter');
//de base une ƒ° => est anonyme, astuce pour désanonymiser, on la stocke dans une variable
const majCounter = async () => {
    //Data va récup Toutes les données de l'api
    const data = await fetch('https://api.countapi.xyz/hit/sltcava/visites');
    console.log(data);
    //Plutot que de Travailler sur la réponse, on va la transformé pour 
    //qu'elle deviennt un OBJET JS (+ pratique)
    const dataTransformed = await data.json();
    console.log(dataTransformed);
    counter.innerText = dataTransformed.value;
    counter.style.filter = 'blur(0)';
};
majCounter();

// METHODE avec Fetch + .then() + catch() /
const counter = document.getElementById('counter');
const majCounter = () => {
    fetch('https://api.countapi.xyz/hit/sltcava/visites')
    .then(response => response.json())
    .then(data =>(counter.innerText = data.value))
    .then(data =>(counter.style.filter = 'blur(0)'))
    .catch(error => alert("Erreur : " + error));
};
majCounter();

//** METHODE avec Fetch +then + catch + async Await/
const counter = document.getElementById('counter');
const majCounter = ()=>{
    // fetch("https://api.npms.io/v2/invalid-url")
    fetch("https://api.countapi.xyz/hit/sltcava/visites")
 .then(async response => {
   const data = await response.json();
   // check for error response
   if (!response.ok) {
     // get error message from body or default to response statusText
     const error = (data && data.message) || response.statusText;
     return Promise.reject(error);
   }
   counter.innerText = data.value;
   counter.style.filter = 'blur(0)';
 })
 .catch(error => {
   console.error("There was an error!", error);
 });
}
 majCounter();