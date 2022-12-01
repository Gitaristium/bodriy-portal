$(document).ready(function () {
  window.onload = function () {
    window.scrollTo(0, 0);
    setTimeout(() => {
      window.scrollTo(0, 0);
      document.body.classList.add('ready');
    }, 1000);
  }

  // получаем истории из пулла с сервера
  function getInfoArchive() {
    $.ajax({
      url: '/season/data/get-archive.php',              /* Куда отправить запрос */
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
        // $("#modal-story .modal-story__text.story").html(data)

        $.each(data, function (index, elem) {
          $('.tab--one .flex').append('\
            <div data-id="' + elem.ID + '" class="flex__item">\
              <div class="flex__item-text">\
              ' + elem.DETAIL_TEXT + '\
              </div>\
              <div class="flex__item-buttons">\
                <button data-id="' + elem.ID + '" class="flex__item-btn flex__item-btn--public">опубликовать</ >\
                <button data-id="' + elem.ID + '" class="flex__item-btn flex__item-btn--delete">удалить</button>\
              </div>\
            </div>'
          );
        });
      }
    });
  };
  getInfoArchive();

  function getInfoActive() {
    $.ajax({
      url: '/season/data/get-active.php',              /* Куда отправить запрос */
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
        // $("#modal-story .modal-story__text.story").html(data)

        $.each(data, function (index, elem) {
          $('.tab--two .flex').append('\
            <div data-id="' + elem.ID + '" class="flex__item">\
              <div class="flex__item-text">\
              ' + elem.DETAIL_TEXT + '\
              </div>\
              <div class="flex__item-buttons">\
                <button data-id="' + elem.ID + '" class="flex__item-btn flex__item-btn--unpublic">в архив</ >\
                <button data-id="' + elem.ID + '" class="flex__item-btn flex__item-btn--delete">удалить</button>\
              </div>\
            </div>'
          );
        });
      }
    });
  };


  //вкладки
  $(".nav__link--one").click(function (e) {
    e.preventDefault();
    // $('html, body').animate({ scrollTop: '0px' }, 0);
    $(this).addClass('active');
    $(".tab--one").addClass('active');
    $(".tab--two").removeClass('active');
    $(".nav__link--two").removeClass('active');
    $('.tab--one .flex__item').remove();
    getInfoArchive();
  });
  $(".nav__link--two").click(function (e) {
    e.preventDefault();
    // $('html, body').animate({ scrollTop: '0px' }, 0);
    $(this).addClass('active');
    $(".tab--two").addClass('active');
    $(".tab--one").removeClass('active');
    $(".nav__link--one").removeClass('active');
    $('.tab--two .flex__item').remove();
    getInfoActive();
  });

  // кнопки удалить
  $(document).on('click', '.flex__item-btn--delete', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    $.ajax({
      url: '/season/data/delete.php',             /* Куда отправить запрос */
      method: 'get',                            /* Метод запроса (post или get) */
      dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
      // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
      data: { id: id },               /* Данные передаваемые в массиве */
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
    var parent = $(this).parent().parent();
    parent.addClass('deactive');
    setTimeout(() => {
      parent.remove();
    }, 1000);
  });

  // кнопки опубликовать
  $(document).on('click', '.flex__item-btn--public', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    $.ajax({
      url: '/season/data/to-active.php',             /* Куда отправить запрос */
      method: 'get',                            /* Метод запроса (post или get) */
      dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
      // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
      data: { id: id },               /* Данные передаваемые в массиве */
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
    var parent = $(this).parent().parent();
    parent.addClass('deactive');
    setTimeout(() => {
      parent.remove();
    }, 1000);
  });

  // кнопки в архив
  $(document).on('click', '.flex__item-btn--unpublic', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    $.ajax({
      url: '/season/data/to-archive.php',             /* Куда отправить запрос */
      method: 'get',                            /* Метод запроса (post или get) */
      dataType: 'json',                         /* Тип данных в ответе (xml, json, script, html). */
      // data: { newWinNumber: arrayStringNumber, newPlayNumber: playNumber, newPlayerCity: playerCity, winner: 'lose' },               /* Данные передаваемые в массиве */
      data: { id: id },               /* Данные передаваемые в массиве */
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
    var parent = $(this).parent().parent();
    parent.addClass('deactive');
    setTimeout(() => {
      parent.remove();
    }, 1000);
  });
});