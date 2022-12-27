<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сезонное меню");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-summer/img/portal.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-summer/img/ice-coffee.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-summer/img/berry-espresso-tonic.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2021-summer/season.css">
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
        <img class="preload__img" src="<?= SITE_DIR ?>archive/img/interview/smile.png" alt="smile">
      </picture>
      грузим меню
    </div>
    <section class="section section-one">
      <div class="section__inner">
        <div class="container">
          <div class="section-one__big-text section-one__big-text--first parallax-items parallax-items-v">за-</div>
          <div class="section-one__text section-one__text-1 section-one__text--left"><span class="parallax-items parallax-items-v">мятный<br>айс-латте</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/ice-coffee.webp" type="image/webp">
              <img class="section-one__img section-one__img-1" src="<?= SITE_DIR ?>archive/season-2021-summer/img/ice-coffee.png" alt="мятный айс-латте">
            </picture>
          </div>
          <div class="section-one__text section-one__text-2 section-one__text--right">
            <span class="parallax-items parallax-items-v">ягодный<br>эспрессо-<br>тоник</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/berry-espresso-tonic.webp" type="image/webp">
              <img class="section-one__img section-one__img-2" src="<?= SITE_DIR ?>archive/season-2021-summer/img/berry-espresso-tonic.png" alt="ягодный эспрессо-тоник">
            </picture>
          </div>
          <div class="section-one__text section-one__text-3 section-one__text--left"><span class="parallax-items parallax-items-v">ягодный<br>лимонад</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/berry-lemonade.webp" type="image/webp">
              <img class="section-one__img section-one__img-3" src="<?= SITE_DIR ?>archive/season-2021-summer/img/berry-lemonade.png" alt="ягодный лимонад">
            </picture>
          </div>
          <div class="section-one__big-text parallax-items parallax-items-v">бод-</div>
          <div class="section-one__text section-one__text-4 section-one__text--right"><span class="parallax-items parallax-items-v">цитрусовый<br>лимонад</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/citrus-lemonade.webp" type="image/webp">
              <img class="section-one__img section-one__img-4" src="<?= SITE_DIR ?>archive/season-2021-summer/img/citrus-lemonade.png" alt="цитрусовый лимонад">
            </picture>
          </div>
          <div class="section-one__big-text section-one__big-text--wide parallax-items parallax-items-v">рись</div>
          <div class="section-one__text section-one__text-5 section-one__text--right">
            <span class="parallax-items parallax-items-v">фраппе<br>«солёная<br>карамель»</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/frappe-salted-caramel.webp" type="image/webp">
              <img class="section-one__img section-one__img-5" src="<?= SITE_DIR ?>archive/season-2021-summer/img/frappe-salted-caramel.png" alt="фраппе солёная карамель">
            </picture>
          </div>
          <div class="section-one__text section-one__text-6 section-one__text--left"><span class="parallax-items parallax-items-v">фраппе<br>«арахис<br>и
              печенье»</span>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/frappe-peanuts.webp" type="image/webp">
              <img class="section-one__img section-one__img-6" src="<?= SITE_DIR ?>archive/season-2021-summer/img/frappe-peanuts.png" alt="фраппе арахис и печенье">
            </picture>
          </div>
        </div>
        <!-- end .container -->
      </div>
      <!-- end .section__inner -->
    </section>
    <!-- end .section-one -->

    <section class="section section-two">
      <div class="section__inner">
        <div class="section-two__big-text parallax-items parallax-items-v-slow">милки</div>
        <div class="section-two__text section-two__text-1 section-two__text--left"><span>нутелла<br>шейк</span>
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/nutella-shake.webp" type="image/webp">
            <img class="section-two__img section-two__img-1 parallax-items parallax-items-h-l" src="<?= SITE_DIR ?>archive/season-2021-summer/img/nutella-shake.png" alt="нутелла шейк">
          </picture>
        </div>
        <div class="section-two__text section-two__text-2 section-two__text--right"><span>красный<br>бархат</span>
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/red-velvet.webp" type="image/webp">
            <img class="section-two__img section-two__img-2 parallax-items parallax-items-h-r" src="<?= SITE_DIR ?>archive/season-2021-summer/img/red-velvet.png" alt="красный бархат">
          </picture>
        </div>
        <div class="section-two__text section-two__text-3 section-two__text--left"><span>апельсиновый<br>шейк</span>
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/orange-shake.webp" type="image/webp">
            <img class="section-two__img section-two__img-3 parallax-items parallax-items-h-l" src="<?= SITE_DIR ?>archive/season-2021-summer/img/orange-shake.png" alt="апельсиновый шейк">
          </picture>
        </div>
        <div class="section-two__text section-two__text-4 section-two__text--right"><span>классический<br>шейк</span>
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2021-summer/img/classic-shake.webp" type="image/webp">
            <img class="section-two__img section-two__img-4 parallax-items parallax-items-h-r" src="<?= SITE_DIR ?>archive/season-2021-summer/img/classic-shake.png" alt="классический шейк">
          </picture>
        </div>
      </div>
      <!-- end .section__inner -->
    </section>
    <!-- end .section-two -->

    <section class="section section-three">
      <div class="section__inner">
        <div class="container">
          <div class="section-three__title">а ты пробовал наши летние новинки?</div>
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
    <!-- end .section-three -->

    <a class="footer-btn result__btn" href="/interview.php">
      оставить отзыв
    </a>

    <div id="modal-no" class="modal modal-no">
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
<script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2021-summer/season.js"></script>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>