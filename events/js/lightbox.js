iterator = 0;
regis = 0;
/*
Lightbox v2.51
by Lokesh Dhakar - http://www.lokeshdhakar.com

For more information, visit:
http://lokeshdhakar.com/projects/lightbox2/

Licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/
- free for use in both personal and commercial projects
- attribution requires leaving author name, author link, and the license info intact

Thanks
- Scott Upton(uptonic.com), Peter-Paul Koch(quirksmode.com), and Thomas Fuchs(mir.aculo.us) for ideas, libs, and snippets.
- Artemy Tregubenko (arty.name) for cleanup and help in updating to latest proto-aculous in v2.05.


Table of Contents
=================
LightboxOptions

Lightbox
- constructor
- init
- enable
- build
- start
- changeImage
- sizeContainer
- showImage
- updateNav
- updateDetails
- preloadNeigbhoringImages
- enableKeyboardNav
- disableKeyboardNav
- keyboardAction
- end

options = new LightboxOptions
lightbox = new Lightbox options
*/

(function() {
  var $, Lightbox, LightboxOptions;

  $ = jQuery;

  LightboxOptions = (function() {

    function LightboxOptions() {
      this.fileLoadingImage = 'images/loading.gif';
      this.fileCloseImage = 'images/close.png';
      this.resizeDuration = 700;
      this.fadeDuration = 500;
      this.labelImage = "Image";
      this.labelOf = "of";
    }

    return LightboxOptions;

  })();

  Lightbox = (function() {

    function Lightbox(options) {
      this.options = options;
      this.album = [];
      this.currentImageIndex = void 0;
      this.init();
    }

    Lightbox.prototype.init = function() {
      this.enable();
      return this.build();
    };

    Lightbox.prototype.enable = function() {
      var _this = this;
      return $('body').on('click', 'a[rel^=lightbox], area[rel^=lightbox]', function(e) {
        _this.start($(e.currentTarget));
        return false;
      });
    };

    Lightbox.prototype.build = function() {
      var $lightbox,
        _this = this;
      $("<div>", {
        id: 'lightboxOverlay'
      }).after($('<div/>', {
        id: 'lightbox'
      }).append($('<div/>', {
        "class": 'lb-outerContainer'
      }).append($('<div/>', {
        "class": 'lb-container'
      }).append($('<img/>', {
        "class": 'lb-image'
      }), $('<div/>', {
        "class": 'lb-nav'
      }).append($('<a/>', {
        "class": 'lb-prev'
      }), $('<a/>', {
        "class": 'lb-next'
      })), $('<div/>', {
        "class": 'lb-loader'
      }).append($('<a/>', {
        "class": 'lb-cancel'
      }).append($('<img/>', {
        src: this.options.fileLoadingImage
      }))))), $('<div/>', {
        "class": 'lb-dataContainer'
      }).append($('<div/>', {
        "class": 'lb-data'
      }).append($('<div/>', {
        "class": 'lb-details'
      }).append($('<span/>', {
        "class": 'lb-caption'
      }), $('<span/>', {
        "class": 'lb-number'
      })), $('<div/>', {
        "class": 'lb-closeContainer'
      }).append($('<a/>', {
        "class": 'lb-close'
      }).append($('<img/>', {
        src: this.options.fileCloseImage
      }))))))).appendTo($('body'));
      $('#lightboxOverlay').hide().on('click', function(e) {
        _this.end();
        return false;
      });
      $lightbox = $('#lightbox');
      $lightbox.hide().on('click', function(e) {
        if ($(e.target).attr('id') === 'lightbox') _this.end();
        return false;
      });
      $lightbox.find('.lb-outerContainer').on('click', function(e) {
        if ($(e.target).attr('id') === 'lightbox') _this.end();
        return false;
      });
      $lightbox.find('.lb-prev').on('click', function(e) {
        _this.changeImage(_this.currentImageIndex - 1);
        return false;
      });
      $lightbox.find('.lb-next').on('click', function(e) {
        _this.changeImage(_this.currentImageIndex + 1);
        return false;
      });
      $lightbox.find('.lb-loader, .lb-close').on('click', function(e) {
        _this.end();
        return false;
      });
    };

    Lightbox.prototype.start = function($link) {
      var $lightbox, $window, a, i, imageNumber, left, top, _len, _ref;
      $(window).on("resize", this.sizeOverlay);
      $('select, object, embed').css({
        visibility: "hidden"
      });
      $('#lightboxOverlay').width($(document).width()).height($(document).height()).fadeIn(this.options.fadeDuration);
      this.album = [];
      imageNumber = 0;
      if ($link.attr('rel') === 'lightbox') {
        this.album.push({
          link: $link.attr('href'),
          title: $link.attr('title')
        });
      } else {
        _ref = $($link.prop("tagName") + '[rel="' + $link.attr('rel') + '"]');
        for (i = 0, _len = _ref.length; i < _len; i++) {
          a = _ref[i];
          this.album.push({
            link: $(a).attr('href'),
            title: $(a).attr('title')
          });
          if ($(a).attr('href') === $link.attr('href')) imageNumber = i;
        }
      }
      $window = $(window);
      top = $window.scrollTop() + $window.height() / 10;
      left = $window.scrollLeft();
      $lightbox = $('#lightbox');
      $lightbox.css({
        top: top + 'px',
        left: left + 'px'
      }).fadeIn(this.options.fadeDuration);
      this.changeImage(imageNumber);
    };

    Lightbox.prototype.changeImage = function(imageNumber) {
      var $image, $lightbox, preloader,
        _this = this;
      this.disableKeyboardNav();
      $lightbox = $('#lightbox');
      $image = $lightbox.find('.lb-image');
      this.sizeOverlay();
      $('#lightboxOverlay').fadeIn(this.options.fadeDuration);
      $lightbox.find('.lb-loader').fadeIn('slow');
      $lightbox.find('.lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption').hide();
      $lightbox.find('.lb-outerContainer').addClass('animating');
      preloader = new Image;
      preloader.onload = function() {
        $image.attr('src', _this.album[imageNumber].link);
        $image.width = preloader.width;
        $image.height = preloader.height;
        return _this.sizeContainer(preloader.width, preloader.height);
      };
      preloader.src = this.album[imageNumber].link;
      this.currentImageIndex = imageNumber;
    };


    Lightbox.prototype.sizeOverlay = function() {
      return $('#lightboxOverlay').width($(document).width()).height(1000);
    };

    Lightbox.prototype.sizeContainer = function(imageWidth, imageHeight) {
      var $container, $lightbox, $outerContainer, containerBottomPadding, containerLeftPadding, containerRightPadding, containerTopPadding, newHeight, newWidth, oldHeight, oldWidth,
        _this = this;
      $lightbox = $('#lightbox');
      $outerContainer = $lightbox.find('.lb-outerContainer');
      oldWidth = $outerContainer.outerWidth();
      oldHeight = $outerContainer.outerHeight();
      $container = $lightbox.find('.lb-container');
      containerTopPadding = parseInt($container.css('padding-top'), 10);
      containerRightPadding = parseInt($container.css('padding-right'), 10);
      containerBottomPadding = parseInt($container.css('padding-bottom'), 10);
      containerLeftPadding = parseInt($container.css('padding-left'), 10);
      newWidth = imageWidth + containerLeftPadding + containerRightPadding;
      newHeight = imageHeight + containerTopPadding + containerBottomPadding;
      if (newWidth !== oldWidth && newHeight !== oldHeight) {
        $outerContainer.animate({
          width: newWidth,
          height: newHeight
        }, this.options.resizeDuration, 'swing');
      } else if (newWidth !== oldWidth) {
        $outerContainer.animate({
          width: newWidth
        }, this.options.resizeDuration, 'swing');
      } else if (newHeight !== oldHeight) {
        $outerContainer.animate({
          height: newHeight
        }, this.options.resizeDuration, 'swing');
      }
      setTimeout(function() {
        $lightbox.find('.lb-dataContainer').width(newWidth);
        $lightbox.find('.lb-prevLink').height(newHeight);
        $lightbox.find('.lb-nextLink').height(newHeight);
        _this.showImage();
      }, this.options.resizeDuration);
    };

    Lightbox.prototype.showImage = function() {
      var $lightbox;
      $lightbox = $('#lightbox');
      $lightbox.find('.lb-loader').hide();
      $lightbox.find('.lb-image').fadeIn('slow');
      this.updateNav();
      this.updateDetails();
      this.preloadNeighboringImages();
      this.enableKeyboardNav();
    };

    Lightbox.prototype.updateNav = function() {
      var $lightbox;
      $lightbox = $('#lightbox');
      $lightbox.find('.lb-nav').show();
      if (this.currentImageIndex > 0) $lightbox.find('.lb-prev').show();
      if (this.currentImageIndex < this.album.length - 1) {
        $lightbox.find('.lb-next').show();
      }
    };

    Lightbox.prototype.updateDetails = function() {
      var $lightbox,
        _this = this;
      $lightbox = $('#lightbox');
      if (typeof this.album[this.currentImageIndex].title !== 'undefined' && this.album[this.currentImageIndex].title !== "") {
        $lightbox.find('.lb-caption').html(this.album[this.currentImageIndex].title).fadeIn('fast');
      }
      if (this.album.length > 1) {
        selectedevent = this;
        if(this.album.length == 16){
          iterator = 0;
        }
        if(this.album.length == 2){
          console.log("second row")
          iterator = 17;
        }
        if(this.album.length == 5){
          iterator = 20;
        }
        if(this.album.length == 3){
          iterator = 26;
        }
      var   usrmessage;
        // var usercheck =  document.getElementById('eventdata').getAttribute('data-value')
        usercheck = true
        if(usercheck == "")  {
        usrmessage = "log in to register"

        } else {
        usrmessage  =   "not registered"
        }
        console.log("sid upper iteration check ")
        console.log(this.currentImageIndex+iterator)
        var xyz=evd[this.currentImageIndex+iterator].akash;
        $lightbox.find('.lb-number').html(
           '<div class="mihir" onClick="mihirsir('+xyz+')" id="toggles">  <input  type="checkbox" name="checkbox" id="checkbox" data-value="'+evd[this.currentImageIndex+iterator].akash+'" class="ios-toggle" checked/><label for="checkbox1" class="checkbox-label" data-off="'+usrmessage+'" data-on="registered"></label> </div>'
        + '</br></br><strong>About Event:</strong></br>' +  evd[this.currentImageIndex+iterator].about
        + '</br></br><strong>Event Description:</strong></br>' +  evd[this.currentImageIndex+iterator].description
        + '</br></br><strong>Rules And Regulations</strong><br>' + evd[this.currentImageIndex+iterator].rules
        + '<strong>Round1:</strong></br>' +  evd[this.currentImageIndex+iterator].round1
        + '</br></br><strong>Round2:</strong></br>' +  evd[this.currentImageIndex+iterator].round2
        + '</br></br><strong>Round3:</strong></br>' +  evd[this.currentImageIndex+iterator].round3
        + '</br></br><strong>Judging Criteria:</strong></br>' +  evd[this.currentImageIndex+iterator].judging_criteria
        + '</br></br><strong>Venue</strong></br>' +  evd[this.currentImageIndex+iterator].venue + ' '
        + '</br></br><strong>Team</strong></br>' +  evd[this.currentImageIndex+iterator].team + ' '
        + '</br></br><strong>Coordinators</strong></br>' +  evd[this.currentImageIndex+iterator].coordinators + ' '

         + (this.currentImageIndex + 1) + ' '
         + this.options.labelOf + '  '
         + this.album.length
       ).fadeIn('fast');
       firstevent(this.album.length)
      } else {
        $lightbox.find('.lb-number').hide();
      }
      $lightbox.find('.lb-outerContainer').removeClass('animating');
      $lightbox.find('.lb-dataContainer').fadeIn(this.resizeDuration, function() {
        return _this.sizeOverlay();
      });
    };

    Lightbox.prototype.preloadNeighboringImages = function() {
      var preloadNext, preloadPrev;
      if (this.album.length > this.currentImageIndex + 1) {
        preloadNext = new Image;
        preloadNext.src = this.album[this.currentImageIndex + 1].link;
      }
      if (this.currentImageIndex > 0) {
        preloadPrev = new Image;
        preloadPrev.src = this.album[this.currentImageIndex - 1].link;
      }
    };

    Lightbox.prototype.enableKeyboardNav = function() {
      $(document).on('keyup.keyboard', $.proxy(this.keyboardAction, this));
    };

    Lightbox.prototype.disableKeyboardNav = function() {
      $(document).off('.keyboard');
    };

    Lightbox.prototype.keyboardAction = function(event) {
      var KEYCODE_ESC, KEYCODE_LEFTARROW, KEYCODE_RIGHTARROW, key, keycode;
      KEYCODE_ESC = 27;
      KEYCODE_LEFTARROW = 37;
      KEYCODE_RIGHTARROW = 39;
      keycode = event.keyCode;
      key = String.fromCharCode(keycode).toLowerCase();
      if (keycode === KEYCODE_ESC || key.match(/x|o|c/)) {
        this.end();
      } else if (key === 'p' || keycode === KEYCODE_LEFTARROW) {
        if (this.currentImageIndex !== 0) {
          this.changeImage(this.currentImageIndex - 1);
        }
      } else if (key === 'n' || keycode === KEYCODE_RIGHTARROW) {
        if (this.currentImageIndex !== this.album.length - 1) {
          this.changeImage(this.currentImageIndex + 1);
        }
      }
    };

    Lightbox.prototype.end = function() {
      this.disableKeyboardNav();
      $(window).off("resize", this.sizeOverlay);
      $('#lightbox').fadeOut(this.options.fadeDuration);
      $('#lightboxOverlay').fadeOut(this.options.fadeDuration);
      return $('select, object, embed').css({
        visibility: "visible"
      });
    };

    return Lightbox;

  })();

  $(function() {
    var lightbox, options;
    options = new LightboxOptions;
    return lightbox = new Lightbox(options);
  });

}).call(this);





