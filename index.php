<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include 'meta.php' ?>
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/star.css" />
      <link rel="stylesheet" type="text/css" href="css/custom.css" />
      <link rel="stylesheet" type="text/css" href="css/background.css">
      <link rel="stylesheet" type="text/css" href="css/game/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/game/game.css" />
      <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
      <script src="https://use.fontawesome.com/dbb72ac4f9.js"></script>
      <link rel="stylesheet" type="text/css" href="css/social.css">
      <script src="js/modernizr.custom.25376.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
      audio { 
   display:none;
}
         .button {
         width: 110px;
         padding-top: 5px;
         padding-bottom: 5px;
         text-align: center;
         color: #000;
         text-transform: uppercase;
         font-weight: 60;
         margin-top:8px;
         margin-left: 30px;
         margin-bottom: 30px;
         cursor: pointer;
         display: inline-block;
         }
         .button-1 {
         background-color: transparent;
         border: 3px solid #00d7c3;
         border-radius: 50px;
         -webkit-transition: all .15s ease-in-out;
         transition: all .15s ease-in-out;
         color: #00d7c3;
         }
         .button-1:hover {
         box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
         border: 3px solid #00d7c3;
         }
      </style>
   </head>
   <body style="background: black;" class="particletext confetti">
    
         <div class="w3-row">
         <div id="perspective" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <!--<div id="particles-js"></div>-->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;">
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;
                        ">Menu</button>
                     <img src="images/Aavartan.png" height="53vw" width="auto" style="display: inline-block;">
                     <div class="game-holder" id="gameHolder" style="background-color:black;">
                        <div class="header" style="margin-top:-1%;" >
                           <h1 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0.3) , 0 0 20px rgba(255,255,255,0.3) , 0 0 30px rgba(255,255,255,0.3) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
                              "><span></span>AAVARTAN 2018</h1>
                     
                           <h2 style="color: white;">Imagine Improve Implement</h2>
         <br>
                           <h2 style="color: white;">6th & 7th October</h2>
                           <div class="score" id="score">
                              <div class="score__content" id="level">
                                 <div class="score__label">level</div>
                                 <div class="score__value score__value--level" id="levelValue">1</div>
                                 <svg class="level-circle" id="levelCircle" viewbox="0 0 200 200">
                                    <circle id="levelCircleBgr" r="80" cx="100" cy="100" fill="none" stroke="#d1b790" stroke-width="24px" />
                                    <circle id="levelCircleStroke" r="80" cx="100" cy="100" fill="none" #f25346 stroke="#68c3c0" stroke-width="14px" stroke-dasharray="502" />
                                 </svg>
                              </div>
                              <div class="score__content" id="dist">
                                 <div class="score__label">distance</div>
                                 <div class="score__value score__value--dist" id="distValue">000</div>
                              </div>
                              <div class="score__content" id="energy">
                                 <div class="score__label">energy</div>
                                 <div class="score__value score__value--energy" id="energyValue">
                                    <div class="energy-bar" id="energyBar"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="world" id="world" style="background-color: black">
                        </div>
                        <div class="message message--replay" id="replayMessage">Click to Replay</div>
                     </div>
                  </div>
               </div>
               <!-- wrapper -->
            </div>
            <!-- /container -->
            <a id="menuclose" href="#" ><span class="close">&times;</span></a>
            <?php include 'header.php';?>
            <ul>

<li class="vertical"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"
aria-hidden="true"></i></a></li>
</ul>
   
         </div>
         <!-- /perspective -->
      </div>
	  <script>
		var audio = $("audio").get(0);
audio.src = "";
audio.src = "/Streaming/GetStream?type=" + type + "'&token=" + audioApp.MakeId();

audio.load();
audio.play();
	  </script>
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript" src="js/game/TweenMax.min.js"></script>
      <script type="text/javascript" src="js/game/three.min.js"></script>
      <script type="text/javascript" src="js/game/game.js" /></script>
	   <script>
		var audio_file = new Audio('play.mp3')
		audio_file.addEventListener('timeupdate', function(){
			console.log("executed");
               var buffer = .44
                if(this.currentTime > this.duration - buffer){
                    this.currentTime = 0
                    this.play()
                }}, false);

      function runs_on_desktop(){   var isWindows = (navigator.userAgent.toLowerCase().indexOf("windows nt") != -1      && navigator.userAgent.toLowerCase().indexOf("touch") == -1);  var isMacintosh = (navigator.userAgent.toLowerCase().indexOf("macintosh") != -1);   var isLinux = (navigator.userAgent.toLowerCase().indexOf("linux") != -1    && navigator.userAgent.toLowerCase().indexOf("android") == -1);         return isWindows || isMacintosh || isLinux;}var musicToPlay = null;/* * Plays and loops a music file AFTER the user RELEASES * their finger from the canvas. There must be the music * files in the "html5game" directory. * There must be 2 versions of the same file: a .mp3 and a .ogg. * @param file File name WITHOUT EXTENSION!*/function html5_play_music(file){ if (!runs_on_desktop()) {     musicToPlay = file;     var canvas = document.getElementById("canvas");    canvas.addEventListener("touchend", startMusicOnMobile, false);   }  else     startMusic(file);}function startMusicOnMobile(){      event.preventDefault();    if (musicToPlay == null || musicToPlay == "")      return;     startMusic(musicToPlay);   musicToPlay = null;     setTimeout(    function()     {        var canvas = document.getElementById("canvas");       canvas.removeListener("touchend", startMusicOnMobile, false);     },    1);}function startMusic(file){   // first of all delete the audio element if already exists  var audio = document.getElementById("gameMusic");  if (audio)  {     audio.parentNode.removeChild(audio);   }     // create a new audio element audio = document.createElement("audio");  audio.setAttribute("id", "gameMusic"); audio.setAttribute("loop", "true");    var mp3 = document.createElement("source");  mp3.setAttribute("src", "html5game/" + file + ".mp3");   mp3.setAttribute("type", "audio/mpeg");   audio.appendChild(mp3);    var ogg = document.createElement("source");  ogg.setAttribute("src", "html5game" + file + ".ogg"); ogg.setAttribute("type", "audio/ogg"); audio.appendChild(ogg);    audio.play();        document.body.appendChild(audio);}

	  </script>
   </body>
</html>