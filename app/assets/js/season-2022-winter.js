if (window.location.pathname == '/season.php') {
  window.history.replaceState(null, null, '/');
}
Cookies.set('season', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'season', { path: '' });
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
        if (scroll <= 70) {
          $('.section-one__orange.fixed-parallax-items.fixed-parallax-items-h-l').css({
            'transform': 'translateX(-' + scroll + '%)',
            'transition': '0s 0s'
          });
          $('.section-one__orange.fixed-parallax-items.fixed-parallax-items-h-r').css({
            'transform': 'translateX(' + scroll + '%)',
            'transition': '0s 0s'
          });
        }
      }
      if ($('.section-one__hurma').length) {
        if (scroll <= 100) {
          $('.section-one__hurma.fixed-parallax-items.fixed-parallax-items-h-l').css({
            'transform': 'translate(-' + scroll + '%, -' + scroll + '%)',
            'transition': '0s 0s'
          });
          $('.section-one__hurma.fixed-parallax-items.fixed-parallax-items-h-r').css({
            'transform': 'translateX(' + scroll + '%)',
            'transition': '0s 0s'
          });
        }
      }
    });
  }

  // линия при скролле на главной
  if ($('.wrapper__line').length) {
    $(window).on("scroll", function () {
      let scrollLine = $(document).scrollTop() / ($(document).height() - $(window).height()) * 2000;

      if (scrollLine <= 200) {
        $('.wrapper__line--1 path').css({
          'stroke-dasharray': (scrollLine * 8.25) + ' ' + (1650 - (scrollLine * 8.25))
        });
      }
      if (scrollLine > 500 && scrollLine <= 900) {
        $('.wrapper__line--2 path').css({
          'stroke-dashoffset': -1400 + ((scrollLine - 500) * 3.5)
        });
      }
      if (scrollLine > 1500) {
        $('.wrapper__line--3 path').css({
          'stroke-dasharray': ((scrollLine - 1500) * 8) + ' ' + (3200 - ((scrollLine - 1500) * 8))
        });
      }
    });
  }

  // линия при скролле на страницы хурмы
  if ($('.wrapper__bg-line').length) {
    $(window).on("scroll", function () {
      let scrollLine = $(document).scrollTop() / ($(document).height() - $(window).height()) * 6000;

      if (scrollLine <= 5500) {
        $('.wrapper__bg-line').css({
          'stroke-dasharray': scrollLine + ' ' + (8000 - scrollLine)
        });
      }
      else {
        $('.wrapper__bg-line').css({
          'stroke-dasharray': (scrollLine + (scrollLine - 5500) * 8) + ' ' + (8000 - (scrollLine + (scrollLine - 5500) * 8))
        });
      }
    });
  }

  // отправка историй
  if ($('#share-story').length) {

    // подсчет симовлов в textarea
    $("#share-story textarea").keyup(function (e) {
      if (this.value.length > 0) {
        $("#share-story .textarea-nums").css({
          'opacity': '1'
        });
      }
      else {
        $("#share-story .textarea-nums").css({
          'opacity': '0'
        });
      }
      $("#share-story .textarea-nums .calc").text(this.value.length)
    });

    // получаем историю из пулла с сервера
    $.ajax({
      url: '/season/info-get.php',              /* Куда отправить запрос */
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
        $("#modal-story .modal-story__text.story").html(data)
      }
    });


    // анимируем появление модалки
    $("#share-story").submit(function (e) {
      e.preventDefault();
      $("#round").addClass('active');
      $("#modal-story").addClass('active');
      setTimeout(() => {
        $("body").addClass('position-fixed');
        $("#modal-story").addClass('white');
      }, 7000);

      console.log('====')
      console.log($("#share-story textarea").val())
      // отправляем историю на сервер
      var story = $("#share-story textarea").val();
      $.ajax({
        url: '/season/info-post.php',             /* Куда отправить запрос */
        method: 'get',                            /* Метод запроса (post или get) */
        dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
        // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
        data: { story: story },               /* Данные передаваемые в массиве */
        // error: function (data, exception) {
        //   if (data.status === 0) {
        //     alert('info-post.php - Not connect. Verify Network.');
        //   } else if (data.status == 404) {
        //     alert('info-post.php - Requested page not found (404).');
        //   } else if (data.status == 500) {
        //     alert('info-post.php - Internal Server Error (500).');
        //   } else if (exception === 'parsererror') {
        //     alert('info-post.php - Requested JSON parse failed.');
        //   } else if (exception === 'timeout') {
        //     alert('info-post.php - Time out error.');
        //   } else if (exception === 'abort') {
        //     alert('info-post.php - Ajax request aborted.');
        //   } else {
        //     alert('info-post.php - Uncaught Error. ' + data.responseText);
        //   }
        // },
        success: function () {
          // console.log('данные отправлены');
        }
      });

    });
  };
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