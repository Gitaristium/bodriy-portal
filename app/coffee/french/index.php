<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Кофе методом френч-пресс");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/french.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee-recipe.css?ver=1.7">
<script type="text/javascript">
  var search = '';

  if (window.location.search) {
    search = window.location.search;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {
    ym(83929834, 'hit', '/coffee/french' + search, {
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
        <source srcset="<?= SITE_DIR ?>assets/img/coffee/french.webp" type="image/webp">
        <img class="section__img section__img-french section__img-french--1" src="<?= SITE_DIR ?>assets/img/coffee/french.png">
      </picture>
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/coffee/french.webp" type="image/webp">
        <img class="section__img section__img-french section__img-french--2" src="<?= SITE_DIR ?>assets/img/coffee/french.png">
      </picture>

      <h1>
        <div class="section__title right">
          Кофе<br>методом
        </div>
        <div class="section__title left">
          френч-<br>пресс
        </div>
      </h1>

      <div class="section__text anim-items anim-no-hide">
        — это самый простой и популярный способ приготовления кофе дома.<br>За счёт длительного контакта с водой кофе
        получается крепким, а за счёт достаточно грубого фильтра —<br>плотным.
      </div>

      <h2 class="section__subtitle anim-items anim-no-hide">Помол</h2>

      <div class="section__text anim-items anim-no-hide">
        — Помол кофе для френч-пресса<br>должен быть грубым или средним.<br>
        Если зёрна смолоты в пыль, то в чашке останется взвесь из мельчайших<br>
        частиц.
      </div>
      <div class="section__text anim-items anim-no-hide">
        Огромное значение имеет равномерность помола. Лишь в том случае, если размер фракций будет примерно
        одинаковым,
        во вкусе
        и аромате напитка проявятся все присущие сорту нюансы.
      </div>

      <h2 class="section__subtitle anim-items anim-no-hide">Как готовить</h2>

      <div class="section__text">
        <ol class="section__text-list">
          <li class="section__text-list-item anim-items anim-no-hide">
            Перед завариванием кофе<br>необходимо ополоснуть колбу френч-пресса горячей водой температурой около
            +70&nbsp;°C.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Положить в колбу молотый кофе из расчёта 7-9 г. на 100 мл. воды. В одной чайной ложке без горки помещается
            примерно 3 г.
            измельчённых зёрен, с горкой — до 5 г.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Налить в колбу немного воды комнатной температуры (только чтобы смочить молотый кофе) и размешать.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Через 15–20 секунд долить в колбу горячей воды температурой от +85 до +92&nbsp;°C. Уровень воды не должен
            быть
            выше крепления
            верхнего края ручки. Ни в коем случае не заваривать кофе кипятком! Если сосуд стеклянный, то перед тем,
            как
            наливать
            горячую воду, опустить туда металлическую ложку: даже жаропрочное стекло не всегда выдерживает перепад
            температуры.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Налить в колбу немного воды комнатной температуры (только чтобы смочить молотый кофе) и размешать.
          </li>
          <li class="section__text-list-item anim-items anim-no-hide">
            Время заваривания — 4-7 минут. После 4-5 минут получается умеренно крепкий, ароматный кофе с ощутимой
            кислинкой. Если
            хочется получить более крепкий напиток – необходимо продлить заваривание на несколько минут. Но начиная с
            4-й минуты
            заваривания горечь кофе значительно усиливается, в нём повышается концентрация не только кофеина, но и
            вредных веществ.
          </li>
        </ol>
      </div>

      <div class="section__praise anim-items anim-no-hide">
        ВЫ ВЕЛИКОЛЕПНЫ:)<br>
        НАСЛАЖДАЙТЕСЬ ВКУСНЫМ КОФЕ
      </div>

      <h2 class="section__subtitle anim-items anim-no-hide">P.S.</h2>

      <div class="section__text anim-items anim-no-hide">
        После приготовления кофе френч-
        -пресс следует как можно скорее вымыть: в посудомоечной машине или под краном. Если времени на мытьё посуды
        нет,
        то
        нужно оставить колбу открытой: пусть кофейная гуща лучше засохнет, чем сосуд и фильтр приобретут затхлый
        запах,
        от
        которого сложно избавиться.
      </div>
      <div class="section__text anim-items anim-no-hide">
        Для придания напитку оригинальности в молотый кофе добавляют корицу, кардамон, имбирь, лимонную или
        апельсиновую
        цедру.
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