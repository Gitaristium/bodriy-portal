<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Забери кофе бесплатно");
?>

<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta property="og:title" content="Забери свой бесплатный кофе!">
<meta property="og:description" content="Купи большой напиток и попробуй забрать его бесплатно!">

<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">

<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee-free/ohno.webp">

<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee-free.css?ver=1.7">
<script type="text/javascript">
  var search = '';

  if (window.location.search) {
    search = window.location.search;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {
    ym(83929834, 'hit', '/coffee-free' + search, {
      params: {}
    });
  } else {
    window.location = '/oops.php' + search;
  }
</script>

</head>

<body>
  <div class="rotate-screen">
    <img class="rotate__img" src="<?= SITE_DIR ?>assets/img/rotate-screen.png" alt="rotate-screen">
    поверни телефон
  </div>
  <div class="wrapper">
    <div class="preload">
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/interview/smile.webp" type="image/webp">
        <img class="preload__img" src="<?= SITE_DIR ?>assets/img/interview/smile.png" alt="smile">
      </picture>
      прячем твой выигрыш
    </div>

    <section class="section section-one">
      <div class="pictures-block">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-1" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-2" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-3" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-4" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-5" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-6" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-7" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
      </div>
      <div class="container">
        <h1 class="section-one__title">
          <span>УГАДАЙ ГДЕ</span>
          <span>СПРЯТАН КОФЕ</span>
          <span>И ЗАБЕРИ ЕГО</span>
          <span>БЕСПЛАТНО</span>
        </h1>
      </div>
      <button id="btn-play" class="btn" type="button">хочу бесплатный кофе</button>
      <button id="btn-rules" class="section-one__link" type="button">правила проведения акции</button>
    </section>

    <section class="section section-two">
      <div class="pictures-block">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-1" src="<?= SITE_DIR ?>assets/img/coffee-free/smile.png">
        </picture>
        <div class="pictures-block__text">
          <span>пссс!</span>
          <span>я точно видел</span>
          <span>его где-то здесь ...</span>
        </div>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile.webp" type="image/webp">
          <img class="pictures-block__img pictures-block__img-2" src="<?= SITE_DIR ?>assets/img/coffee-free/smile.png">
        </picture>
      </div>
      <div class="section-two__text">
        <span>На одном из этих полей спрятан</span>
        <span>твой кофе, попробуй его найти.</span>
        <span>У тебя есть одна попытка.</span>
        <span>Желаем удачи :)</span>
      </div>
      <div class="play-block">
        <button class="play-button play-button--1">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.webp" type="image/webp">
            <img class="play-button__img" src="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.png">
          </picture>

          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.webp" type="image/webp">
            <img class="play-button__img--lose" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.png">
          </picture>


          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
            <img class="play-button__img--win" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-1" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-2" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-3" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>

        </button>
        <button class="play-button play-button--2">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.webp" type="image/webp">
            <img class="play-button__img" src="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.png">
          </picture>

          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.webp" type="image/webp">
            <img class="play-button__img--lose" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.png">
          </picture>


          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
            <img class="play-button__img--win" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-1" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-2" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-3" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>

        </button>
        <button class="play-button play-button--3">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.webp" type="image/webp">
            <img class="play-button__img" src="<?= SITE_DIR ?>assets/img/coffee-free/question-mark.png">
          </picture>

          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.webp" type="image/webp">
            <img class="play-button__img--lose" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.png">
          </picture>


          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
            <img class="play-button__img--win" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-1" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-2" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura.webp" type="image/webp">
            <img class="play-button__img--win-ura play-button__img--win-ura-3" src="<?= SITE_DIR ?>assets/img/coffee-free/ura.png">
          </picture>

        </button>
      </div>
      <div class="smile-block">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-look.webp" type="image/webp">
          <img class="smile-block-img" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-look.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-look-eyes.webp" type="image/webp">
          <img class="smile-block-img-eyes" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-look-eyes.png">
        </picture>
      </div>
    </section>

    <section class="section section-result section-result--lose">
      <div class="picture-block">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.webp" type="image/webp">
          <img class="section-result__img section-result__img--lose" src="<?= SITE_DIR ?>assets/img/coffee-free/smile-xx.png">
        </picture>
      </div>
      <div class="section-result__text">
        <span>УПС!</span>
        <span>Не вышло :(</span>
        <span>Приходи к нам снова,</span>
        <span>твой кофе всё ещё</span>
        <span>ждёт тебя!</span>
      </div>
      <div class="section-result__desc-block">
        <div class="section-result__desc-text">
          Переходи к нам на портал, оставляй<br>
          отзывы, узнавай новое и развлекайся.<br>
          Портал всегда открыт, обновляется<br>
          и доступен по QR-коду на стакане.<br>
        </div>
        <a class="btn section-result__btn" href="https://portal.bodryi-den.ru" onclick="ym(83929834, 'reachGoal', 'to_main_from_promo'); return true;">перейти на портал</a>
      </div>
    </section>

    <section class="section section-result section-result--win">
      <div class="picture-block">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/cup.webp" type="image/webp">
          <img class="section-result__img section-result__img--win" src="<?= SITE_DIR ?>assets/img/coffee-free/cup.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.webp" type="image/webp">
          <img class="section-result__img--win-ura section-result__img--win-ura-1" src="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.webp" type="image/webp">
          <img class="section-result__img--win-ura section-result__img--win-ura-2" src="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.webp" type="image/webp">
          <img class="section-result__img--win-ura section-result__img--win-ura-3" src="<?= SITE_DIR ?>assets/img/coffee-free/ura-black.png">
        </picture>
      </div>
      <div class="section-result__text">
        <span>СУПЕРРР!</span>
        <span>Ты нашел меня!</span>
        <span>Покажи этот экран</span>
        <span>бариста и забери</span>
        <span>свой кофе</span>
        <span>бесплатно :)</span>

      </div>
      <div class="section-result__desc-block">
        <div class="section-result__desc-text">
          Переходи к нам на портал, оставляй<br>
          отзывы, узнавай новое и развлекайся.<br>
          Портал всегда открыт, обновляется<br>
          и доступен по QR-коду на стакане.<br>
        </div>
        <a class="btn section-result__btn" href="https://portal.bodryi-den.ru">перейти на портал</a>
      </div>
    </section>

    <section class="section section-result section-result--stop">
      <div class="section-result--stop__title">
        Прости :(
      </div>
      <div class="section-result--stop__text">
        <span>Но для участия в акции тебе необходимо</span>
        <span>купить напиток в нашей кофейне</span>
        <span class="br">и просканировать QR-код.</span>
        <span>Приходи, твой кофе ждёт тебя!</span>
      </div>
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/coffee-free/ohno.webp" type="image/webp">
        <img class="section-result--stop__img" src="<?= SITE_DIR ?>assets/img/coffee-free/ohno.png">
      </picture>
    </section>

    <section class="section section-rules">
      <div class="container">
        <div class="section-rules__text">
          Правила проведения рекламной акции «Роророзыгрыш»<br><br>

          Срок проведения акции с 15.08.2022 по 01.10.2022&#160;г.<br><br>

          Источник информации об организаторе и правилах акции: www.portal.bodryi-den.ru.<br>
          Организатор акции: ООО «Белое и пушистое», ИНН 5406785824, адрес: г. Новосибирск, ул. Гоголя, 15, 1 этаж, тел.
          8-(383)-375-00.<br><br>

          Целью проведения акции является увеличение продаж.<br><br>

          Принять участие в акции могут все физические лица-покупатели (далее – Клиенты) кофеен «Бодрый день» (далее –
          Кофейня).<br><br>

          Условия для участия в акции: покупка Клиентом в Кофейне любого напитка объемом 0,4 или 0,5л., имеющегося в
          продаже в
          Кофейне.<br><br>

          Механика проведения акции: Клиент оплачивает покупку напитка объемом 0,4 или 0,5л., после этого он имеет
          возможность
          перейти на корпоративный портал Организатора акции и поучаствовать в акции, а именно выбрать один из трех
          вариантов. В
          случае если Клиент угадает верный вариант, то Клиент признается выигравшим в рекламной акции. В таком случае,
          Клиент
          показывает результат акции на своем мобильном устройстве продавцу Кофейни, после чего продавец производит
          возврат
          денежных средств за покупку соответствующего напитка (таким образом, у Клиента остается бесплатный напиток). В
          случае,
          если Клиент
          не выигрывает, продавец не производит возврат
          денежных средств, а у покупателя остается купленный напиток.<br><br>

          Организатор акции не гарантирует выигрыш Клиента. Количество участий и призов не ограничено. Место получения
          призов —
          Кофейня, в которой Клиент осуществил соответствующую покупку напитка. Призом является бесплатный напиток
          объемом 0,4л.
          или 0,5л.<br><br>

          Правила могут быть в любое время в одностороннем порядке изменены Организатором акции путем публикации новых
          правил на
          данной странице.
          Участник обязан самостоятельно отслеживать изменения Правил проведения рекламной акции.<br><br>
          Приняв участие в акции, Клиент безусловно
          соглашается с правилами проведения акции.
        </div>
        <button id="btn-rules-close" class="section-rules__btn-close"><span></span><span></span></button>
      </div>
    </section>

  </div><!-- .wrapper -->
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/touchswipe.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee-free.js?ver=1.7"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>