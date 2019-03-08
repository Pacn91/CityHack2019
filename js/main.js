$( document ).ready(function() {
  countdownFunction();
  showMenu();
  checkScrollFromTop();
  openFancyBoxes();
  fitText();
  smoothScroll();
  timeline();
  AOS.init();
  // $.fancybox.open({src: '#info_alert'});

  // função para esconder o menu mobile quando é aumentada a largura da página (caso seja superior a 1023 pixeis)
  $(window).resize(function() {
    if ($(this).width() > 1023 && $('.menu_toggle').hasClass('is-clicked')) {
      $('#navbar').removeClass('mobile');
      $('.menu_toggle').removeClass('is-clicked');
    }
  })

  // É adicionada cor gradualmente à navbar durante o scroll da página (o backgroud da navbar por default é transparente)
  $(window).scroll(function() {
    if (!$('#navbar').hasClass('mobile')){
      if ($(document).scrollTop() > 50) {
        $('#navbar').addClass('with-background');
        $("#navbar_logo").attr("src","./images/logo-cityhack-preto.png");
      } else {
        $('#navbar').removeClass('with-background');
        $("#navbar_logo").attr("src","./images/logo-cityhack-branco.png");
      }
    }
  });

  if ($(window).width() > 800){
    particlesJS.load('particles-js', 'particles.json');
  }

  $('.menu a').bind('click', function () {
    $('#navbar').removeClass('mobile');
    $('.menu_toggle').removeClass('is-clicked');
  })


  // Faz com que o botão de "fechar" nunca desapareça.
  $('.google_form').fancybox({
    idleTime: false
  });
});

// função para mostrar/esconder o menu em mobile
function showMenu(){
  $('.menu_toggle').bind('click', function () {
    $('.menu_toggle').toggleClass('is-clicked');
    $('#navbar').toggleClass('mobile');

    if ($('.menu_toggle').hasClass('is-clicked')){
      $("#navbar_logo").attr("src","./images/logo-cityhack-preto.png");
    } else {
      if ($(document).scrollTop() > 50) {
        $("#navbar_logo").attr("src","./images/logo-cityhack-preto.png");
      } else {
        $("#navbar_logo").attr("src","./images/logo-cityhack-branco.png");
      }
    }
  });
}

function checkScrollFromTop(){
  if ($(document).scrollTop() > 50) {
    $('#navbar').addClass('with-background');
    $("#navbar_logo").attr("src","./images/logo-cityhack-preto.png");
  } else {
    $('#navbar').removeClass('with-background');
    $("#navbar_logo").attr("src","./images/logo-cityhack-branco.png");
  }
}

function fitText(){
  // $("#cityhackDaysLeft").fitText(0.1, { minFontSize: '10px', maxFontSize: '95px' });
}

function toggleChallenge(data){
  $(`#${data}`).toggleClass('is-clicked');
}

function timeline(){
  $('#timelineDay2Button').bind('click', function () {
    $('#timelineDay1').slideUp('fast');
    $('#timelineDay2').slideDown('fast');
    $('#timelineDay2Button').addClass('selected');
    $('#timelineDay1Button').removeClass('selected');
    // $('.menu_toggle').removeClass('is-clicked');
  })
  $('#timelineDay1Button').bind('click', function () {
    $('#timelineDay2').slideUp('fast');
    $('#timelineDay1').slideDown('fast');
    $('#timelineDay1Button').addClass('selected');
    $('#timelineDay2Button').removeClass('selected');
    // $('.menu_toggle').removeClass('is-clicked');
  })
}

