// window.history.replaceState(null, null, '/');
// Cookies.set('feb23', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', 'feb23', { path: '' });



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
    $('html, body').animate({ scrollTop: 0 }, 100);
    $('.modal').addClass('active');
    setTimeout(() => {
      $('body').removeClass('active');
    }, 300);
    setTimeout(() => {
      $('body').removeClass('two three four').addClass('one');
      $('meta[name="theme-color"]').attr('content', '#91abb6');
    }, 700);
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
      console.log('Осуществлён переход к 1-му слайду');
      $('body').removeClass('two three four').addClass('one');
      $('meta[name="theme-color"]').attr('content', '#91abb6');
    }
    if (currentSlide == 1) {
      console.log('Осуществлён переход к 2-му слайду');
      $('body').removeClass('one three four').addClass('two');
      $("meta[name='theme-color']").attr('content', '#0075ff');
    }
    if (currentSlide == 2) {
      console.log('Осуществлён переход к 3-му слайду');
      $('body').removeClass('one tow four').addClass('three');
      $("meta[name='theme-color']").attr('content', '#0047fc');
    }
    if (currentSlide == 3) {
      console.log('Осуществлён переход к 4-му слайду');
      $('body').removeClass('one tow three').addClass('four');
      $("meta[name='theme-color']").attr('content', '#ec3c3c');
    }
  });

  // автозаполнение валентинок

  $('#item__input-1').keyup(function () {
    var Value = $(this).val();
    $('#item__input-2').val(Value);
    $('#item__input-3').val(Value);
    $('#item__input-5').val(Value);
  });

  $('#item__input-2').keyup(function () {
    var Value = $(this).val();
    $('#item__input-1').val(Value);
    $('#item__input-3').val(Value);
    $('#item__input-5').val(Value);
  });

  $('#item__input-3').keyup(function () {
    var Value = $(this).val();
    $('#item__input-1').val(Value);
    $('#item__input-2').val(Value);
    $('#item__input-5').val(Value);
  });
  $('#item__input-5').keyup(function () {
    var Value = $(this).val();
    $('#item__input-1').val(Value);
    $('#item__input-2').val(Value);
    $('#item__input-3').val(Value);
  });

  $('.item__input').keyup(function () {
    var Value1 = $('#item__input-1').val();
    var Value2 = $('#item__input-2').val();
    var Value3 = $('#item__input-3').val();
    var Value4 = $('#item__input-4').val();
    var Value5 = $('#item__input-5').val();

    if (Value1.length >= 1 || Value2.length >= 1 || Value3.length >= 1) {
      $('#btn-feb23-one, #btn-feb23-two, #btn-feb23-four').addClass('active');
    }
    else {
      $('#btn-feb23-one, #btn-feb23-two, #btn-feb23-four').removeClass('active');
    }

    if (Value3.length >= 1 && Value4.length >= 1) {
      $('#btn-feb23-three').addClass('active');
    }
    else {
      $('#btn-feb23-three').removeClass('active');
      var Value = $(this).val();
    }
  });

  // кнопка отправить (поделиться)

  $('#btn-feb23-one').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var name = $('#item__input-1').val();
      var link = encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        // title: 'У меня для тебя открытка!',
        // text: 'Переходи по ссылке и смотри',
        url: '/feb23-one.php?name=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');
      var name = $('#item__input-1').val();
      var link = 'https://portal.bodryi-den.ru/archive/feb23/feb23-one.php?name=' + encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      $('#input-tmp').val(link);
      $('#input-tmp').select();
      document.execCommand("copy");
      $('#input-tmp').remove();
      $('.modal2').addClass('active');
      setTimeout(() => {
        location.reload();
      }, 5000);
    }
  });
  $('#btn-feb23-two').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var name = $('#item__input-2').val();
      var link = encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        // title: 'У меня для тебя открытка!',
        // text: 'Переходи по ссылке и смотри',
        url: '/feb23-two.php?name=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');
      var name = $('#item__input-2').val();
      var link = 'https://portal.bodryi-den.ru/archive/feb23/feb23-two.php?name=' + encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      $('#input-tmp').val(link);
      $('#input-tmp').select();
      document.execCommand("copy");
      $('#input-tmp').remove();
      $('.modal2').addClass('active');
      setTimeout(() => {
        location.reload();
      }, 5000);
    }
  });
  $('#btn-feb23-three').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var name3 = $('#item__input-3').val();
      var link3 = encodeURIComponent(name3).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var name4 = $('#item__input-4').val();
      var link4 = encodeURIComponent(name4).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        // title: 'У меня для тебя открытка!',
        // text: 'Переходи по ссылке и смотри',
        url: '/feb23-three.php?name=' + link3 + '&what=' + link4
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');

      var name3 = $('#item__input-3').val();
      var link3 = encodeURIComponent(name3).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var name4 = $('#item__input-4').val();
      var link4 = encodeURIComponent(name4).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var link = 'https://portal.bodryi-den.ru/archive/feb23/feb23-three.php?name=' + link3 + '&what=' + link4;

      $('#input-tmp').val(link);
      $('#input-tmp').select();
      document.execCommand("copy");
      $('#input-tmp').remove();
      $('.modal2').addClass('active');
      setTimeout(() => {
        location.reload();
      }, 5000);
    }
  });
  $('#btn-feb23-four').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var name = $('#item__input-5').val();
      var link = encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        title: 'У меня для тебя открытка!',
        text: 'Переходи по ссылке и смотри',
        url: '/feb23-four.php?name=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');
      var name = $('#item__input-5').val();
      var link = 'https://portal.bodryi-den.ru/archive/feb23/feb23-four.php?name=' + encodeURIComponent(name).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      $('#input-tmp').val(link);
      $('#input-tmp').select();
      document.execCommand("copy");
      $('#input-tmp').remove();
      $('.modal2').addClass('active');
      setTimeout(() => {
        location.reload();
      }, 5000);
    }
  });

});