var menuContainer = document.getElementById('menu-container');
var items = document.getElementsByClassName('menu-item');

for (let i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function () {
        var current = document.getElementsByClassName('active');
        current[0].className = current[0].className.replace(' active', '');
        this.className += " active";
    });   
}