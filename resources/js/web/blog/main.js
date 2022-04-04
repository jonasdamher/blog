'use strict';

(() => {

    // Quitar las categorías seleccionadas
    const categories = document.getElementsByClassName("checkbox-category");
    const totalCategories = categories.length;

    document.getElementById('all-categories').addEventListener('click', () => {

        for (let i = 0; i < totalCategories; i++) {
            const category = categories[i];
            category.checked = false;
        }

    });

})();