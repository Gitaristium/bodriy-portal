// window.history.replaceState(null, null, '/');
// Cookies.set('march8', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', 'march8', { path: '' });



window.onload = function () {
  setTimeout(() => {
    document.body.classList.add('ready', 'active');
  }, 500);
}

$(document).ready(function (e) {
  setTimeout(() => {
    $('.modal.relative').addClass('active');
  }, 500);

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


  // слайдер
  $('.slick').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: false,
    fade: false,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    swipe: true,
    touchThreshold: 10,
    touchMove: true
  });


  // кнопки отправить у открыток
  $('.item__input').keyup(function () {
    var Value1 = $('#item__input-1').val();
    var Value2 = $('#item__input-2').val();
    var Value3 = $('#item__input-3').val();


    if (Value1.length >= 1 && Value2.length >= 1) {
      $('#btn-march8-one').addClass('active');
    }
    else {
      $('#btn-march8-one').removeClass('active');
    }

    if (Value3.length >= 1) {
      $('#btn-march8-two').addClass('active');
    }
    else {
      $('#btn-march8-two').removeClass('active');
    }

  });

  // кнопка отправить (поделиться)

  $('#btn-march8-one').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var name1 = $('#item__input-1').val();
      var link1 = encodeURIComponent(name1).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var name2 = $('#item__input-2').val();
      var link2 = encodeURIComponent(name2).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        // title: 'У меня для тебя открытка!',
        // text: 'Переходи по ссылке и смотри',
        url: '/march8-one.php?name=' + link1 + '&what=' + link2
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');

      var name1 = $('#item__input-1').val();
      var link1 = encodeURIComponent(name1).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var name2 = $('#item__input-2').val();
      var link2 = encodeURIComponent(name2).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      var link = 'https://portal.bodryi-den.ru/archive/march8/march8-one.php?name=' + link1 + '&what=' + link2;

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

  $('#btn-march8-two').click(function (e) {
    e.preventDefault();
    if (navigator.share) {
      var what = $('#item__input-3').val();
      var link = encodeURIComponent(what).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16);
      });
      navigator.share({
        // title: 'У меня для тебя открытка!',
        // text: 'Переходи по ссылке и смотри',
        url: '/march8-two.php?what=' + link
      }).then(() => {
        // alert('Thanks for sharing!');
      })
        .catch(console.error);
    } else {
      // alert('Web Share API не поддерживается');
      $("body").append('<input id="input-tmp" type="text">');
      var what = $('#item__input-3').val();
      var link = 'https://portal.bodryi-den.ru/archive/march8/march8-two.php?what=' + encodeURIComponent(what).replace(/[!'()*]/g, function (c) {
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

  if (document.querySelector(".txta")) {
    var textarea = document.querySelector('textarea');

    textarea.addEventListener('keyup', function () {
      if (this.scrollTop > 0) {
        this.style.height = this.scrollHeight + "px";
      }
    });


    // авторесайз textarea
    // Targets all textareas with class "txta"
    let textareas = document.querySelectorAll('.txta'),
      hiddenDiv = document.createElement('div'),
      content = null;

    // Adds a class to all textareas
    for (let j of textareas) {
      j.classList.add('txtstuff');
    }

    // Build the hidden div's attributes

    // The line below is needed if you move the style lines to CSS
    // hiddenDiv.classList.add('hiddendiv');

    // Add the "txta" styles, which are common to both textarea and hiddendiv
    // If you want, you can remove those from CSS and add them via JS
    hiddenDiv.classList.add('txta');

    // Add the styles for the hidden div
    // These can be in the CSS, just remove these three lines and uncomment the CSS
    hiddenDiv.style.display = 'none';
    hiddenDiv.style.whiteSpace = 'pre-wrap';
    hiddenDiv.style.wordWrap = 'break-word';

    // Loop through all the textareas and add the event listener
    for (let i of textareas) {
      (function (i) {
        // Note: Use 'keyup' instead of 'input'
        // if you want older IE support
        i.addEventListener('input', function () {

          // Append hiddendiv to parent of textarea, so the size is correct
          i.parentNode.appendChild(hiddenDiv);

          // Remove this if you want the user to be able to resize it in modern browsers
          i.style.resize = 'none';

          // This removes scrollbars
          i.style.overflow = 'hidden';

          // Every input/change, grab the content
          content = i.value;

          // Add the same content to the hidden div

          // This is for old IE
          content = content.replace(/\n/g, '<br>');

          // The <br ..> part is for old IE
          // This also fixes the jumpy way the textarea grows if line-height isn't included
          hiddenDiv.innerHTML = content + '<br style="line-height: 3px;">';

          // Briefly make the hidden div block but invisible
          // This is in order to read the height
          hiddenDiv.style.visibility = 'hidden';
          hiddenDiv.style.display = 'block';
          i.style.height = hiddenDiv.offsetHeight + 'px';

          // Make the hidden div display:none again
          hiddenDiv.style.visibility = 'visible';
          hiddenDiv.style.display = 'none';
        });
      })(i);
    }
  }
});