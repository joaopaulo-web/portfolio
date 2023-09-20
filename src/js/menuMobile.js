function showMenu(){
    let menuMobile = document.querySelector('.mobile-aside')

    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open')
        document.querySelector('.icon').src = "src/img/menu-open.svg"
    } else {
        menuMobile.classList.add('open')
        document.querySelector('.icon').src = "src/img/menu-close.svg"
    }
}


function appears() {
    let project1 = document.querySelector('.project1');
    let containerPage2 = document.querySelector('.container-projects-page2');
    let containerPage3 = document.querySelector('.container-project-1-page2');
    let btnRadio = document.querySelector('.btn-radio');

    if (project1.style.display === "none") {
        project1.style.display = "block";
        containerPage2.style.display = "none";
        btnRadio.innerHTML = "Próxima Página";
    } else {
        project1.style.display = "none";
        containerPage2.style.display = "flex";
        containerPage3.style.display = "flex";
        btnRadio.innerHTML = "Página Anterior";
    }
}