<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сезонное меню");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/bg-vector.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/leaf.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/latte.webp">
<link rel=" preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/raf.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/tea.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/tea2.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2022-spring/season.css">
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
        <img class="preload__img" src="<?= SITE_DIR ?>assets/img/interview/smile.png" alt="smile">
      </picture>
      грузим меню
    </div>
    <section class="section section-one">
      <div class="section__bg-text one">
        <div class="section__bg-text-inner">
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
        </div>
      </div>
      <div class="section__bg-text two">
        <div class="section__bg-text-inner">
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
          <span>весна</span>
        </div>
      </div>
      <img class="section__bg" src="<?= SITE_DIR ?>archive/season-2022-spring/img/bg-vector.png">

      <div class="section__inner">
        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/leaf.webp" type="image/webp">
          <img class="section__img section__img-leaf section__img-leaf--top" src="<?= SITE_DIR ?>archive/season-2022-spring/img/leaf.png">
        </picture>

        <div class="section__item one">
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/latte.webp" type="image/webp">
            <img class="section__img section__img--1 anim-items" src="<?= SITE_DIR ?>archive/season-2022-spring/img/latte.png">
          </picture>
          <p class="section__img-title section__img-title--1 anim-items">ЛАТТЕ С ЕЖЕВИКОЙ<br>И БЕЛОЙ МЯТОЙ</p>
        </div>

        <div class="section__item two">
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/raf.webp" type="image/webp">
            <img class="section__img section__img--2 anim-items" src="<?= SITE_DIR ?>archive/season-2022-spring/img/raf.png">
          </picture>
          <p class="section__img-title section__img-title--2 anim-items">КАРАМЕЛЬНЫЙ РАФ<br>С БАЗИЛИКОМ</p>
        </div>

        <div class="section__item three">
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/tea.webp" type="image/webp">
            <img class="section__img section__img--3 anim-items" src="<?= SITE_DIR ?>archive/season-2022-spring/img/tea.png">
          </picture>
          <p class="section__img-title section__img-title--3 anim-items">ПЕРСИКОВЫЙ ЧАЙ<br>С ДЫНЕЙ</p>
        </div>

        <div class="section__item four">
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/tea2.webp" type="image/webp">
            <img class="section__img section__img--4 anim-items" src="<?= SITE_DIR ?>archive/season-2022-spring/img/tea2.png">
          </picture>
          <p class="section__img-title section__img-title--4 anim-items">ГРУШЕВЫЙ ЧАЙ<br>С ЛИМОНОМ</p>
        </div>




        <!-- end .container -->
      </div>
      <!-- end .section__inner -->
    </section>
    <!-- end .section-one -->

    <section class="section section-two">
      <div class="section__inner">

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2022-spring/img/leaf.webp" type="image/webp">
          <img class="section__img section__img-leaf section__img-leaf--bottom anim-items" src="<?= SITE_DIR ?>archive/season-2022-spring/img/leaf.png">
        </picture>

        <div class="container">
          <div class="section-two__title anim-items">А ТЫ УЖЕ ПЬЕШЬ<br>НАШИ ВЕСЕННИЕ<br>НАПИТКИ?</div>
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
<script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2022-spring/season.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>