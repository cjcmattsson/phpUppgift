// Code below makes "scroll to top"-button appear when page is scrolled
// below 500 pixels, and dissaper (is not shown) when above that.

window.onscroll = function(){
  scrollFunction()
  };

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
