  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Сезонное меню");
  ?>
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/smile.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/water-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/water-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/water-text.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-text.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-text.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-text.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-text.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/match-top.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/match-bottom.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-summer/img/match-text.webp">
  <link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2022-summer/season-summer-2022.css">
  <script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
        navigator.userAgent)) {} else {
      location = window.location.origin + '/';
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
        грузим меню
      </div>

      <picture>
        <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/bg.webp" type="image/webp">
        <img class="waves waves--one" src="<?= SITE_DIR ?>archive/season-2022-summer/img/bg.png">
      </picture>
      <picture>
        <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/bg.webp" type="image/webp">
        <img class="waves waves--two" src="<?= SITE_DIR ?>archive/season-2022-summer/img/bg.png">
      </picture>

      <section class="section section-one">
        <div class="section__inner">
          <div class="section-one__title">
            <span class="anim-items">бриз</span>
            <span class="anim-items">лето</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/smile.svg" type="image/svg+xml">
              <img class="section-one__title-img anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/smile.png">
            </picture>
          </div>

          <div class="section__item section__item--water left">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/water-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/water-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/water-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/water-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/water-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/water-bottom.png">
            </picture>
          </div>

          <div class="section__item section__item--granate right">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/granate-bottom.png">
            </picture>
          </div>

          <div class="section__item section__item--orange left">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/orange-bottom.png">
            </picture>
          </div>


          <div class="section__item section__item--raspberry right">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/raspberry-bottom.png">
            </picture>
          </div>

          <div class="section__item section__item--lavender left">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/lavender-bottom.png">
            </picture>
          </div>

          <div class="section__item section__item--match right">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/match-top.webp" type="image/webp">
              <img class="section__img section__img--top" src="<?= SITE_DIR ?>archive/season-2022-summer/img/match-top.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/match-text.webp" type="image/webp">
              <img class="section__img section__img--text anim-items" src="<?= SITE_DIR ?>archive/season-2022-summer/img/match-text.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2022-summer/img/match-bottom.webp" type="image/webp">
              <img class="section__img section__img--bottom" src="<?= SITE_DIR ?>archive/season-2022-summer/img/match-bottom.png">
            </picture>
          </div>

        </div>
        <!-- end .section__inner -->
      </section>
      <!-- end .section-one -->

      <section class="section section-two">
        <div class="section__inner">
          <div class="container">
            <div class="section-two__title">
              <span class="anim-items">УЖЕ</span>
              <span class="anim-items">СПАСАЕШЬСЯ</span>
              <span class="anim-items">ОТ ЖАРЫ НАШИМИ</span>
              <span class="anim-items">ЛЕТНИМИ?</span>
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
                расскажи,<br>какой напиток<br>тебе понравился?</div>
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

  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2022-summer/season-summer-2022.js"></script>


  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>