document.querySelector('.burger').addEventListener('click', function() {
    this.classList.toggle('burger-active');
    document.querySelector('.navigation').classList.toggle('navigation-open');
    document.querySelector('body').classList.toggle('stop-scrolling');
})