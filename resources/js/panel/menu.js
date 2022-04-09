'use strict';

$(() => {

    $('.toggle-menu').on('click', function () {
        const menu = $('.menu');

        if (menu.css('visibility') === 'visible') {
            menu.removeClass('show');
        } else {
            menu.addClass('show');
        }
    });

    $('.btn-filter-toggle').on('click', function () {
        const filters = $('.form-filters');
        if (filters.css('display') === 'none') {
            filters.fadeIn();
        } else {
            filters.fadeOut();
        }
    });

    $('#change-main-main').on('change', function () {
        $('.navbar-main').toggleClass('menu-short');
    });

});