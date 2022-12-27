
// Cookies.set('valentine', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', 'valentine', { path: '' });



window.onload = function () {
  setTimeout(() => {
    document.body.classList.add('ready', 'active');
  }, 500);
}

$(document).ready(function (e) {
  setTimeout(() => {
    $('.modal.relative').addClass('active');
  }, 500);

  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);

  $('#btn-select').click(function (e) {
    e.preventDefault();
    $('.modal').addClass('active');
    setTimeout(() => {
      $('body').removeClass('active');
    }, 300);
  });

  //слайдер
  $('.slick').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    fade: false,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    swipe: true,
    touchThreshold: 10,
    touchMove: true
  });

  $('.slick').on('afterChange', function (event, slick, currentSlide) {
    if (currentSlide == 0) {
      // console.log('Осуществлён переход к 1-му слайду');
      $('.item.two').removeClass('left').addClass('right');
      $('.item.three').removeClass('right').addClass('left');
    }
    if (currentSlide == 1) {
      // console.log('Осуществлён переход к 2-му слайду');
      $('.item.three').removeClass('left').addClass('right');
      $('.item.one').removeClass('right').addClass('left');
    }
    if (currentSlide == 2) {
      // console.log('Осуществлён переход к 3-му слайду');
      $('.item.one').removeClass('left').addClass('right');
      $('.item.two').removeClass('right').addClass('left');
    }
  });

  // автозаполнение валентинок

  $('#item__input-1').keyup(function () {
    var Value = $(this).val();
    $('#item__input-2').val(Value);
    $('#item__input-3').val(Value);
  });

  $('#item__input-2').keyup(function () {
    var Value = $(this).val();
    $('#item__input-1').val(Value);
    $('#item__input-3').val(Value);
  });

  $('#item__input-3').keyup(function () {
    var Value = $(this).val();
    $('#item__input-1').val(Value);
    $('#item__input-2').val(Value);
  });

  $('.item__input').keyup(function () {
    var Value1 = $('#item__input-1').val();
    var Value2 = $('#item__input-2').val();
    var Value3 = $('#item__input-3').val();
    var Value4 = $('#item__input-4').val();

    if (Value1.length >= 1 || Value2.length >= 1 || Value3.length >= 1) {
      $('#btn-valentine-one, #btn-valentine-two').addClass('active');
    }
    else {
      $('#btn-valentine-one, #btn-valentine-two').removeClass('active');
    }

    if (Value3.length >= 1 && Value4.length >= 1) {
      $('#btn-valentine-three').addClass('active');
    }
    else {
      $('#btn-valentine-three').removeClass('active');
      var Value = $(this).val();
    }
  });

  // кнопка отправить (поделиться)

  $('#btn-valentine-one').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var link = $('#item__input-1').val();
      navigator.share({
        title: 'У меня для тебя валентинка!',
        text: 'Переходи по ссылке и смотри',
        url: '/valentine-one.php?name=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      alert('Web Share API не поддерживается');
    }

    $("body").append('<input id="input-tmp" type="text">');
    var name = $('#item__input-1').val();
    name = name.replace(/ /g, '+');
    var link = encodeURI('https://portal.bodryi-den.ru/archive/valentine/valentine-one.php?name=' + name);
    $('#input-tmp').val(link);
    $('#input-tmp').select();
    document.execCommand("copy");
    $('#input-tmp').remove();
    $('.modal2').addClass('active');
    setTimeout(() => {
      location.reload();
    }, 5000);


  });
  $('#btn-valentine-two').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var link = $('#item__input-2').val();
      navigator.share({
        title: 'У меня для тебя валентинка!',
        text: 'Переходи по ссылке и смотри',
        url: '/valentine-two.php?name=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      alert('Web Share API не поддерживается');
    }

    $("body").append('<input id="input-tmp" type="text">');
    var name = $('#item__input-2').val();
    name = name.replace(/ /g, '+');
    var link = encodeURI('https://portal.bodryi-den.ru/archive/valentine/valentine-two.php?name=' + name);
    $('#input-tmp').val(link);
    $('#input-tmp').select();
    document.execCommand("copy");
    $('#input-tmp').remove();
    $('.modal2').addClass('active');
    setTimeout(() => {
      location.reload();
    }, 5000);

  });
  $('#btn-valentine-three').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var link3 = $('#item__input-3').val();
      var link4 = $('#item__input-4').val();
      navigator.share({
        title: 'У меня для тебя валентинка!',
        text: 'Переходи по ссылке и смотри',
        url: '/valentine-three.php?name=' + link3 + '&what=' + link4
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      alert('Web Share API не поддерживается');
    }

    $("body").append('<input id="input-tmp" type="text">');
    var name = $('#item__input-3').val();
    var what = $('#item__input-4').val();
    name = name.replace(/ /g, '+');
    what = what.replace(/ /g, '+');
    var link = encodeURI('https://portal.bodryi-den.ru/archive/valentine/valentine-three.php?name=' + name + '&what=' + what);
    $('#input-tmp').val(link);
    $('#input-tmp').select();
    document.execCommand("copy");
    $('#input-tmp').remove();
    $('.modal2').addClass('active');
    setTimeout(() => {
      location.reload();
    }, 5000);

  });

});