$( ".ios-toggle" ).on( "click", function() {
  $('.ios-toggle').prop('checked', false);
  if (evr[selectedevent.currentImageIndex] === 1 ) {
 $('.ios-toggle').attr("disabled", true);

  } else {
    $('.ios-toggle').prop('checked', true);
    evr[selectedevent.currentImageIndex] = 1;

  }
});

function secondevent() {
  var usercheck =  document.getElementById('eventdata').getAttribute('data-value')

  if(usercheck == "")  {
  } else {

    if (evr[selectedevent.currentImageIndex] === 1 ) {
      $('.ios-toggle').attr("disabled", true);

    } else {
      $('.ios-toggle').prop('checked', true);
      evr[selectedevent.currentImageIndex] = 1;


    }
  }

    // });
    // $( ".ios-toggle" ).trigger( "click" );
    // $( ".ios-toggle" ).trigger( "click" );

}
 // var sid = document.getElementById('eventdata').getAttribute('data-value');
var sid = '1 1 0 1 0 1 0 1 1 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 1 0 0 1 0 1';
var ar = sid.split(' '); // split string on comma space
/*        selectedevent = this;
        if(this.album.length == 13){
          regis = 0;
        }
        if(this.album.length == 4){
          regis = 13;
        }
        if(this.album.length == 5){
          regis = 16;
        }
        if(this.album.length == 3){
          regis = 22;
        }*/
