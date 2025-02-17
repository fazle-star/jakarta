document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('static-modal');
    const overlay = document.getElementById('overlay');
    const openModalButtons = document.querySelectorAll('[data-modal-toggle="static-modal"]');
    const closeModalButtons = document.querySelectorAll('[data-modal-hide="static-modal"]');

    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    });

    overlay.addEventListener('click', () => {
        modal.classList.add('hidden');
        overlay.classList.add('hidden');
    });
});