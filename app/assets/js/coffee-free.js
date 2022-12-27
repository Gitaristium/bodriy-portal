window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);

}

$(document).ready(function () {
  $('html, body').animate({ scrollTop: '0px' }, 100);
  $('jdiv').remove();
  $('#jivo-iframe-container').remove();
  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);
  setTimeout(() => {
    $("#btn-play").addClass('pointer-events')
  }, 4000);



  //определяем геолокацию для занесения в таблицу результатов на сайте
  var playerCity;
  // $.get("https://ipinfo.io", function (response) {
  //   // console.log("IP: " + response.ip);
  //   // console.log("Location: " + response.city + ", " + response.region);
  //   // console.log(JSON.stringify(response, null, 4));
  //   // console.log(response);
  //   playerCity = response.city;
  // }, "jsonp");
  // // var playerCity = cityPlayer(city);



  var playerCity;
  $.ajax({
    url: '/coffee-free/info-ip.php',         /* Куда отправить запрос */
    method: 'get',                            /* Метод запроса (post или get) */
    dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
    // data: { text: 'Текст' },               /* Данные передаваемые в массиве */
    error: function (data, exception) {
      if (data.status === 0) {
        alert('info-ip.php - Not connect. Verify Network.');
      } else if (data.status == 404) {
        alert('info-ip.php - Requested page not found (404).');
      } else if (data.status == 500) {
        alert('info-ip.php - Internal Server Error (500).');
      } else if (exception === 'parsererror') {
        alert('info-ip.php - Requested JSON parse failed.');
      } else if (exception === 'timeout') {
        alert('info-ip.php - Time out error.');
      } else if (exception === 'abort') {
        alert('info-ip.php - Ajax request aborted.');
      } else {
        alert('info-ip.php - Uncaught Error. ' + data.responseText);
      }
    },
    success: function (data) {
      // console.log('данные отправлены');
      playerCity = data['city'];
      // console.log('1: ' + playerCity);
    }
  });

  // console.log(document.cookie);
  var qr = Cookies.get('qr');
  if (qr == 'y') {  //если было сканирование

    // Cookies.set('qr', 'n', {path: '/coffee-free' });
    Cookies.remove('winner', { path: '/coffee-free' });
    // console.log('скинули куки qr');
    // console.log(document.cookie);

  } else {  //если просто обновил сттаницу

    var winner = Cookies.get('winner');

    if (winner == 'win') {  //если уже выйграл
      // console.log('выйграл');
      $('.section-one').addClass('hide');
      $('.section-two').addClass('hide');
      setTimeout(() => {
        $('.section-result--win').addClass('active');
      }, 1000);
    }
    else {
      if (winner == 'lose') { //если проиграл
        // console.log('проиграл');
        $('.section-one').addClass('hide');
        $('.section-two').addClass('hide');
        setTimeout(() => {
          $('.section-result--lose').addClass('active');
        }, 1000);
      }
      else {  //если пришел по ссылке
        // console.log('пришел по ссылке');
        $('.section-one').addClass('hide');
        $('.section-two').addClass('hide');
        setTimeout(() => {
          $('.section-result--stop').addClass('active');
        }, 1000);
      }
    }

  }

  $("#btn-play").click(function (e) {
    e.preventDefault();
    $('.section-one').addClass('hide');
    $('.section-two').addClass('active');
    // $(".play-button").addClass('show');
    setTimeout(() => {
      $(".play-button").addClass('pointer-events-all');
    }, 3000);
  });

  $("#btn-rules").click(function (e) {
    e.preventDefault();
    $('.section-rules').addClass('active');
    $('body').addClass('pointer-events-nones');
    $('html, body').animate({ scrollTop: '0px' }, 0);
    ym(83929834, 'reachGoal', 'read_rules');
  });
  $("#btn-rules-close").click(function (e) {
    e.preventDefault();
    $('body').removeClass('pointer-events-none');
    $('.section-rules').removeClass('active');
    $('html, body').animate({ scrollTop: '0px' }, 0);
    setTimeout(() => {
      $('.section-rules').animate({ scrollTop: '0px' }, 0);
    }, 500);
  });

  $(".pictures-block__img").click(function (e) {
    e.preventDefault();
    $('#btn-play').addClass('animate__headShake');
    setTimeout(() => {
      $('#btn-play').removeClass('animate__headShake');
    }, 500);
  });

  $(".play-button").click(function (e) {
    e.preventDefault();
    Cookies.set('qr', 'n', { path: '/coffee-free' });
    $(this).addClass('click');
    $(".play-button").not(this).addClass('block');

    // var arrayNumber = [5, 3, 4, 6];
    // console.log(arrayNumber);

    $.ajax({
      url: '/coffee-free/info-get.php',         /* Куда отправить запрос */
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



        // var arrayStringNumber = data['array'];
        // var winNumber = arrayNumber[data['array']];
        var winNumber = data['array'];

        // console.log('выигрышный номер: ' + winNumber);
        var playNumber = data['player'];
        // console.log('текущий номер: ' + playNumber);
        // console.log(playerCity);
        //если текущий номер меньше призового
        if (playNumber != winNumber) {
          // console.log('проиграл');
          Cookies.set('winner', 'lose', { path: '/coffee-free' });
          $(".play-button.click").addClass('lose');
          setTimeout(() => {
            $('.section-two').addClass('hide');
          }, 2000);
          setTimeout(() => {
            $('.section-result--lose').addClass('active');
          }, 3500);

          playNumber++;
          // console.log('новый номер игрока для занесения в базу: ' + playNumber);

          //отправляем новые данные на сервер
          $.ajax({
            url: '/coffee-free/info-post.php',        /* Куда отправить запрос */
            method: 'get',                            /* Метод запроса (post или get) */
            dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
            // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
            data: { newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
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

        }
        //если текущий номер совпал с призовым числом
        else {
          // console.log('выиграл');
          Cookies.set('winner', 'win', { path: '/coffee-free' });
          $(".play-button.click").addClass('win');
          setTimeout(() => {
            $('.section-two').addClass('hide');
          }, 2000);
          setTimeout(() => {
            $('.section-result--win').addClass('active');
          }, 3500);

          playNumber = 1;
          // if (arrayStringNumber < 3) {
          //   arrayStringNumber++;
          // }
          // else {
          //   arrayStringNumber = 0;
          // }
          // console.log('новый номер игрока для занесения в базу: ' + playNumber);
          // console.log('новый номер массива для занесения в базу: ' + arrayStringNumber);


          //отправляем новые данные на сервер
          $.ajax({
            url: '/coffee-free/info-post.php',         /* Куда отправить запрос */
            method: 'get',                            /* Метод запроса (post или get) */
            dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
            // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'win' },               /* Данные передаваемые в массиве */
            data: { newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'win' },               /* Данные передаваемые в массиве */
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


        }


      }
    });
    ym(83929834, 'reachGoal', 'payed_promo');

  });
});



// window.onbeforeunload = function (e) {
//   return "Обновление или закрытие страницы не позволит Вам вернуться к участию в акции!";
// }
