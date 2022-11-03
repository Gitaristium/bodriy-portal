<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сезонное меню");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/snow2.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/mocha.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/raf1.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/raf2.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/cocoa.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2021-winter/img/tea.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2021-winter/season.css">
<script type="text/javascript">
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {} else {
    location = "/";
  }
</script>
</head>

<body>
  <div class="rotate-screen">
    <img class="rotate__img" src="<?= SITE_DIR ?>assets/img/rotate-screen.png" alt="rotate-screen">
    поверни телефон
  </div>
  <div class="wrapper">
    <div class="big-title">Бодрая</div>
    <section class="section section-one">
      <div class="section__inner">
        <div class="line line-1">
          <h1 class="line__title">
            <span>
              БОДРАЯ
            </span>
            <span>
              ЗИМА 21
            </span>
            <span>
              -22
            </span>
          </h1>
        </div>
        <div class="line line-2"></div>
        <div class="line line-3 line__text">
          <span>
            сливочный мокачино<br>с клубникой
          </span>
        </div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
          <img class="line__img line__star line__star-1 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
        </picture>

        <div class="line line-4"></div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/mocha.webp" type="image/webp">
          <img class="line__img line__img-1" src="<?= SITE_DIR ?>archive/season-2021-winter/img/moocha.png">
        </picture>

        <div class="line line--r line-5 line__text">
          <span id="span-2">
            солёный раф<br>с попкорном
          </span>
        </div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
          <img class="line__img line__star line__star-2 rotate-l" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
        </picture>

        <picture>
          <!-- <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/raf1.webp" type="image/webp"> -->
          <img id="img-2-1" class="line__img line__img--r line__img-2-1 " src="<?= SITE_DIR ?>archive/season-2021-winter/img/raf1.png">
        </picture>
        <picture>
          <!-- <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/raf2.webp" type="image/webp"> -->
          <img id="img-2-2" class="line__img line__img--r line__img-2-2 " src="<?= SITE_DIR ?>archive/season-2021-winter/img/raf2.png">
        </picture>

        <div class="line line-6 line__text">
          <span id="span-3">
            кокосовое<br>какао
          </span>
        </div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/cocoa.webp" type="image/webp">
          <img id="img-3" class="line__img line__img-3 " src="<?= SITE_DIR ?>archive/season-2021-winter/img/cocoa.png">
        </picture>

        <div class="line line--r line-7 line__text">
          <span id="span-4">
            мятный чай<br>с яблоком
          </span>
        </div>
        <div class="line line-8"></div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/tea.webp" type="image/webp">
          <img id="img-4" class="line__img line__img--r line__img-4" src="<?= SITE_DIR ?>archive/season-2021-winter/img/tea.png">
        </picture>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
          <img class="line__img line__star line__star-3 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
        </picture>

        <div class="line line-9"></div>

        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow2.webp" type="image/webp">
          <img class="line__img line__star line__star-4 rotate-l" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow2.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow2.webp" type="image/webp">
          <img class="line__img line__star line__star-5 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow2.png">
        </picture>

        <!-- end .container -->
      </div>
      <!-- end .section__inner -->
    </section>
    <!-- end .section-one -->

    <section class="section section-two">
      <div class="section__inner">
        <div class="container">
          <div class="section-two__title anim-items">А ТЫ УЖЕ<br>ЗАКАЗЫВАЕШЬ<br>НАШИ ЗИМНИЕ<br>НОВИКИ?</div>
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
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
              <img class="modal__star modal__star-1 rotate-l" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
            </picture>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
              <img class="modal__star modal__star-2 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
            </picture>
            <div class="modal__text">если ты еще не<br>пробовал,<br>то ты знаешь<br>что делать;)</div>
            <div class="btn-close modal-no__btn">
              <div class="btn-close__inner">
                <span></span><span></span>
              </div>
            </div>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
              <img class="modal__star modal__star-3 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
            </picture>
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
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
              <img class="modal__star modal__star-4 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
            </picture>
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
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.webp" type="image/webp">
              <img class="modal__star modal__star-5 rotate-r" src="<?= SITE_DIR ?>archive/season-2021-winter/img/snow.png">
            </picture>
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
<script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2021-winter/season.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>