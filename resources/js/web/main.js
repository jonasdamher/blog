'use strict';
(function () {

    document.getElementById("menu-open").addEventListener('click', () => {
        const contentMenu = document.getElementById("menu");
        contentMenu.style.display = (contentMenu.style.display === 'flex' ? 'none' : 'flex');
    });

    window.addEventListener('scroll', () => {

        const methodScroll = (window.scrollY == 0 ? 'remove' : 'add');
        document.getElementById("navbar").classList[methodScroll]("navbar-scrolling");
    })

})();