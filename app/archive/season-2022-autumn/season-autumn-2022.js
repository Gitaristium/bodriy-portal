window.history.replaceState(null, null, '/');
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

  setTimeout(() => {



    var width = $(window).width() / 4;
    var slide = 1;
    $('#section-one').swipe({
      swipeStatus: function (event, phase, direction, distance, duration) {

        var TX = distance / (width * 4 / 100);

        if (phase == "move") {
          if (slide == 1) {
            if (direction == 'left') {
              $('.slider-title').css({
                'transform': 'translateX(-' + TX + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(' + (-75 + TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
            // if (direction == 'right') {
            //   $('.slider-title').css({
            //     'transform': 'translateX(' + TX + '%)',
            //     'transition': 'transform 0s'
            //   });
            // }
          }
          if (slide == 2) {
            if (direction == 'left') {
              $('.slider-title').css({
                'transform': 'translateX(-' + (102 + TX) + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(' + (-50 + TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
            if (direction == 'right') {
              $('.slider-title').css({
                'transform': 'translateX(' + (-102 + TX) + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(-' + (50 + TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
          }
          if (slide == 3) {
            if (direction == 'left') {
              $('.slider-title').css({
                'transform': 'translateX(-' + (217 + TX) + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(' + (-25 + TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
            if (direction == 'right') {
              $('.slider-title').css({
                'transform': 'translateX(' + (-217 + TX) + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(-' + (25 + TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
          }
          if (slide == 4) {
            // if (direction == 'left') {
            //   $('.slider-title').css({
            //     'transform': 'translateX(-' + (319 + TX) + '%)',
            //     'transition': 'transform 0s'
            //   });
            // }
            if (direction == 'right') {
              $('.slider-title').css({
                'transform': 'translateX(' + (-319 + TX) + '%)',
                'transition': 'transform 0s'
              });
              $('.slider-text').css({
                'transform': 'rotate(5.89deg) translateX(-' + (TX / 4) + '%)',
                'transition': 'transform 0s'
              });
            }
          }
        }
        // console.log(phase);
        // console.log(distance);

        if (phase == "cancel") {
          if (slide == 1) {
            $('.slider-title').css({
              'transform': 'translateX(0)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-75%)',
              'transition': 'transform 0.3s'
            });
          }
          if (slide == 2) {
            $('.slider-title').css({
              'transform': 'translateX(-102%)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-50%)',
              'transition': 'transform 0.3s'
            });
          }
          if (slide == 3) {
            $('.slider-title').css({
              'transform': 'translateX(-217%)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-25%)',
              'transition': 'transform 0.3s'
            });
          }
          if (slide == 4) {
            $('.slider-title').css({
              'transform': 'translateX(-319%)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(0)',
              'transition': 'transform 0.3s'
            });
          }
          // console.log(phase);
          // console.log('cancel');
        }

        if (phase == "end") {
          if (slide == 4 && direction == 'left') {
            $('.slider-title').css({
              'transform': 'translateX(-319%)',
              'transition': 'transform 0.5s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(0)',
              'transition': 'transform 0.5s'
            });
          }
          if (slide == 3 && direction == 'left') {
            $('.slider-title').css({
              'transform': 'translateX(-319%)',
              'transition': 'transform 0.5s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(0)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-4').addClass('show');
            $('.arrows__img.r').addClass('hide');

            slide = 4;
          }
          if (slide == 2 && direction == 'left') {
            $('.slider-title').css({
              'transform': 'translateX(-217%)',
              'transition': 'transform 0.5s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-25%)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-3').addClass('show');
            slide = 3;
          }
          if (slide == 1 && direction == 'left') {
            $('.slider-title').css({
              'transform': 'translateX(-102%)',
              'transition': 'transform 0.5s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-50%)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-2').addClass('show');
            $('.arrows__img.l').removeClass('hide');
            $('.arrows__img').removeClass('start');
            slide = 2;
          }
          if (slide == 1 && direction == 'right') {
            $('.slider-title').css({
              'transform': 'translateX(0)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-75%)',
              'transition': 'transform 0.5s'
            });
          }
          if (slide == 2 && direction == 'right') {
            $('.slider-title').css({
              'transform': 'translateX(0)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-75%)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-1').addClass('show');
            $('.arrows__img.l').addClass('hide');
            slide = 1;
          }
          if (slide == 3 && direction == 'right') {
            $('.slider-title').css({
              'transform': 'translateX(-102%)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-50%)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-2').addClass('show');
            slide = 2;
          }
          if (slide == 4 && direction == 'right') {
            $('.slider-title').css({
              'transform': 'translateX(-217%)',
              'transition': 'transform 0.3s'
            });
            $('.slider-text').css({
              'transform': 'rotate(5.89deg) translateX(-25%)',
              'transition': 'transform 0.5s'
            });
            $('.drink').removeClass('show');
            $('.drink-3').addClass('show');
            $('.arrows__img.r').removeClass('hide');
            slide = 3;
          }
          // console.log(phase);
          // console.log('end');
          // console.log(slide);
        }

      },
      allowPageScroll: "vertical",
      threshold: width
    });

  }, 3000);

});