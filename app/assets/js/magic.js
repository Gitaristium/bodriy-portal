var redirect = Cookies.get('redirect');
if (redirect == 'y') {
  ym(83929834, 'hit', '/magic?utm_medium=qr', {
    params: {
      title: 'Новогодняя магия',
      //referer: '/magic?utm_medium=qr'
    }
  });
  Cookies.set('redirect', 'n', {
    expires: 7,
    path: '/'
  });
}
else {
  ym(83929834, 'hit', '/magic', {
    params: {
      title: 'Новогодняя магия',
      //referer: '/magic?utm_medium=qr'
    }
  });
}

window.history.replaceState(null, null, '/');
Cookies.set('magic', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'magic', { path: '' });
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


  // кнопка УЗНАТЬ
  $('.section-two__btn.start').click(function (e) {
    e.preventDefault();
    $('.section-two__field').addClass('flip');
    setTimeout(() => {
      $(this).css({ 'opacity': '0' });
    }, 150);
    setTimeout(() => {
      $('.section-two__field-desc').css({ 'display': 'none' });
      $('.section-two__field-text').css({ 'display': 'block' });
    }, 500);
    setTimeout(() => {
      $('.section-two__field-text').addClass('shadow');
    }, 550);
    setTimeout(() => {
      $(this).css({ 'display': 'none' });
      $('.section-two__btn.share').css({ 'display': 'block', 'opacity': '0' });
      $('.section-two__field').addClass('shadow');
    }, 1000);
    setTimeout(() => {
      $(this).css({ 'display': 'none' });
      $('.section-two__btn.share').css({ 'opacity': '1' });
    }, 1100);
  });

  // кнопка ПОДЕЛИТЬСЯ
  $('.section-two__btn.share').click(function (e) {
    e.preventDefault();
    setTimeout(() => {
      if (navigator.share) {
        navigator.share({
          title: 'Я узнал, что меня ждет в 2023!',
          text: 'Я узнал, что меня ждет в 2023! Переходи по ссылке и смотри своё предсказание',
          url: '/magic.php'
        }).then(() => {
          // alert('Thanks for sharing!');
        })
          .catch(console.error);
      } else {
        // alert('Web Share API не поддерживается');
        $("body").append('<input id="input-tmp" type="text">');
        var link = 'https://portal.bodryi-den.ru/magic.php';

        $('#input-tmp').val(link);
        $('#input-tmp').select();
        document.execCommand("copy");
        $('#input-tmp').remove();
        $('.modal2').addClass('active');
        setTimeout(() => {
          location.reload();
        }, 5000);
      }
    }, 150);
  });


  // получаем пожелание с сервара
  $.ajax({
    url: '/magic-get.php',              /* Куда отправить запрос */
    method: 'get',                            /* Метод запроса (post или get) */
    dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
    // data: { text: 'Текст' },               /* Данные передаваемые в массиве */
    error: function (data, exception) {
      if (data.status === 0) {
        alert('info-get.php - Not connect. Verify Network.');
      } else if (data.status == 404) {
        alert('info-get.php - Requested page not found (404).');
      } else if (data.status == 500) {
        alert('info-get.php - Internal Server Error (500).');
      } else if (exception === 'parsererror') {
        alert('info-get.php - Requested JSON parse failed.');
      } else if (exception === 'timeout') {
        alert('info-get.php - Time out error.');
      } else if (exception === 'abort') {
        alert('info-get.php - Ajax request aborted.');
      } else {
        alert('info-get.php - Uncaught Error. ' + data.responseText);
      }
    },
    success: function (data) {                /* функция которая будет выполнена после успешного запроса.  */
      // console.log(data);                      /* В переменной data содержится ответ от index.php. */
      $(".section-two__field-text").html(decodeURIComponent(data))
    }
  });

});
// измерение длины path в SVG
// var nS = 'http://www.w3.org/2000/svg';
// var svgPaths = document.getElementsByTagNameNS(nS, 'path');

// for (var x = 0; x < svgPaths.length; x++) {
//   var path = svgPaths[x];
//   var pathDimensions = path.getTotalLength();
//   path.style.strokeDasharray = pathDimensions;
//   path.style.strokeDashoffset = pathDimensions;
// };