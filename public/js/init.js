$(document).ready(function(){
  //Abre o menu no mobile
  $(".button-collapse").sideNav();

  //Faz o efeito de slide (metodo slider é do materialze)
  $('.slider').slider({full_width: true});

  //Inicia o select
  $('select').material_select();
});

//Funcao para passar para o lado as imagens js puro
function sliderPrev(){
  $('.slider').slider('pause');
  $('.slider').slider('prev');
}
function sliderNext(){
  $('.slider').slider('pause');
  $('.slider').slider('next');
}
