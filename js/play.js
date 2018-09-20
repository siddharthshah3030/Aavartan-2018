$('#play-video').on('click', function(e){
  e.preventDefault();
this.style.display = "none";
  init()

  // window.addEventListener("load",init,!1);
});



window.addEventListener("load",function() {
    setTimeout(function(){
        // This hides the address bar:
        window.scrollTo(0, 1);
    }, 0);
});