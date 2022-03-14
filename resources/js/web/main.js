'use strict';
(() => {


    const toggleMenu = (() => {
        const contentMenu = document.getElementById("menu");
        const openOrClose = (contentMenu.classList.contains('menu-open') ? 'remove' : 'add');

        contentMenu.classList[openOrClose]("menu-open");
    })

    document.getElementById("menu-open").addEventListener('click', () => {
        toggleMenu();
    });

    const menuOptions = document.getElementsByClassName("navbar-link");
    const totalMenuOptions = menuOptions.length;

    for (let i = 0; i < totalMenuOptions; i++) {
        const option = menuOptions[i];

        option.addEventListener('click', () => {
            toggleMenu();
        });
    }

    window.addEventListener('scroll', () => {

        const scrollTo = (window.scrollY === 0 ? 'remove' : 'add');

        document.getElementById("navbar").classList[scrollTo]("navbar-scrolling");
        document.getElementById("menu").classList[scrollTo]("menu-sticky");
        document.getElementsByClassName("btn-up")[0].classList[scrollTo]("btn-up-show");

    });

})();