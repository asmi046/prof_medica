import './bootstrap';

const headerBorder = document.querySelector('header.header')
window.addEventListener('scroll', function(e){
    if(document.documentElement.scrollTop > 10){
        headerBorder.classList.add('sclolled')
    }  else {
        headerBorder.classList.remove('sclolled')
    }
});
