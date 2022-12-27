var
  search = window.location.search,
  hash = '';
if (window.location.hash) {
  hash = "#" + window.location.hash;
}
window.history.replaceState(null, null, '/' + search);
Cookies.set('quest', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'quest', { path: '' });
// console.log(document.cookie);

$(document).ready(function () {

  // модалки - jQuery
  $("#btn-start").click(function (e) {
    e.preventDefault();
    $("#modal-quest").addClass('active');
    $("#modal-item-1").addClass('active');
  });
  $("#btn-1-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-1").addClass('done');
    $("#modal-item-2").addClass('active');
  });
  $("#btn-2-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-2").addClass('done');
    $("#modal-item-3").addClass('active');
  });
  $("#btn-3-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-3").addClass('done');
    $("#modal-item-4").addClass('active');
  });
  $("#btn-4-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-4").addClass('done');
    $("#modal-item-5").addClass('active');
  });
  $("#btn-5-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-5").addClass('done');
    $("#modal-item-6").addClass('active');
  });
  $("#btn-6-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-6").addClass('done');
    $("#modal-item-7").addClass('active');
  });
  $("#btn-7-7").click(function (e) {
    e.preventDefault();
    $("#modal-item-7").addClass('done');
    $("#modal-result").addClass('active');

    //ищем самые популярные ответы
    var q1 = $('.item__input[name="quest-1"]:checked').val(),
      q2 = $('.item__input[name="quest-2"]:checked').val(),
      q3 = $('.item__input[name="quest-3"]:checked').val(),
      q4 = $('.item__input[name="quest-4"]:checked').val(),
      q5 = $('.item__input[name="quest-5"]:checked').val(),
      q6 = $('.item__input[name="quest-6"]:checked').val(),
      q7 = $('.item__input[name="quest-7"]:checked').val(),
      a = 0, b = 0, c = 0, d = 0,
      results = Array(q1, q2, q3, q4, q5, q6, q7);

    results.forEach(function (item, index) {
      if (item == '1') {
        a = a + 1;
      }
      else {
        if (item == '2') {
          b = b + 1;
        } else {
          if (item == '3') {
            c = c + 1;
          } else {
            d = d + 1;
          }
        }
      }
    });

    console.log('ответов А: ' + a);
    console.log('ответов Б: ' + b);
    console.log('ответов В: ' + c);
    console.log('ответов Г: ' + d);

    //выбираем результат теста
    if (a > b && a > c && a > d) {
      $("#modal-result-1").addClass('active');
      $("#modal-result-1").scrollTop(0);
      console.log('результат: 1');
    }
    else {
      if (b > a && b > c && b > d) {
        $("#modal-result-2").addClass('active');
        $("#modal-result-2").scrollTop(0);
        console.log('результат: 2');
      } else {
        if (c > a && c > b && c > d) {
          $("#modal-result-3").addClass('active');
          $("#modal-result-3").scrollTop(0);
          console.log('результат: 3');
        }
        else {
          if (d > a && d > c && d > c) {
            $("#modal-result-4").addClass('active');
            $("#modal-result-4").scrollTop(0);
            console.log('результат: 4');
          } else {
            $("#modal-result-5").addClass('active');
            $("#modal-result-5").scrollTop(0);
            console.log('результат - ничья');
          }
        }

      }
    }

  });

  //показываем кнопки только когда выбран ответ
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-1"]').is(':checked')) {
      $("#btn-1-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-2"]').is(':checked')) {
      $("#btn-2-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-3"]').is(':checked')) {
      $("#btn-3-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-4"]').is(':checked')) {
      $("#btn-4-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-5"]').is(':checked')) {
      $("#btn-5-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-6"]').is(':checked')) {
      $("#btn-6-7").addClass('active');
    }
  });
  $(".item__input").change(function () {
    if ($('.item__input[name="quest-7"]').is(':checked')) {
      $("#btn-7-7").addClass('active');
    }
  });

});