// var sidd = sid.splice(17, 0, "null");
// sidd = sidd.splice(18, 0, "null");
// sidd = sidd.splice(20, 0, "null");
// sidd = sidd.splice(21, 0, "null");
// sidd = sidd.splice(22, 0, "null");
// sidd = sidd.splice(23, 0, "null");
// sidd = sidd.splice(26, 0, "null");
// sidd = sidd.splice(27, 0, "null");
// sidd = sidd.splice(28, 0, "null");
function firstevent(p){
/*console.log(p);*/
var regis;
  if(p== 17){
          regis = 0;
        }
        if(p == 4){
          regis = 16;
        }
        if(p == 5){
          regis = 20;
        }
        if(p == 3){
          regis = 26;
        }
/*console.log("regis");
  console.log(regis);
  console.log("index");
  console.log(selectedevent.currentImageIndex);
  console.log("selectedevent.currentImageIndex");
  console.log(ar[selectedevent.currentImageIndex]);
          console.log(":::::::::::::");*/
          console.log("regis" + regis);
          console.log("index"+selectedevent.currentImageIndex );
          console.log(selectedevent.currentImageIndex + regis)
  if (ar[selectedevent.currentImageIndex + regis] == 1 ) {
    $('.ios-toggle').prop('checked', true);

  } else {
    $('.ios-toggle').prop('checked', false);


  }
$( "#toggles" ).on( "click", function() {
    // $( ".ios-toggle" ).on( "click", function() {

secondevent()
    // });
    // $( ".ios-toggle" ).trigger( "click" );
    // $( ".ios-toggle" ).trigger( "click" );
});
}

