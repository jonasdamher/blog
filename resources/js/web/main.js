'use strict';
(() => {

    const toggleMenu = (() => {
        const contentMenu = document.getElementById("menu");
        const openOrClose = (contentMenu.classList.contains('menu-open') ? 'remove' : 'add');

        contentMenu.classList[openOrClose]("menu-open");
    })

    // Abrir menú navegación
    document.getElementById("menu-open").addEventListener('click', () => {
        toggleMenu();
    });

    const menuOptions = document.getElementsByClassName("navbar-link");
    const totalMenuOptions = menuOptions.length;
    // Cerrar menú al hacer clic en apartado del menú (vista móvil)
    for (let i = 0; i < totalMenuOptions; i++) {
        const option = menuOptions[i];

        option.addEventListener('click', () => {
            toggleMenu();
        });
    }

    window.addEventListener('scroll', () => {

        const scrollTo = (window.scrollY === 0 ? 'remove' : 'add');

        // Animar barra de navegación al hacer scroll
        document.getElementById("navbar").classList[scrollTo]("navbar-scrolling");
        document.getElementById("menu").classList[scrollTo]("menu-sticky");
        // Quita/añadir btn - Ir a la parte superior
        document.getElementsByClassName("btn-up")[0].classList[scrollTo]("btn-up-show");

    });

    // Tema de pág
    const changeTheme = document.getElementById("change-theme");
    const theme = localStorage.getItem('theme');
    if (theme && theme != '') {
        changeTheme.checked = true;
        const label = document.getElementsByClassName("change-theme-label")[0];
        label.setAttribute("aria-checked", 'true');

        changeTheme.checked = true;
    }

    changeTheme.addEventListener('click', (e) => {

        const label = document.getElementsByClassName("change-theme-label")[0];
        const checked = label.getAttribute('aria-checked')
        // Cambio de label para accesibilidad
        label.setAttribute("aria-checked", (checked == 'false' ? 'true' : 'false'));

        // Añadir tema oscura a la web
        const addOrRemove = (checked == 'false' ? 'add' : 'remove');
        document.getElementsByTagName('html')[0].classList[addOrRemove]("dark-theme")
        localStorage.setItem('theme', (checked == 'false' ? 'dark-theme' : ''));

    });


})();