$(document).ready(function(){
  //Abre o menu no mobile
  $(".button-collapse").sideNav();

  //Faz o efeito de slide (metodo slider é do materialze)
  $('.slider').slider({full_width: true});
});

//Funcao para passar para o lado as imagens
function sliderPrev(){
  $('.slider').slider('pause');
  $('.slider').slider('prev');
}
function sliderNext(){
  $('.slider').slider('pause');
  $('.slider').slider('next');
}
