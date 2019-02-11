$( document ).ready(function() {
  showMenu();

  // função para esconder o menu mobile quando é aumentada a largura da página (caso seja superior a 1023 pixeis)
  $(window).resize(function() {
    if ($(this).width() > 1023 && $('.menu_toggle').hasClass('is-clicked')) {
      $('#navbar').removeClass('mobile');
      $('.menu_toggle').removeClass('is-clicked');
    }
  })

  // É adicionada cor gradualmente à navbar durante o scroll da página (o backgroud da navbar por default é transparente)
  $(window).scroll(function() {
    if (!$("#navbar").hasClass('mobile')){
      banner = $("#banner").height() - 100;
      alpha = $(document).scrollTop()/banner;
      $("#navbar").css({'background-color':'rgba(130,37,108,'+ alpha +')'});
    }
  });
});

// função para mostrar/esconder o menu em mobile
function showMenu(){
  $('.menu_toggle').bind('click', function () {
    $('.menu_toggle').toggleClass('is-clicked');
    $('#navbar').toggleClass('mobile');
    if ($("#navbar").hasClass('mobile')) {
      $("#navbar").css({'background-color':'black'});
    } else {
      banner = $("#banner").height() - 100;
      alpha = $(document).scrollTop()/banner;
      if (alpha > 1) {
        $("#navbar").css({'background-color':'rgba(130,37,108,1)'});
      } else {
        $("#navbar").css({'background-color':'rgba(130,37,108,'+ alpha +')'});
      }

    }
  });
}
