import Alpine from 'alpinejs'
window.Alpine = Alpine;

window.url = document.querySelector("meta[name='url']").getAttribute("content");
window.csrf = document.querySelector("meta[name='csrf-token']").getAttribute("content");

/** Adds some simple class replacers, see the following article to learn more:
 * https://devdojo.com/tnylea/animating-tailwind-transitions-on-page-load
 */

document.addEventListener("DOMContentLoaded", function () {
    var replacers = document.querySelectorAll('[data-replace]');
    for (var i = 0; i < replacers.length; i++) {
        let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
        Object.keys(replaceClasses).forEach(function (key) {
            replacers[i].classList.remove(key);
            replacers[i].classList.add(replaceClasses[key]);
        });
    }
});

/********** ALPINE FUNCTIONALITY **********/

// Write your code

document.addEventListener('alpine:init', () => {
    Alpine.store('loading', {
        open: false
    });
});

Alpine.start();
/********** END ALPINE FUNCTIONALITY **********/