// Function below is to have banner1 (left) scroll down with the page
// and also to have the banner stick to original position when page
// is scrolled back up.

const banner = document.querySelector('.banner1');

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
