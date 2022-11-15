// let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
// let testEmails = ["notanemail.com", "workingexample@email.com", "another_working@somethingelse.org", "notworking@1.com"];

// testEmails.forEach((address) => {
//     console.log(regex.test(address))
// });

// TODO : Une page html avec un formulaire de connexion (login et mot de passe)
// TODO : faire un programme JS qui va vérifier la saisi du login et mot de passe
// TODO : Le login doit être au format mail (doit contenir un @ et un . )
// TODO : Le MDP doit contenir : (entre 6 et 8 caractères) (1 caractère spécial minimum) (1 chiffre)
// TODO : Si le login n’est pas bon l'input est rouge sinon il est en vert
// TODO : Si le MDP n’est pas valide on affiche une explication en rouge (si MDP trop long, trop court ne contient pas de chiffres, ne contient pas de caractère spécial)
// TODO : Si le MDP est valide on affiche un message en vert "Mot de passe valide"

let testLogin = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
let specialPassword = /\d/;
let chiffrePassword = /[$&@!?*]/;

let login = document.querySelector('#login');
let password = document.querySelector('#password');
let resultat = document.querySelector('div');

login.addEventListener('keyup',()=>{
    if(testLogin.test(login.value)){
        login.style.background = 'green';
    }else{
        login.style.background = 'red';
    }
});

password.addEventListener('keyup',()=>{
    if(password.value.length < 6){
        resultat.innerHTML = 'Trop court';
    }else  if(password.value.length > 8){
        resultat.innerHTML = 'Trop long';
    }else {
        resultat.innerHTML = 'Taille correct';
    };
    if(!password.value.match(specialPassword)){
        resultat.innerHTML = 'Pas de caractère spécial';
    }else {
        resultat.innerHTML = '';
    };
    if(!password.value.match(chiffrePassword)){
        resultat.innerHTML = 'Pas de chiffre';
    }else {
        resultat.innerHTML = '';
    };
console.log(password.value.length);
    
})