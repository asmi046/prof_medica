import './bootstrap';

const headerBorder = document.querySelector('.container__header')
window.addEventListener('scroll', function(e){
    const scrollInfo = document.documentElement.scrollTop;
    if(scrollInfo>10){
        headerBorder.style.borderBottom = '2px solid black';
    }  else {
        headerBorder.style.borderBottom = '';
    }
});