function openFancyBoxes(){

  // Abrir a galeria do evento de 2018
  $('.2018gallery').on('click', function() {
    $.fancybox.open([
      {
        src  : './images/cityhack2018/1.jpg',
        opts : {
          thumb   : './images/cityhack2018/1.jpg'
        }
      },
      {
        src  : './images/cityhack2018/2.jpg',
        opts : {
          thumb   : './images/cityhack2018/2.jpg'
        }
      },
      {
        src  : './images/cityhack2018/3.jpg',
        opts : {
          thumb   : './images/cityhack2018/3.jpg'
        }
      },
      {
        src  : './images/cityhack2018/4.jpg',
        opts : {
          thumb   : './images/cityhack2018/4.jpg'
        }
      },
      {
        src  : './images/cityhack2018/5.jpg',
        opts : {
          thumb   : './images/cityhack2018/5.jpg'
        }
      },
      {
        src  : './images/cityhack2018/6.jpg',
        opts : {
          thumb   : './images/cityhack2018/6.jpg'
        }
      },
      {
        src  : './images/cityhack2018/7.jpg',
        opts : {
          thumb   : './images/cityhack2018/7.jpg'
        }
      },
      {
        src  : './images/cityhack2018/8.jpg',
        opts : {
          thumb   : './images/cityhack2018/8.jpg'
        }
      },
      {
        src  : './images/cityhack2018/9.jpg',
        opts : {
          thumb   : './images/cityhack2018/9.jpg'
        }
      },
      {
        src  : './images/cityhack2018/10.jpg',
        opts : {
          thumb   : './images/cityhack2018/10.jpg'
        }
      },
      {
        src  : './images/cityhack2018/11.jpg',
        opts : {
          thumb   : './images/cityhack2018/11.jpg'
        }
      },
      {
        src  : './images/cityhack2018/12.jpg',
        opts : {
          thumb   : './images/cityhack2018/12.jpg'
        }
      },
      {
        src  : './images/cityhack2018/13.jpg',
        opts : {
          thumb   : './images/cityhack2018/13.jpg'
        }
      },
    ], {
      loop : true,
      thumbs : {
        autoStart : true
      }
    })
  })

  // Abrir a galeria do evento de 2017
  $('.2017gallery').on('click', function() {
    $.fancybox.open([
      {
        src  : './images/cityhack2018/1.jpg',
        opts : {
          thumb   : './images/cityhack2018/1.jpg'
        }
      },
      {
        src  : './images/cityhack2018/2.jpg',
        opts : {
          thumb   : './images/cityhack2018/2.jpg'
        }
      },
      {
        src  : './images/cityhack2018/3.jpg',
        opts : {
          thumb   : './images/cityhack2018/3.jpg'
        }
      },
      {
        src  : './images/cityhack2018/4.jpg',
        opts : {
          thumb   : './images/cityhack2018/4.jpg'
        }
      },
      {
        src  : './images/cityhack2018/5.jpg',
        opts : {
          thumb   : './images/cityhack2018/5.jpg'
        }
      },
      {
        src  : './images/cityhack2018/6.jpg',
        opts : {
          thumb   : './images/cityhack2018/6.jpg'
        }
      },
      {
        src  : './images/cityhack2018/7.jpg',
        opts : {
          thumb   : './images/cityhack2018/7.jpg'
        }
      },
      {
        src  : './images/cityhack2018/8.jpg',
        opts : {
          thumb   : './images/cityhack2018/8.jpg'
        }
      },
      {
        src  : './images/cityhack2018/9.jpg',
        opts : {
          thumb   : './images/cityhack2018/9.jpg'
        }
      },
      {
        src  : './images/cityhack2018/10.jpg',
        opts : {
          thumb   : './images/cityhack2018/10.jpg'
        }
      },
      {
        src  : './images/cityhack2018/11.jpg',
        opts : {
          thumb   : './images/cityhack2018/11.jpg'
        }
      },
      {
        src  : './images/cityhack2018/12.jpg',
        opts : {
          thumb   : './images/cityhack2018/12.jpg'
        }
      },
      {
        src  : './images/cityhack2018/13.jpg',
        opts : {
          thumb   : './images/cityhack2018/13.jpg'
        }
      },
    ],{
      loop : true,
      thumbs : {
        autoStart : true
      }
    })
  })

  // Abrir os vídeos do evento de 2018
  $('.2018teaser').on('click', function() {
    $.fancybox.open([
      {
        src  : 'https://www.youtube.com/watch?v=CuXTIRZVA3w',
      },
      {
        src  : 'https://www.youtube.com/watch?v=Cko711pVWQM',
      },
    ], {
      thumbs : {
        autoStart : true
      }
    })
  })

  // Abrir os vídeos do evento de 2017
  $('.2017teaser').on('click', function() {
    $.fancybox.open([
      {
        src  : 'https://www.youtube.com/watch?v=RexN0GsiIqQ',
      },
      {
        src  : 'https://www.youtube.com/watch?v=Q43mk1_uHK8',
      },
      {
        src  : 'https://www.youtube.com/watch?v=RUXvR0sZU-Y',
      },
    ], {
      thumbs : {
        autoStart : true
      }
    })
  })


}

function smoothScroll(){
    // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // Grab height of fixed header
      // var headHeight = $('#navbar').outerHeight();
      var headHeight = 85;
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - headHeight + 1
          }, 1000, function() {
            // Callback after animation
            // Don't scroll on focus!
              $.fn.focusNoScroll = function(){
                var x = window.scrollX, y = window.scrollY;
                this.focus();
                window.scrollTo(x, y);
                return this; //chainability

              };
              // Must change focus, but don't scroll!
            var $target = $(target);
            $target.focusNoScroll();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focusNoScroll(); // Set focus again
            };
          });
        }
      }
    });
}

function countdownFunction() {
  // Set the date we're counting down to
  var countDownDate = new Date("April 26, 2019 23:59:59").getTime();

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  $('.cityhackDaysLeft').html(days);
  $('.cityhackHoursLeft').html(hours);
  $('.cityhackMinutesLeft').html(minutes);
  $('.cityhackSecondsLeft').html(seconds);

  // If the count down is finished, write some text
  // if (distance < 0) {
  //   clearInterval(x);
  //   $('#cityhackDaysLeft').html("EXPIRED");
  // }

  setTimeout(countdownFunction, 1000);
};
