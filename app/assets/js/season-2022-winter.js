// window.history.replaceState(null, null, '/');
Cookies.set('season', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'season', { path: '' });
console.log(document.cookie);

window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);
}

$(document).ready(function () {
  $('html, body').animate({ scrollTop: '0px' }, 100);

  // setTimeout(() => {
  //   $('jdiv').remove();
  //   $('#jivo-iframe-container').remove();
  // }, 1000);

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



  //паралакс при скролле
  if ('.fixed-parallax-items') {
    var vw = $(window).height() / 100;

    $(window).on("scroll", function () {
      let scroll = $(window).scrollTop() / vw;

      if (scroll <= 100) {
        $('.fixed-parallax-items.fixed-parallax-items-h-l').css({
          'left': (-scroll - 17) + 'vw'
        });
        $('.fixed-parallax-items.fixed-parallax-items-h-r').css({
          'right': (-scroll - 22) + 'vw'
        });
      }
    });
  }


});