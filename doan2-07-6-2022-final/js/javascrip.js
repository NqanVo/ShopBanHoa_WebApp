
//open menu on mobile
const icon_menu = document.querySelector('.js-icon-menu');
const modal = document.querySelector('.modal');
const icon_filter = document.querySelector('.js-filter');
const icon_close_filter = document.querySelector('.close-filter');
const filter = document.querySelector('.filter');

icon_menu.onclick = function(){
    modal.classList.add('modal-open');
}
//open filter on mobile
icon_filter.onclick = function(){
    filter.style.display = "block";
}
icon_close_filter.onclick = function(){
    filter.style.display = "none";
}


//auto close when click item
var menuItems = document.querySelectorAll('.js-list-mb .list-item-mb');
for(var i =0;i<menuItems.length;i++){
    var menuItem = menuItems[i];
    menuItem.onclick = function(){
        modal.classList.remove('modal-open');
    }
}
modal.onclick = function(){
    modal.classList.remove('modal-open');
}