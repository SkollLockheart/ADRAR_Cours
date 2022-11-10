let load = document.querySelector('div');
load.style.border=`3px solid red`; 
load.style.position='sticky';
load.style.top=`0px`;
load.style.width=`100%`;
load.style.height=`50px`;

document.addEventListener('scroll',()=>{
    //page totale
    let hauteurPage = document.body.offsetHeight;
    // page visible
    let hauteurAffiche = window.innerHeight;
    // position scroll dans page totale
    let hautScroll = scrollY;
    
    // calcul position scroll pour le %
    let position = (hautScroll)/(hauteurPage-hauteurAffiche)*100;

    //remplissage de la div
    load.style.backgroundImage='linear-gradient(to right, blue '+ position +'%, white '+ position +'%)';
});