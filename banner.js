const banner = document.querySelector('.banner');

window.addEventListener('scroll', function() {

    const top = banner.getBoundingClientRect().top;


    if (top <= 20 && !banner.classList.contains('fixed')) {
      banner.classList.add('fixed');
    }
     if (top > 20 && banner.classList.contains('fixed')) {
      banner.classList.remove('fixed');
    }

    if (window.scrollY < 199) {
      banner.classList.remove('fixed');
    }

    console.log(window.scrollY);

});
