const firebaseConfig = {
  apiKey: "AIzaSyAqfdpDDmSBI0PpuzVwjyr9spKchA6vtiY",
  authDomain: "projet-cours-4744d.firebaseapp.com",
  databaseURL: "https://projet-cours-4744d-default-rtdb.europe-west1.firebasedatabase.app",
  projectId: "projet-cours-4744d",
  storageBucket: "projet-cours-4744d.appspot.com",
  messagingSenderId: "726669546196",
  appId: "1:726669546196:web:aad23c63c1f28f2d1f6141"
};

firebase.initializeApp(firebaseConfig);
    //On va créer une référence à notre BDD
    const dbRef = firebase.database().ref();
    // On va également faire une ref directement dans le noeud / """"table""""" users
    const usersRef = dbRef.child('users');
    readUserData();

//TODO : Faire setup ensemble
//TODO : Créer une ƒ° readUserData
//TODO : dans cette ƒ° on va stocker la user-list dans une variable userListUI
//TODO : sur la variable usersRef on va utiliser une fonction .on()
//? Pour info .on() va s'utiliser comme un addEventListener
//TODO : 1er param de .on(), une string qui dit "value" (en gros dans la bdd on surveille si ya des changements de value)
//TODO : 2e param de .on(), une ƒ° fléchée qui prend un paramètre snap
//TODO : Dans la fonction fléchée : on va assigner une string vide au innerHTML de userListUI
//TODO : Sur la variable snap on va utiliser un forEach pour parcourir le tableau avec une variable temporaire childSnap
//TODO : Dans le forEach : dans une variable key on va stocker childSnap.key
//TODO : Dans le forEach : dans une variable value on va stocker childSnap.val()
//TODO : Dans le forEach : dans une variable $li on va créer un element <li></li>
//TODO : Dans le forEach : dans le innerHTML de $li on lui assigne value.name
//TODO : Dans le forEach : Sur la $li on lui rajoute un attribut 'user-key', on lui assignera la valeur stockée dans key
//TODO : Dans le forEach : dans la userListUI on va placer $li

readUserData();

function readUserData(){
    const userListUI = document.getElementById("user-list");
    usersRef.on("value", snap =>{
        userListUI.innerHTML = "";
        snap.forEach(childSnap => {
            let key = childSnap.key;
            let value = childSnap.val();
            let $li = document.createElement('li');
            let deleteIconUI = document.createElement('span');
            deleteIconUI.classList.add('delete-user');
            deleteIconUI.innerHTML="❌";
            deleteIconUI.setAttribute('userid', key);
            deleteIconUI.addEventListener('click',deleteButtonClicked);
            $li.innerHTML = value.name;
            $li.append(deleteIconUI);
            $li.setAttribute('user-key', key);
            userListUI.append($li);

        });
    })
    
};


//* AJOUTER
//TODO 1: Récupérer le bouton avec l’id add-user-btn
//TODO 2: sur ce bouton placer un addEventlistener au click et qui lance la fonction addBtnClicked
//TODO 3: Créer la fonction addUserBtnClicked 
//TODO 4: Dans la ƒ° addUserBtnClicked, Récupérer la référence à notre BDD directement sur le noeud users
//TODO 5: Dans la ƒ° addUserBtnClicked, Récupérer dans 1 variable addUserInputsUI (les input pour rajouter un user qui ont la classe user-input) 
// conseil utiliser getElementsByClassName
//TODO 6: Dans la ƒ° addUserBtnClicked, créer une variable newUser (qui est un objet vide)
//TODO 7: Dans la ƒ° addUserBtnClicked, faire une boucle for pour parcourir les input dans addUserInputsUI
//TODO 8: Dans la Boucle, Pour chaque éléments parcourus on récupère Dans 1 variable key = addUserInputsUI[i].getAttribute('data-key');
//TODO 9: Dans la boucle, 1 variable value = addUserInputsUI[I].value
//TODO 10: Dans la boucle, Pour chaque clé (âge, name, email) on l’associe à notre nouvel utilisateur :  newUser[key] = value 
//TODO 11: après le parcours des inputs, on va faire un push dans la référence à users dans notre bdd
//TODO 12: Dans la ƒ° addUserBtnClicked, on console log un msg type nouvel utilisateur enregistré 
//TODO 13: Dans la ƒ° addUserBtnClicked, On console log le nom et l’âge du nouvel utilisateur
//TODO 14: Dans la ƒ° addUserBtnClicked, On ré initialise le formulaire avec l’id leFormulaireAjout

const btn = document.getElementById('add-user-btn');

btn.addEventListener('click',addUserBtnClicked);

function addUserBtnClicked(){
    const usersRef = dbRef.child('users');
    const addUserInputsUI = document.getElementsByClassName('user-input');
    // const newUser = {};
    const newUser = new Object();
    for(i=0;i<addUserInputsUI.length;i++){
        let key = addUserInputsUI[i].getAttribute('data-key');
        let value = addUserInputsUI[i].value;
        newUser[key] = value;
    };
    usersRef.push(newUser);
    console.log('Nouvel utilisateur enregistré');
    console.log(`Nom : ${newUser.name}
Âge : ${newUser.age}`);
    // Et mon form se reset pas, le bouton n'a pas l'air actif
    document.getElementById('leFormulaireAjout').reset();
};

//* SUPPRIMER
//TODO 1: Dans la ƒ° readUserData, dans le forEach, juste avant $li.innerHtml = …
//TODO 2: Dans la ƒ° readUserData, dans le forEach, On va déclarer une variable deleteIconUI dans laquelle on va créer un élément span
//TODO 3: Dans la ƒ° readUserData, dans le forEach, On va ensuite modifier la class de deleteIconUI en « delete-user »
//TODO 4: Dans la ƒ° readUserData, dans le forEach, On va remplir le innerHTML de deleteIconUI avec un « X » 
//TODO 5: Dans la ƒ° readUserData, dans le forEach, deleteIconUI on lui rajoute un attribut « userid » qui prendra la valeur de key( via setAttribute)
//TODO 6: Dans la ƒ° readUserData, dans le forEach, Enfin sur deleteIconUI on place un addEventListener qui écoute le click et lance la fonction deleteButtonClicked
//TODO 7: Créer une fonction deleteButtonClicked qui prend event en paramètre 
//TODO 8: Dans la ƒ° deleteButtonClicked, récupérer le userID via event.target.getAttribute 
//TODO 9: Dans la ƒ° deleteButtonClicked,Faire une référence userRef à notre BDD directement sur le noeud de l’utilisateur qu’on a cliqué (référence à la table users + userID)
//TODO 10: Dans la ƒ° deleteButtonClicked,utiliser la fonction remove sur userRef

function deleteButtonClicked(event){
    let userID = event.target.getAttribute('userid');
    const userRef = dbRef.child('users/'+ userID);
    userRef.remove();
};