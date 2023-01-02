const togglerLeft = document.querySelector('#burger_left');
const asideLeft = document.querySelector('#aside_left');

const toggleAside = () => {
    togglerLeft.classList.toggle('open')
    asideLeft.classList.toggle('open')
}

togglerLeft.addEventListener('click', toggleAside)





