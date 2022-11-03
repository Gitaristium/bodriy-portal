  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Сезонное меню");
  ?>
  <meta name="theme-color" content="#1a1a1a">
  <link rel="preload" as="image" href="assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="assets/img/interview/smile.png">
  <link rel="preload" as="image" href="assets/img/season/bg.webp">
  <link rel="preload" as="image" href="assets/img/season/bg-bottom.png">
  <link rel="preload" as="image" href="assets/img/season/bg-modal.jpg">
  <link rel="preload" as="image" href="assets/img/season/arrow.webp">
  <link rel="preload" as="image" href="assets/img/season/cacao.webp">
  <link rel="preload" as="image" href="assets/img/season/latte.webp">
  <link rel="preload" as="image" href="assets/img/season/raf.webp">
  <link rel="preload" as="image" href="assets/img/season/tea.webp">
  <link rel="preload" as="image" href="assets/img/season/slider-title.webp">
  <link rel="stylesheet" href="assets/css/season-autumn-2022.css">
  <script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {} else {
  location = "/";
}
  </script>
  </head>

  <body>
    <div class="rotate-screen">
      <img class="rotate__img" src="assets/img/rotate-screen.png" alt="rotate-screen">
      поверни телефон
    </div>
    <div class="wrapper">
      <div class="preload">
        <picture>
          <source srcset="assets/img/interview/smile.webp" type="image/webp">
          <img class="preload__img" src="assets/img/interview/smile.png" alt="smile">
        </picture>
        грузим меню
      </div>

      <section class="section section-one" id="section-one">
        <picture>
          <source srcset="assets/img/season/bg.webp" type="image/webp">
          <img class="section-one__bg" src="assets/img/season/bg.jpg">
        </picture>
        <div class="slider-title">
          <div class="slider-title__item">
            <picture>
              <source srcset="assets/img/season/slider-title.webp" type="image/webp">
              <img class="slider-title__item-img" src="assets/img/season/slider-title.png">
            </picture>
          </div>
          <div class="slider-title__item">
            <picture>
              <source srcset="assets/img/season/slider-title.webp" type="image/webp">
              <img class="slider-title__item-img" src="assets/img/season/slider-title.png">
            </picture>
          </div>
        </div>

        <div class="arrows">
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img l three hide" src="assets/img/season/arrow.png">
          </picture>
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img l two hide" src="assets/img/season/arrow.png">
          </picture>
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img l one hide" src="assets/img/season/arrow.png">
          </picture>
          <div class="arrows__text">свайпай</div>
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img r one start" src="assets/img/season/arrow.png">
          </picture>
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img r two start" src="assets/img/season/arrow.png">
          </picture>
          <picture>
            <source srcset="assets/img/season/arrow.webp" type="image/webp">
            <img class="arrows__img r three start" src="assets/img/season/arrow.png">
          </picture>
        </div>

        <div class="slider-drink">
          <div class="slider-drink__item drink drink-1 show">
            <picture>
              <source srcset="assets/img/season/raf.webp" type="image/webp">
              <img class="slider-drink__item-img" src="assets/img/season/raf.png">
            </picture>
          </div>
          <div class="slider-drink__item drink drink-2">
            <picture>
              <source srcset="assets/img/season/cacao.webp" type="image/webp">
              <img class="slider-drink__item-img" src="assets/img/season/cacao.png">
            </picture>
          </div>
          <div class="slider-drink__item drink drink-3">
            <picture>
              <source srcset="assets/img/season/latte.webp" type="image/webp">
              <img class="slider-drink__item-img" src="assets/img/season/latte.png">
            </picture>
          </div>
          <div class="slider-drink__item drink drink-4">
            <picture>
              <source srcset="assets/img/season/tea.webp" type="image/webp">
              <img class="slider-drink__item-img" src="assets/img/season/tea.png">
            </picture>
          </div>
        </div>
        <div class="slider-text">
          <div class="slider-text__item">
            ГРЕЧИШНЫЙ ЧАЙ<br>
            С КОКОСОМ
          </div>
          <div class="slider-text__item">
            ЛАТТЕ «МИНДАЛЬНЫЙ<br>
            МЕДОВИК»
          </div>
          <div class="slider-text__item">
            КАКАО<br>
            «ПРЯНАЯ ВИШНЯ»
          </div>
          <div class="slider-text__item">
            РАФ «ПАПРИКА-<br>
            КЛУБНИКА-БАЗИЛИК»
          </div>
        </div>
        <!-- end .section__inner -->
      </section>
      <!-- end .section-one -->

      <section class="section section-two">
        <picture>
          <!-- <source srcset="assets/img/season/bg-bottom.webp" type="image/webp"> -->
          <img class="section-two__bg" src="assets/img/season/bg-bottom.png">
        </picture>
        <picture>
          <source srcset="assets/img/season/lines-left.webp" type="image/webp">
          <img class="section-two__lines section-two__lines--left anim-items" src="assets/img/season/lines-left.png">
        </picture>
        <picture>
          <source srcset="assets/img/season/lines-right.webp" type="image/webp">
          <img class="section-two__lines section-two__lines--right anim-items" src="assets/img/season/lines-right.png">
        </picture>
        <div class="section__inner">
          <div class="container">
            <div class="section-two__title">
              <span class="anim-items">УЖЕ</span>
              <span class="anim-items">СОГРЕВАЕШЬСЯ</span>
              <span class="anim-items">НАШИМИ ОСЕННИМИ?</span>
            </div>
            <button id="btn-y" class="btn btn--season anim-items" type="button">даааааа!</button>
            <button id="btn-n" class="btn anim-items" type="button">ещё нет:(</button>
            <div class="footer-note anim-items">
              <span>не забывай сканировать<br>QR-код, там много<br>всего интересного;)</span>
            </div>
          </div>
          <!-- end .container -->
        </div>
        <!-- end .section__inner -->
      </section>
      <!-- end .section-two -->

      <a class="footer-btn result__btn" href="/interview.php">
        оставить отзыв
      </a>

      <div id="modal-no" class="modal modal-no">
        <div class="modal__inner">
          <div class="container">
            <div class="modal__content">
              <div class="modal__text">если ты еще не<br>пробовал,<br>то ты знаешь<br>что делать;)</div>
              <div class="btn-close modal-no__btn">
                <div class="btn-close__inner">
                  <span></span><span></span>
                </div>
              </div>
            </div>
            <!-- end .modal__content -->
          </div>
          <!-- end .container -->
        </div>
        <!-- end .modal__inner -->
      </div>
      <!-- end modal-no -->

      <div id="modal-yes" class="modal modal-yes">
        <div class="modal__inner">
          <div class="container">
            <div class="modal__content">
              <div class="btn-close modal-yes__btn">
                <div class="btn-close__inner">
                  <span></span><span></span>
                </div>
              </div>
              <div class="modal__text">
                расскажи,<br>какой напиток<br>тебе понравился?
              </div>
              <form action="season-send.php" method="POST">
                <textarea name="feedback" id="feedback" required></textarea>
                <button id="btn-y" class="btn btn--season" type="submit">рассказать</button>
              </form>
            </div>
            <!-- end .modal__content -->
          </div>
          <!-- end .container -->
        </div>
        <!-- end .modal__inner -->
      </div>
      <!-- end modal-yes -->

    </div><!-- end .wrapper -->
  </body>

  <script type="text/javascript" src="assets/js/anim.js"></script>
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="assets/js/touchswipe.js"></script>
  <script type="text/javascript" src="assets/js/season-autumn-2022.js"></script>

  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>