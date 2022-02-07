'use strict';

document.getElementById("menu-open").addEventListener('click', menu);

function menu() {
    let contentMenu = document.getElementById("menu");
    contentMenu.style.display = contentMenu.style.display === 'flex' ? 'none' : 'flex';
}