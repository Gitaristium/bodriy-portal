  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Бодрый архив");
  ?>
  <meta name="theme-color" content="#52ae32">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
  <link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/archive.css">
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
        грузим архив
      </div>

      <section class="section">
        <h1 class="section__title">Архив</h1>
        <h2 class="section__subtitle">2021</h2>
        <a class="section__link" href="http://fufuter.ru/bodroe-pismo/index_1.html">Рассылка #1</a>
        <a class="section__link" href="http://fufuter.ru/bodroe-pismo/index_2.html">Рассылка #2</a>
        <a class="section__link" href="http://fufuter.ru/bodroe-pismo/index_3.html">Рассылка #3</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2021-summer/season.php">Лето</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2021-autumn/season.php">Осень</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2021-winter/season.php">Зима</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/newyear2022/2022.php">Новый год</a>
        <h2 class="section__subtitle">2022</h2>
        <a class="section__link" href="<?= SITE_DIR ?>archive/valentine/valentine.php">14 февраля</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/feb23/feb23.php">23 февраля</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/march8/march8.php">8 марта</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2022-spring/season.php">Весна</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2022-summer/season.php">Лето</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/coffee-free/">Акция с кофе</a>
        <a class="section__link" href="<?= SITE_DIR ?>archive/season-2022-autumn/season.php">Осень</a>
      </section>
    </div>
  </body>

  <!-- <script type="text/javascript" src="assets/js/anim.js"></script> -->
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/archive.js"></script>


  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

  </html>