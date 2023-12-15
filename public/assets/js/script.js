const hamburger = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar.mobile');

hamburger.addEventListener('click', function() {
    sidebar.classList.toggle('active');
});