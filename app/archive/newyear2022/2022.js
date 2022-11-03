// window.history.replaceState(null, null, '/');
// Cookies.set('2022', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', '2022', { path: '' });


window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);
  setTimeout(() => {
    document.body.classList.add('active');
  }, 6000);
}

$(document).ready(function () {
  $('html, body').animate({ scrollTop: '0px' }, 100);

  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);

  var height = $(".section__img.head").offset().top;
  $(window).scroll(function (e) {
    var scroll = $(window).scrollTop();
    if (scroll >= height) {
      $(".section__text-10 ").addClass('active');
    }
    else {
      $(".section__text-10 ").removeClass('active');
    }
  });

});