// ios-toggle
// $( """ ).trigger( "click" );

//$( ".ios-toggle" ).on( "click", function() {
//  alert( $( this ).text() );
//
//
//loadDoc("update.php", toggleTheButton());
//
//
//});
//
//
//
//
//
//function loadDoc(url, cFunction) {
//  var xhttp;
//  xhttp=new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//      cFunction(this);
//    }
//  };
//  xhttp.open("GET","update.php", true);
//  xhttp.send();
//}
//
//
//$( "checkbox-label" ).on( "click", function() {
//  alert( $( this ).text() );
//    console.log("button triggered");
//
//
//loadDoc("update.php", toggleTheButton());
//
//
//});
//
//
//
//
//
//function loadDoc(a, cFunction) {
//  // var xhttp;
//  // xhttp=new XMLHttpRequest();
//  // xhttp.onreadystatechange = function() {
//  //   if (this.readyState == 4 && this.status == 200) {
//  //     cFunction(this);
//  //   }
//  // };
//  // xhttp.open("GET","update.php", true);
//  // xhttp.send();
//  var http = new XMLHttpRequest();
//var url = 'update.php';
//var params = this.getAttribute('data-value');
//http.open('POST', url, true);
//
////Send the proper header information along with the request
//http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//
//http.onreadystatechange = function() {//Call a function when the state changes.
//    if(http.readyState == 4 && http.status == 200) {
//        alert(http.responseText);
//
//        if(this.prop('checked', false)){
//          this.prop.checked = true;
//        }
//        else {
//          this.prop.checked = false;
//        }
//
//
//
//    }
//}
//http.send(params);
//}
//
////
//// function toggleTheButton(xhttp) {
////   if(this.prop('checked', false)){
////     this.prop.checked = true;
////   }
////   else {
////     this.prop.checked = false;
////   }
//// }
//
