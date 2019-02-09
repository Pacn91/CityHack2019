$( document ).ready(function() {
  showMenu();
});

$(window).resize(function() {
  if ($(this).width() > 1023 && $('.menu_toggle').hasClass('is-clicked')) {
    $('#navbar').removeClass('mobile');
    $('.menu_toggle').removeClass('is-clicked');
  }
})

function showMenu(){
  $('.menu_toggle').bind('click', function () {
    $('.menu_toggle').toggleClass('is-clicked');
    $('#navbar').toggleClass('mobile');
  });
}
