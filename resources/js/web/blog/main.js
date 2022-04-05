'use strict';

(() => {

    // Quitar las categorías seleccionadas
    const checkboxAllCategories = document.getElementById('all');
    const categories = document.getElementsByClassName("checkbox-category");
    const totalCategories = categories.length;

    checkboxAllCategories.addEventListener('click', () => {

        for (let i = 0; i < totalCategories; i++) {
            const category = categories[i];
            if (category.checked) {
                category.checked = false;
            }
        }

    });

    for (let i = 0; i < totalCategories; i++) {
        const category = categories[i];

        category.addEventListener('click', () => {

            if (checkboxAllCategories.checked) {
                checkboxAllCategories.checked = false;
            }
        });
    }

})();