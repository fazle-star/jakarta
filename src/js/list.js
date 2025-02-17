   // JavaScript untuk toggle list
   document.getElementById('toggleButton').addEventListener('click', function() {
    const list = document.getElementById('list');
    list.classList.toggle('max-h-0');
    list.classList.toggle('max-h-96'); // Sesuaikan nilai max-height sesuai kebutuhan
});