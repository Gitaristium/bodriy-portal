var redirect = Cookies.get('redirect');
if (redirect == 'y') {
  ym(83929834, 'hit', '/downloads?utm_medium=qr', {
    params: {
      title: 'Скачивай',
      //referer: '/downloads?utm_medium=qr'
    }
  });
  Cookies.set('redirect', 'n', {
    expires: 7,
    path: '/'
  });
}
else {
  ym(83929834, 'hit', '/downloads', {
    params: {
      title: 'Скачивай',
      //referer: '/downloads?utm_medium=qr'
    }
  });
}

window.history.replaceState(null, null, '/');
Cookies.set('downloads', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'downloads', { path: '' });
// console.log(document.cookie);


$(document).ready(function () {

  // модалки - jQuery
  $(".section__link--wallpaper").click(function (e) {
    // e.preventDefault();
    $("#modal-wallpaper").addClass('active').scrollTop(0);
    $("#black-cup").removeClass('deactive').addClass('active');
  });
  $("#modal-wallpaper").find('.back').click(function (e) {
    // e.preventDefault();
    $('html, body').animate({ scrollTop: '0px' }, 0);
    $("#modal-wallpaper").removeClass('active');
    $("#black-cup").removeClass('active').addClass('deactive');
  });

  $(".section__link--stickers").click(function (e) {
    // e.preventDefault();
    $("#modal-stickers").addClass('active').scrollTop(0);
    $("#black-cup").removeClass('deactive').addClass('active');
  });
  $("#modal-stickers").find('.back').click(function (e) {
    // e.preventDefault();
    $('html, body').animate({ scrollTop: '0px' }, 0);
    $("#modal-stickers").removeClass('active');
    $("#black-cup").removeClass('active').addClass('deactive');
  });

  $(".section__link--challenges").click(function (e) {
    // e.preventDefault();
    $("#modal-challenges").addClass('active').scrollTop(0);
    $("#black-cup").removeClass('deactive').addClass('active');
  });
  $("#modal-challenges").find('.back').click(function (e) {
    // e.preventDefault();
    $('html, body').animate({ scrollTop: '0px' }, 0);
    $("#modal-challenges").removeClass('active');
    $("#black-cup").removeClass('active').addClass('deactive');
  });

  $(".section__link--recipes").click(function (e) {
    // e.preventDefault();
    $("#modal-recipes").addClass('active').scrollTop(0);
    $("#black-cup").removeClass('deactive').addClass('active');
  });
  $("#modal-recipes").find('.back').click(function (e) {
    // e.preventDefault();
    $('html, body').animate({ scrollTop: '0px' }, 0);
    $("#modal-recipes").removeClass('active');
    $("#black-cup").removeClass('active').addClass('deactive');
  });

  //слайдер
  setTimeout(function () {
    $('.slider-big').slick({
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-small',
      arrows: false,
      dots: false,
      infinite: true,
      fade: true,
      cssEase: 'linear',
      lazyLoad: 'ondemand',
      swipe: true,
      touchThreshold: 10,
      touchMove: true
    });
    $('.slider-small').slick({
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-big',
      arrows: false,
      dots: false,
      infinite: true,
      lazyLoad: 'ondemand',
      centerMode: true,
      focusOnSelect: true,
      swipe: false,
      touchThreshold: 10,
      touchMove: true
    });
  }, 1500);

});