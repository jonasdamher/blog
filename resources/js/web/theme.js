'use strict';
(() => {

    const theme = localStorage.getItem('theme');
    if (theme && theme != '') {
        document.getElementsByTagName('html')[0].classList['add'](theme)
    }
})();