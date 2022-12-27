ym(83929834, 'hit', '/coffee?utm_medium=qr', {
  params: {
    title: 'Свари свой бодрый кофе',
    //referer: '/coffee?utm_medium=qr'
  }
});


Cookies.set('coffee', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'coffee', { path: '' });
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


  // var width = $(window).width() / 2;
  // $('#arrow').swipe({
  //   swipeStatus: function (event, phase, direction, distance, duration) {

  //     if (direction == 'right') {
  //       if (phase == "move") {
  //         $('#arrow-box').css({
  //           // 'transform': 'translateX(' + distance / 2.5 + '%)',
  //           'transform': 'translateX(' + distance * 1.5 + 'px)',
  //           'transition': 'transform 0s'
  //         });
  //         $('#quest').css({
  //           // 'transform': 'translateX(' + distance / 7 + '%)',
  //           'transform': 'translateX(' + distance / 4 + 'px)',
  //           'transition': 'transform 0s'
  //         });
  //         $('.section--one').css({
  //           // 'transform': 'translateX(-' + distance / 5 + '%)',
  //           'transform': 'translateX(-' + distance / 2 + 'px)',
  //           'transition': 'transform 0s'
  //         });
  //         $('#swipe-img').css({
  //           'display': 'none'
  //         });
  //         // console.log(phase);
  //         // console.log(distance);
  //       }


  //       if (phase == "cancel") {
  //         $('#arrow-box').css({
  //           'transform': 'translateX(0)',
  //           'transition': 'transform 0.3s'
  //         });
  //         $('#quest').css({
  //           'transform': 'translateX(0)',
  //           'transition': 'transform 0.3s'
  //         });
  //         $('.section--one').css({
  //           'transform': 'translateX(0)',
  //           'transition': 'transform 0.3s'
  //         });
  //         $('#swipe-img').css({
  //           'display': 'block'
  //         });
  //         // console.log(phase);
  //         // console.log('cancel');
  //       }

  //       if (phase == "end") {
  //         $('#arrow-box').css({
  //           'transform': 'translateX(220%)',
  //           'transition': 'transform 0.5s'
  //         });
  //         $('#quest').css({
  //           'transform': 'translateX(80%)',
  //           'opacity': '0',
  //           'transition': 'transform 0.5s, opacity 0.5s'
  //         });
  //         $('.section--one').css({
  //           'transform': 'translateX(-120%)',
  //           'transition': 'transform 0.5s'
  //         });
  //         $('.section--one').removeClass('active');
  //         $('.section--two').addClass('active');
  //       }
  //     }

  //   },
  //   threshold: width
  // });

  $(".btn").click(function (e) {
    e.preventDefault();
    $('.btn').css({
      'opacity': '0',
      'transition': 'transform 0.5s, opacity 1s'
    });
    setTimeout(() => {
      $('#arrow-box').css({
        'transform': 'translateX(220%)',
        'transition': 'transform 1.5s'
      });
      $('#quest').css({
        'transform': 'translateX(80%)',
        'opacity': '0',
        'transition': 'transform 1.5s, opacity 1.5s'
      });
      $('.section--one').css({
        'transform': 'translateX(-120%)',
        'transition': 'transform 1.5s'
      });
    }, 500);
    setTimeout(() => {
      $('.section--one').removeClass('active');
      $('.section--two').addClass('active');
    }, 2000);
  });

});