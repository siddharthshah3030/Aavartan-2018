var prevScrollpos = window.pageYOffset;
console.log("top scroll trigger")

window.onscroll = function() {
  console.log("scroll trigger")
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("emenu").style.top = "0";
  } else {
    document.getElementById("emenu").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
