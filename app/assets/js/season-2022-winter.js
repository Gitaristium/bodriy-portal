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
  if ($('.fixed-parallax-items').length) {
    var vw = $(window).height() / 100;

    $(window).on("scroll", function () {
      let scroll = $(window).scrollTop() / vw;

      if ($('.section-one__orange').length) {
        if (scroll <= 100) {
          $('.section-one__orange.fixed-parallax-items.fixed-parallax-items-h-l').css({
            'left': (-scroll - 17) + 'vw'
          });
          $('.section-one__orange.fixed-parallax-items.fixed-parallax-items-h-r').css({
            'right': (-scroll - 22) + 'vw'
          });
        }
      }
      if ($('.section-one__hurma').length) {
        if (scroll <= 100) {
          $('.section-one__hurma.fixed-parallax-items.fixed-parallax-items-h-l').css({
            'left': (-scroll - 24) + 'vw',
            'top': (-scroll + 52) + 'vw'
          });
          $('.section-one__hurma.fixed-parallax-items.fixed-parallax-items-h-r').css({
            'right': (-scroll - 9) + 'vw',
            // 'top': (-scroll - 5) + 'vw'
          });
        }
      }

      if ($('.wrapper__bg-line').length) {
        let scrollLine = $(document).scrollTop() / ($(document).height() - $(window).height()) * 6000;

        if (scrollLine <= 5500) {
          $('.wrapper__bg-line').css({
            'stroke-dasharray': scrollLine + ' ' + (8000 - scrollLine)
          });
        }
        else {
          $('.wrapper__bg-line').css({
            'stroke-dasharray': (scrollLine + (scrollLine - 5500) * 4) + ' ' + (8000 - (scrollLine + (scrollLine - 5500) * 4))
          });
        }
      }
    });
  }
});