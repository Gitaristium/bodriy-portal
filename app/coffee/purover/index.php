<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Кофе методом пуровер");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/purover.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee-recipe.css?ver=1.7">
<script type="text/javascript">
  var search = '';

  if (window.location.search) {
    search = window.location.search;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {

    ym(83929834, 'hit', '/coffee/purover' + search, {
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
      грузим рецепты
    </div>

    <section class="section">
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/coffee/purover.webp" type="image/webp">
        <img class="section__img section__img-purover section__img-purover--1" src="<?= SITE_DIR ?>assets/img/coffee/purover.png">
      </picture>
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/coffee/purover.webp" type="image/webp">
        <img class="section__img section__img-purover section__img-purover--2" src="<?= SITE_DIR ?>assets/img/coffee/purover.png">
      </picture>

      <h1>
        <div class="section__title right">
          Кофе<br>методом
        </div>
        <div class="section__title left">
          пуровер
        </div>
      </h1>

      <div class="section__text anim-items anim-no-hide">
        — это альтернативный метод<br>заваривания кофе, в котором используется специальная воронка. Иногда этот метод
        так и
        называют — «воронка». Иногда V60 или Hario в честь наиболее популярного производителя воронок.
      </div>

      <h2 class="section__subtitle anim-items anim-no-hide">Что нужно</h2>

      <div class="section__text anim-items anim-no-hide">
        — Воронка HARIO V60 (пластиковая, стеклянная, керамическая либо металлическая)<br>
        — Фильтр для воронки<br>
        — Кофемолка<br>
        — Помол для заваривания таким способом должен быть достаточно крупный, как белый сахар<br>
        — чайник<br>
        — Кружка или сервировочный чайник<br>
        — Вода 350-400 мл.
      </div>

      <h2 class="section__subtitle anim-items anim-no-hide">Как готовить</h2>

      <div class="section__text">
        <ol class="section__text-list">
          <li class="section__text-list-item anim-items anim-no-hide">
            Подогрейте воду до 90-94&nbsp;°C.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Взвесьте 15 грамм зерна и смолите в кофемолке.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Установите воронку на кружку или сервировочный чайник. Загните клеевой шов, не касаясь угла<br>фильтра,
            затем
            расправьте
            его и поместите в воронку. Обильно смочите весь фильтр горячей водой, чтобы прогреть посуду и убрать
            бумажный привкус.
            Дождитесь пока вода полностью прокапает в кружку, снимите воронку с фильтром и слейте воду.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Поставьте обратно воронку с мокрым фильтром на кружку и аккуратно засыпьте в нее отмеренный молотый кофе в
            центр
            воронки, стараясь сильно не просыпать по окружности и стенкам воронки.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Аккуратно пересыпьте кофе в<br>воронку. Встряхните воронку, чтобы кофе распределился равномерно, без
            горки.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Обнулите весы, включите таймер. Медленно, от центра к краям, наливайте первую часть воды — 50мл. Очень
            важно
            не вливать
            сразу весь объем воды, а делать это постепенно — тонкой струйкой, чтобы смочить весь кофе. Важно вливать
            одной струей,
            без прерываний. Ждем 20-40 секунд, прежде чем начать заливать вторую часть воды — 100 мл.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Кофе должен впитать воду, слегка увеличиться в объеме, но не успеть подсохнуть. Затем также аккуратно
            заливаем вторую
            часть воды — 100 мл. Ждем 7-10 секунд и вливаем третью часть воды — еще 100 мл. Третий раз вливаем
            спокойно,
            не
            интенсивно, тонкой струей по спирали от центра к краям и обратно.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Вода будет постепенно стекать около 3-4 мин. из воронки пока не стечет полностью (не менее трех минут на
            этот объем
            напитка +\- 10сек.) и Ваш кофе будет готов. Если кофе варится дольше — слишком
            мелкий помол,<br>если быстрее — слишком крупный.
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
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee-recipe.js?ver=1.7"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>