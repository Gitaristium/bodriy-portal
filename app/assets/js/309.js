$(document).ready(function () {
  $('body').append('<div class="modal-309"><div class= "modal-309__inner"><picture><source srcset="https://portal.bodryi-den.ru/assets/img/309.webp" type="image/webp"><img class="modal-309__img" src="https://portal.bodryi-den.ru/assets/img/309.png"></picture><div class="modal-309__text"><span>КАК</span><span>ТАМ</span><span>РЯБИНА?</span></div></div></div>');


  setTimeout(() => {
    $('.modal-309').addClass('show');
  }, 6000);

  setTimeout(() => {
    $('.modal-309').removeClass('show');
  }, 9000);

});