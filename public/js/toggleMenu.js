function toggleMenu(){
    var menu = document.querySelector('.menu');
    if(menu.classList.contains('is-active')){
        menu.classList.remove('is-active');
    } else {
        menu.classList.add('is-active');
    }
}

document.querySelector('.menu__btn').addEventListener('click', toggleMenu);

