$( document ).ready(function() {
  showMenu();
  checkScrollFromTop();
  openGallery();
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

function openGallery(){
  lightGallery(document.getElementById('lightgallery'), {
    download: false,
    thumbnail: true,
  });
}
