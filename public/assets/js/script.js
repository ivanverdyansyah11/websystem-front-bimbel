const hamburger = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar');
const categoryButton = document.querySelector('.category-button');
const categoryList = document.querySelector('.category-list');
const sortButton = document.querySelector('.sort-button');
const sortList = document.querySelector('.sort-list');

hamburger.addEventListener('click', function() {
    sidebar.classList.toggle('active');
});

categoryButton.addEventListener('click', function() {
    categoryList.classList.toggle('active');
});

sortButton.addEventListener('click', function() {
    sortList.classList.toggle('active');
});