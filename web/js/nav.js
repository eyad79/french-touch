/* nav */
(function () {

    var burger = document.querySelector('.main-header--burger');
    var nav = document.querySelector('.main-header--nav');


    document.addEventListener('click', function () {
        nav.classList.remove('active');
    });

    nav.addEventListener('click', function () {
        if (event.stopPropagation) {
            event.stopPropagation();
        }
    });

    burger.addEventListener('click', function (event) {
        nav.classList.add('active');

        if (event.stopPropagation) {
            event.stopPropagation();
        }
    });

})();