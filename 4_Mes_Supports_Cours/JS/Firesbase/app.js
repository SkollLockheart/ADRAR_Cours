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

function readUserData(){
    const userListUI = document.querySelector('#user-list');
    usersRef.on('value',(snap)=>{
        userListUI.innerHTML = "";
        snap.forEach(childSnap => {
            const key = childSnap.key;
            const value = childSnap.val()
            const $li = document.createElement('li');
            $li.innerHTML = value.name;
            $li.setAttribute = ('user-key',key)
            userListUI.append($li);
        });
        
    });
};

readUserData();