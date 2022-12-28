  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Сезонное меню");
  ?>
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.webp">
  <link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2021-autumn/season.css">
  <script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
        navigator.userAgent)) {} else {
      window.location = '/';
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
          <img class="preload__img" src="<?= SITE_DIR ?>archive/img/interview/smile.png" alt="smile">
        </picture>
        грузим меню
      </div>
      <picture>
        <source srcset="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg.webp" type="image/webp">
        <img class="wrapper__img wrapper__img--top" src="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg.png">
      </picture>
      <picture>
        <source srcset="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.webp" type="image/webp">
        <img class="wrapper__img wrapper__img--bottom" src="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.png">
      </picture>
      <section class="section section-one">
        <div class="section__inner">
          <div class="container">
            <div class="section-one__big-text section-one__big-text--first parallax-items parallax-items-v">согре</div>
            <div class="section-one__big-text section-one__big-text--first parallax-items parallax-items-v">-вай</div>
            <div class="section-one__text section-one__text-1 section-one__text--left">
              <span class="parallax-items parallax-items-v">какао<br>с шоколадом<br>и перцем</span>
            </div>
            <div class="section-one__text section-one__text-2 section-one__text--right">
              <span class="parallax-items parallax-items-v">латте<br>«ЛИМОННЫЙ ТАРТ<br>С БАНАНОМ»</span>
            </div>
            <div class="section-one__text section-one__text-3 section-one__text--left">
              <span class="parallax-items parallax-items-v">апельсиновый<br>чай с клюквой</span>
            </div>
            <div class="section-one__text section-one__text-4 section-one__text--right">
              <span class="parallax-items parallax-items-v">яблочный чай<br>с корицей</span>
            </div>
          </div>
          <!-- end .container -->
        </div>
        <!-- end .section__inner -->
      </section>
      <!-- end .section-one -->

      <section class="section section-two">
        <div class="section__inner">
          <div class="container">
            <div class="section-two__title">а ты<br>согреваешься<br>нашими<br>осенними<br>напитками?</div>
            <button id="btn-y" class="btn btn--green anim-items" type="button">даааааа!</button>
            <button id="btn-n" class="btn anim-items" type="button">ещё нет:(</button>
            <div class="footer-note anim-items">
              <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
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
        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.webp" type="image/webp">
          <img class="modal__img" src="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.png">
        </picture>
        <div class="modal__inner">
          <div class="container">
            <div class="modal__content">
              <div class="modal__text">если ты<br>еще не пробовал,<br>то ты знаешь<br>что делать;)</div>
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
        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.webp" type="image/webp">
          <img class="modal__img" src="<?= SITE_DIR ?>archive/season-2021-autumn/img/bg2.png">
        </picture>
        <div class="modal__inner">
          <div class="container">
            <div class="modal__content">
              <div class="btn-close modal-yes__btn">
                <div class="btn-close__inner">
                  <span></span><span></span>
                </div>
              </div>
              <div class="modal__text">расскажи,<br>какой напиток<br>тебе понравился?</div>
              <form action="season-send.php" method="POST">
                <textarea name="feedback" id="feedback"></textarea>
                <button id="btn-y" class="btn btn--green" type="submit">рассказать</button>
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
  <script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2021-autumn/season.js"></script>

  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>