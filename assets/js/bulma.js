// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
(function() {
    var burger = document.querySelector('.nav-toggle');
    var menu = document.querySelector('.nav-menu');
    if (burger!=null) {
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    }
})();
document.addEventListener('DOMContentLoaded', function () {
        var simple = document.querySelector('.js_slider');

        lory(simple, {
            infinite: 1
        });
    });

//#3273dc