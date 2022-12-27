  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Кофе методом кермекс");
  ?>
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/kemex.webp">
  <link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee-recipe.css?ver=1.6">
  <script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {} else {
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
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/kemex.webp" type="image/webp">
          <img class="section__img section__img-kemex section__img-kemex--1"
            src="<?= SITE_DIR ?>assets/img/coffee/kemex.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/kemex.webp" type="image/webp">
          <img class="section__img section__img-kemex section__img-kemex--2"
            src="<?= SITE_DIR ?>assets/img/coffee/kemex.png">
        </picture>

        <h1>
          <div class="section__title right">
            Кофе<br>методом
          </div>
          <div class="section__title left">
            кемекс
          </div>
        </h1>

        <div class="section__text anim-items anim-no-hide">
          Кемекс был создан в 1941 году доктором химических наук Питером Шлюмбомом (Peter Schlumbohm). Говорят, он хотел
          иметь
          возможность быстро и без особых хлопот заваривать вкусный кофе в<br>своей лаборатории.
        </div>

        <h2 class="section__subtitle anim-items anim-no-hide">Что нужно</h2>

        <div class="section__text anim-items anim-no-hide">
          — Чистая питьевая вода<br>
          — Кофемолка<br>
          — Помол лучше использовать чуть крупнее, чем тростниковый сахар<br>
          — Весы с таймером<br>
          — Кемекс<br>
          — Фильтр для заваривания<br>
        </div>

        <h2 class="section__subtitle anim-items anim-no-hide">Как готовить</h2>

        <div class="section__text">
          <ol class="section__text-list">
            <li class="section__text-list-item anim-items anim-no-hide">
              Нагрейте воду. Желательно выключить чайник немного до закипания воды или дать воде остыть пару
              минут<br>(цель –
              95&nbsp;°С).
              Параллельно смолите необходимое количество кофе.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Разложите фильтр и установите тройной стенкой к носику кемекса. Обильно смочите фильтр горячей водой.
              Слейте
              воду через
              носик, не вынимая фильтр. Засыпьте кофе на дно фильтра и уравняйте кофейный слой лёгким встряхиванием
              кемекса.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Обнулите весы и включите таймер. Аккуратно смочите небольшим количеством воды (в 2-3 раза больше, чем вес
              молотого
              кофе), чтобы из<br>кофе вышел углекислый газ. Этот процесс называют «цветением» (blooming), он необходим
              для
              получения
              сбалансированной чашки. Поставьте обратно воронку с мокрым фильтром на кружку и аккуратно засыпьте в нее
              отмеренный
              молотый кофе в центр воронки, стараясь сильно не просыпать по окружности и стенкам воронки.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Спустя 30 секунд влейте оставшийся объём воды тонкой струйкой и аккуратными круговыми движениями. По мере
              прохождения
              воды через кофейный слой вращайте кемекс, чтобы убрать кофе оставшийся на стенках фильтра. Вода будет
              постепенно стекать
              около 4-5 минут.
            </li>
            <li class="section__text-list-item anim-items anim-no-hide">
              Удалите фильтр и взболтайте кемекс, чтобы насытить напиток кислородом.
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

        <a class="portal-link" href="https://portal.bodryi-den.ru/"
          onclick="ym(83929834, 'reachGoal', 'to_main_from_coffee'); return true;">тут ты можешь оставить отзыв<br>и
          много чего еще
          :)</a>

      </section>


    </div><!-- .wrapper -->
  </body>

  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
  <!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/touchswipe.js"></script> -->
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee-recipe.js?ver=1.6"></script>

  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>