document.querySelector('.burger').addEventListener('click', function() {
    this.classList.toggle('burger-active');
    document.querySelector('.navigation').classList.toggle('navigation-open');
    document.querySelector('.main').classList.toggle('hide-element');
    document.querySelector('.footer').classList.toggle('hide-element');
})