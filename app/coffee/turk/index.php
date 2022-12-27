  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Кофе в турке");
  ?>
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/turk.webp">
  <link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee-recipe.css">
  <script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
        navigator.userAgent)) {} else {
      var
        search = window.location.search,
        hash = '';
      if (window.location.hash) {
        hash = "#" + window.location.hash;
      }
      location = window.location.origin + '/' + window.location.search;
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
        грузим рецепты
      </div>

      <section class="section">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/turk.webp" type="image/webp">
          <img class="section__img section__img-turk section__img-turk--1" src="<?= SITE_DIR ?>assets/img/coffee/turk.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/turk.webp" type="image/webp">
          <img class="section__img section__img-turk section__img-turk--2" src="<?= SITE_DIR ?>assets/img/coffee/turk.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/turk.webp" type="image/webp">
          <img class="section__img section__img-turk section__img-turk--3" src="<?= SITE_DIR ?>assets/img/coffee/turk.png">
        </picture>

        <h1>
          <div class="section__title right">
            Кофе
          </div>
          <div class="section__title left">
            в турке
          </div>
        </h1>

        <div class="section__text anim-items anim-no-hide">
          Кофе из турки получается очень<br>плотным и крепким, за счёт отсутствия фильтрации, большого количества
          мельчайших
          частиц
          кофе, длительности приготовления и высокой температуры.
        </div>

        <h2 class="section__subtitle anim-items anim-no-hide">Как готовить</h2>

        <div class="section__text">
          <ol class="section__text-list">
            <li class="section__text-list-item anim-items anim-no-hide">
              Засыпьте в турку молотый кофе.<br>Затем залейте внутрь холодную воду чуть ниже места, где начинается
              сужение
              горлышка
              турки, чтобы оставалось место для поднятия крема и хорошо перемешайте.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Поставьте турку на плиту.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Когда температура воды приблизится<br>к моменту закипания, в турке начнёт подниматься крема. В этот момент
              нужно
              снять
              турку с плиты.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Необходимо сразу перелить напиток в чашку и дать постоять 2-3 минуты. Общее время заваривания должно
              составить 4-5
              минут.
            </li>
          </ol>
        </div>

        <div class="section__praise anim-items anim-no-hide">
          ВЫ ВЕЛИКОЛЕПНЫ:)<br>
          НАСЛАЖДАЙТЕСЬ ВКУСНЫМ КОФЕ
        </div>

        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/smile.svg" type="image/svg+xml">
          <img class="section__smile anim-items" src="<?= SITE_DIR ?>assets/img/coffee/smile.png">
        </picture>

        <a class="portal-link" href="https://portal.bodryi-den.ru/" onclick="ym(83929834, 'reachGoal', 'to_main_from_coffee'); return true;">тут ты можешь оставить отзыв<br>и
          много чего еще
          :)</a>

      </section>


    </div><!-- .wrapper -->
  </body>

  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
  <!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/touchswipe.js"></script> -->
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee-recipe.js"></script>

  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>