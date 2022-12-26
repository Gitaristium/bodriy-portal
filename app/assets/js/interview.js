var redirect = Cookies.get('redirect');
if (redirect == 'y') {
  ym(83929834, 'hit', '/interview?utm_medium=qr', {
    params: {
      title: 'Бодрый опрос',
      //referer: '/interview?utm_medium=qr'
    }
  });
  Cookies.set('redirect', 'n', {
    expires: 7,
    path: '/'
  });
}
else {
  ym(83929834, 'hit', '/interview', {
    params: {
      title: 'Бодрый опрос',
      //referer: '/interview?utm_medium=qr'
    }
  });
}

window.history.replaceState(null, null, '/');
Cookies.set('curentPage', 'interview', { path: '' });
Cookies.set('interview', 'y', { expires: 7, path: '' });
// console.log(document.cookie);

$(document).ready(function () {

  // модалки - jQuery
  $('.form__input').on('keyup', function () {
    var $city = $('#data-city'),
      city = $city.val();
    var $address = $('#data-address'),
      address = $address.val();
    if (city.length >= 1 && address.length >= 1) {
      $("#btn2step").css({
        'transform': 'translateY(0)',
        'opacity': '1',
        'pointer-events': 'all'
      });
    }
    else {
      $("#btn2step").css({
        'transform': 'translateY(100%)',
        'opacity': '0',
        'pointer-events': 'none'
      });
    }
  });

  $(".rate__input").change(function () {
    if (
      $('.rate__input[name="rate-coffee"]').is(':checked') &&
      $('.rate__input[name="rate-service"]').is(':checked') &&
      $('.rate__input[name="rate-barista"]').is(':checked') &&
      $('.rate__input[name="rate-cafe"]').is(':checked') &&
      $('.rate__input[name="rate-time"]').is(':checked')
    ) {
      $("#btn-send").addClass('active');
    } else {
      $("#btn-send").removeClass('active');
    }
  });

  $("#data-form").submit(function () { return false; })

  $("#form").keydown(function (event) {
    if (event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

  $("#btn2step").click(function (e) {
    e.preventDefault();
    $("#modal").scrollTop(0);
    $("#modal").addClass('active');
    $("#city").val($("#data-city").val());
    $("#address").val($("#data-address").val());
  });

  $("#btn-close").click(function (e) {
    e.preventDefault();
    $(".modal").removeClass('active');
    var $city = $('#data-city'),
      city = $city.val();
    var $address = $('#data-address'),
      address = $address.val();
    if (city.length >= 1 && address.length >= 1) {
      $("#btn2step").css({
        'transform': 'translateY(0)',
        'opacity': '1',
        'pointer-events': 'all'
      });
    }
    else {
      $("#btn2step").css({
        'transform': 'translateY(100%)',
        'opacity': '0',
        'pointer-events': 'none'
      });
    }
  });
});