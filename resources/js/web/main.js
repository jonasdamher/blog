'use strict';
(() => {

    document.getElementById("menu-open").addEventListener('click', () => {

        const contentMenu = document.getElementById("menu");
        const openOrClose = (contentMenu.classList.contains('menu-open') ? 'remove' : 'add');

        contentMenu.classList[openOrClose]("menu-open");
    });

    window.addEventListener('scroll', () => {

        const scrollTo = (window.scrollY === 0 ? 'remove' : 'add');

        document.getElementById("navbar").classList[scrollTo]("navbar-scrolling");
        document.getElementById("menu").classList[scrollTo]("menu-sticky");
        document.getElementsByClassName("btn-up")[0].classList[scrollTo]("btn-up-show");

    });

})();