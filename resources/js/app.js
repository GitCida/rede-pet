import './bootstrap';

import Alpine from 'alpinejs';

import IMask from 'imask';

document.addEventListener("DOMContentLoaded", () => {
    const phoneField = document.getElementById("phone");

    if (phoneField) {
        IMask(phoneField, {
            mask: "(00)00000-0000",
        });
    }
});

window.Alpine = Alpine;

Alpine.start();
