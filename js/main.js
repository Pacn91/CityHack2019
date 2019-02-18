$( document ).ready(function() {
  showMenu();
  checkScrollFromTop();
  openGallery();
  fitText();
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
  $(".previousEditionsTitle").fitText(1.1, { minFontSize: '50px', maxFontSize: '95px' });
}

function openGallery(){

  $('#2018gallery').on('click', function() {
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
  $('#2017gallery').on('click', function() {
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
}
