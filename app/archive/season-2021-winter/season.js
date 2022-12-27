
// Cookies.set('season', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', 'season', { path: '' });
// console.log(document.cookie);

window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);
}

$(document).ready(function () {
  $('html, body').animate({ scrollTop: '0px' }, 100);

  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);

  // модалки - jQuery
  $("#btn-n").click(function (e) {
    e.preventDefault();
    $("#modal-no").addClass('active');
    $("body").attr('style', 'overflow: hidden');
  });

  $("#btn-y").click(function (e) {
    e.preventDefault();
    $("#modal-yes").addClass('active');
    $("body").attr('style', 'overflow: hidden');
  });

  $(".btn-close").click(function (e) {
    e.preventDefault();
    $(".modal").removeClass('active');
    $("body").attr('style', 'overflow: auto');
  });

  if ($("#span-2").hasClass('active')) {
    $(" #img-2-1, #img-2-2").addClass('active');
  }


  //появление картинок при скролле
  $("#span-2, #span-3,#span-4,  #img-2-1, #img-2-2, #img-3, #img-4").removeClass('active');
  setTimeout(() => {
    $("#span-2, #span-3,#span-4,  #img-2-1, #img-2-2, #img-3, #img-4").removeClass('active');
  }, 1000);

  var width = $(window).width() / 100;
  $(window).scroll(function (e) {
    var scroll = $(window).scrollTop() / width;
    if (scroll >= 90) {
      $("#span-2, #img-2-1, #img-2-2").addClass('active');
    }
    if (scroll >= 170) {
      $("#span-3, #img-3").addClass('active');
    }
    if (scroll >= 250) {
      $("#span-4, #img-4").addClass('active');
    }
  });
});