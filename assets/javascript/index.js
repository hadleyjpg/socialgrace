/**
 * 
 * HAMBURGER MENU
 *  
 */

const hamburger = document.getElementById('hamburger');
const navUL = document.getElementById('nav');
const navMobile = document.getElementById('navMobile');
const close = document.getElementById('close');

hamburger.addEventListener('click', () => {
    navMobile.style.left = '0px';
    navMobile.style.transitionProperty = 'left';
    navMobile.style.transitionTimingFunction = 'ease';
    navMobile.style.transitionDuration = '700ms';
    navUL.classList.add('show');
});

close.addEventListener('click', () => {
    navMobile.style.left = '-100%';
    navMobile.style.transitionProperty = 'left';
    navMobile.style.transitionTimingFunction = 'ease';
    navMobile.style.transitionDuration = '700ms';
});