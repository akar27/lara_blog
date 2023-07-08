var prevScrollpos = window.pageYOffset;
// alert('working');
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").classList.remove("d-none");
    document.getElementById("navbar").classList.add("fixed-top");
  } else {
    document.getElementById("navbar").classList.add("d-none");
    document.getElementById("navbar").classList.remove("fixed-top");
  }
  prevScrollpos = currentScrollPos;
}