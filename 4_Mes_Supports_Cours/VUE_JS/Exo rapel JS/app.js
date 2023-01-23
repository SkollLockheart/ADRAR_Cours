const tache = document.querySelector('#tache');
const bouton = document.querySelector('#bouton');
const liste = document.querySelector('#liste');

function todoList(){
    const tacheContent = tache.value;
    const listElem = document.createElement('li');
    listElem.textContent = tacheContent;
    liste.append(listElem);
    tache.value = '';
}

bouton.addEventListener('click',todoList);