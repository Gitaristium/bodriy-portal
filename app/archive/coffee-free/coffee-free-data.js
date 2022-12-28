

$(document).ready(function () {
  $(".line").addClass('start');

  var delay = 60 * 1000;
  var step = 500;
  var endsAfter = delay;
  var timer;

  function timerFunction() {
    timer = setTimeout(function () {
      window.location = '/'
    }, delay)
  };
  timerFunction();

  var interval;
  function intervalFunction() {
    interval = setInterval(function () {
      endsAfter -= step;
      if (endsAfter <= 0) clearInterval(interval);
    }, step);
  };
  intervalFunction();

  var click = 1;
  $(".line").click(function (e) {
    // e.preventDefault();
    $(this).toggleClass('paused');
    if (click == 1) {
      clearTimeout(timer);
      clearTimeout(interval);
      delay = endsAfter;
      click = 2;
    }
    else {
      timerFunction();
      intervalFunction();
      click = 1;
    }
  });

  $(".head__wins").click(function (e) {
    e.preventDefault();
    $(".head__all").removeClass('active');
    $(".head__wins").addClass('active');
    $(".content__item").not($(".content__item.win")).css("display", "none");
  });
  $(".head__all").click(function (e) {
    e.preventDefault();
    $(".head__all").addClass('active');
    $(".head__wins").removeClass('active');
    $(".content__item").css("display", "flex");
  });
  $(".sidebar__item.one").click(function (e) {
    e.preventDefault();
    $(".sidebar__item.one").addClass('active');
    $(".section.one").addClass('active');
    $(".sidebar__item.two").removeClass('active');
    $(".section.two").removeClass('active');
  });
  $(".sidebar__item.two").click(function (e) {
    e.preventDefault();
    $(".sidebar__item.one").removeClass('active');
    $(".section.one").removeClass('active');
    $(".sidebar__item.two").addClass('active');
    $(".section.two").addClass('active');
  });


});