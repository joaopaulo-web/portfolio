function showMenu(){
    let menuMobile = document.querySelector('.mobile-aside')

    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open')
        document.querySelector('.icon').src = "src/img/icon-menu.svg"
    } else {
        menuMobile.classList.add('open')
        document.querySelector('.icon').src = "src/img/icon-menu-duo.svg"
    }
}