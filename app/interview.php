<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый опрос");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/cup1.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/cup2.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/interview.css?ver=1.6">
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {
  window.history.replaceState(null, null, window.location.origin + '/' + window.location.search);
} else {
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
    <section class="section section-one">
      <div class="section__inner">
        <div class="section__container">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/interview/cup1.webp" type="image/webp">
            <img class="section-one__img section-one__img-1" src="<?= SITE_DIR ?>assets/img/interview/cup1.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/interview/cup2.webp" type="image/webp">
            <img class="section-one__img section-one__img-2" src="<?= SITE_DIR ?>assets/img/interview/cup2.png">
          </picture>
          <div class="section__title anim-items anim-no-hide">Привет!</div>
          <div class="section__text anim-items anim-no-hide">Мы хотим стать лучше,<br>ты можешь помочь<br>нам в этом:)
          </div>
          <div class="swipe anim-items">
            <span>свайпай вверх
              <picture>
                <source srcset="<?= SITE_DIR ?>assets/img/interview/arrow.webp" type="image/webp">
                <img class="swipe__arrow" src="<?= SITE_DIR ?>assets/img/interview/arrow.png">
              </picture>
            </span>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-two">
      <div class="section__inner">
        <div class="section__container">
          <form id="data-form" class="form">
            <div class="section__desc anim-items">
              <div class="section__text">подскажи,<br>в каком городе<br>ты сейчас находишься?</div>
              <input class="form__input" type="text" name="data-city" id="data-city" autocomplete="off" required>
            </div>
            <div class="section__desc anim-items">
              <div class="section__text">... и адрес кофейни,<br>пожалуйста:)</div>
              <input class="form__input" type="text" name="data-address" id="data-address" autocomplete="off" required>
            </div>
            <button class="btn btn--green" id="btn2step" type="button">всё верно</button>
          </form>
        </div>
      </div>
    </section>
    <form id="form" class="form" action="interview-send.php" method="POST"
      onsubmit="ym(83929834, 'reachGoal', 'sent_feedback'); return true;">
      <input type="hidden" name="city" id="city" required>
      <input type="hidden" name="address" id="address" required>
      <div class="modal" id="modal">
        <div class="section__container modal__container">
          <div class="modal__title section__text">
            оцени нашу работу,<br>ответив на несколько<br>вопросов
          </div>
          <div class="modal__desc">
            Возвращайся и оставляй отзывы бесконечное<br>количетсво раз. Хочешь поругать - поругай!<br>Хочешь
            похвалить - похвали :)
          </div>
          <div class="modal__rate rate">
            <div class="rate__block rate__coffee">
              <div class="rate__text">1. Как тебе наш кофе?</div>

              <input class="rate__input" type="radio" id="rate-coffee-1" name="rate-coffee" value="1" required>
              <label class="rate__label rate__label--1" for="rate-coffee-1">1</label>

              <input class="rate__input" type="radio" id="rate-coffee-2" name="rate-coffee" value="2">
              <label class="rate__label rate__label--2" for="rate-coffee-2">2</label>

              <input class="rate__input" type="radio" id="rate-coffee-3" name="rate-coffee" value="3">
              <label class="rate__label rate__label--3" for="rate-coffee-3">3</label>

              <input class="rate__input" type="radio" id="rate-coffee-4" name="rate-coffee" value="4">
              <label class="rate__label rate__label--4" for="rate-coffee-4">4</label>

              <input class="rate__input" type="radio" id="rate-coffee-5" name="rate-coffee" value="5">
              <label class="rate__label rate__label--5" for="rate-coffee-5">5</label>
            </div>
            <!-- .rate__coffee -->
            <div class="rate__block rate__service">
              <div class="rate__text">2. Как тебе наш сервис?</div>

              <input class="rate__input" type="radio" id="rate-service-1" name="rate-service" value="1" required>
              <label class="rate__label rate__label--1" for="rate-service-1">1</label>

              <input class="rate__input" type="radio" id="rate-service-2" name="rate-service" value="2">
              <label class="rate__label rate__label--2" for="rate-service-2">2</label>

              <input class="rate__input" type="radio" id="rate-service-3" name="rate-service" value="3">
              <label class="rate__label rate__label--3" for="rate-service-3">3</label>

              <input class="rate__input" type="radio" id="rate-service-4" name="rate-service" value="4">
              <label class="rate__label rate__label--4" for="rate-service-4">4</label>

              <input class="rate__input" type="radio" id="rate-service-5" name="rate-service" value="5">
              <label class="rate__label rate__label--5" for="rate-service-5">5</label>
            </div>
            <!-- .rate__service -->
            <div class="rate__block rate__barista">
              <div class="rate__text">3. Внешний вид бариста</div>

              <input class="rate__input" type="radio" id="rate-barista-1" name="rate-barista" value="1" required>
              <label class="rate__label rate__label--1" for="rate-barista-1">1</label>

              <input class="rate__input" type="radio" id="rate-barista-2" name="rate-barista" value="2">
              <label class="rate__label rate__label--2" for="rate-barista-2">2</label>

              <input class="rate__input" type="radio" id="rate-barista-3" name="rate-barista" value="3">
              <label class="rate__label rate__label--3" for="rate-barista-3">3</label>

              <input class="rate__input" type="radio" id="rate-barista-4" name="rate-barista" value="4">
              <label class="rate__label rate__label--4" for="rate-barista-4">4</label>

              <input class="rate__input" type="radio" id="rate-barista-5" name="rate-barista" value="5">
              <label class="rate__label rate__label--5" for="rate-barista-5">5</label>
            </div>
            <!-- .rate__barista -->
            <div class="rate__block rate__cafe">
              <div class="rate__text">4. Внешний вид кофейни</div>

              <input class="rate__input" type="radio" id="rate-cafe-1" name="rate-cafe" value="1" required>
              <label class="rate__label rate__label--1" for="rate-cafe-1">1</label>

              <input class="rate__input" type="radio" id="rate-cafe-2" name="rate-cafe" value="2">
              <label class="rate__label rate__label--2" for="rate-cafe-2">2</label>

              <input class="rate__input" type="radio" id="rate-cafe-3" name="rate-cafe" value="3">
              <label class="rate__label rate__label--3" for="rate-cafe-3">3</label>

              <input class="rate__input" type="radio" id="rate-cafe-4" name="rate-cafe" value="4">
              <label class="rate__label rate__label--4" for="rate-cafe-4">4</label>

              <input class="rate__input" type="radio" id="rate-cafe-5" name="rate-cafe" value="5">
              <label class="rate__label rate__label--5" for="rate-cafe-5">5</label>
            </div>
            <!-- .rate__cafe -->
            <div class="rate__block rate__time">
              <div class="rate__text">5. Время ожидания заказа</div>

              <input class="rate__input" type="radio" id="rate-time-1" name="rate-time" value="10" required>
              <label class="rate__label rate__label--1" for="rate-time-1">10 мин</label>

              <input class="rate__input" type="radio" id="rate-time-2" name="rate-time" value="8">
              <label class="rate__label rate__label--2" for="rate-time-2">8</label>

              <input class="rate__input" type="radio" id="rate-time-3" name="rate-time" value="6">
              <label class="rate__label rate__label--3" for="rate-time-3">6</label>

              <input class="rate__input" type="radio" id="rate-time-4" name="rate-time" value="4">
              <label class="rate__label rate__label--4" for="rate-time-4">4</label>

              <input class="rate__input" type="radio" id="rate-time-5" name="rate-time" value="2">
              <label class="rate__label rate__label--5" for="rate-time-5">2</label>
            </div>
            <!-- .rate__time -->
            <div class="rate__block rate__contacts">
              <div class="rate__text">Контактная информация</div>
              <input class="rate__input-text" type="text" autocomplete="off" name="contacts">
            </div>
            <!-- .rate__contacts -->
            <div class="rate__block rate__message">
              <div class="rate__text">Тут можно передать привет,<br>пожаловаться или написать что-то<br>приятное
                :)</div>
              <textarea class="rate__input-textarea" type="textarea" autocomplete="off" name="comments"></textarea>
            </div>
            <!-- .rate__message -->
            <div class="rate__btn">
              <button class="btn btn--green" id="btn-send" type="submit">отправить</button>
              <button class="btn btn--green-border" id="btn-close" type="button">назад</button>
            </div>
          </div>
          <!-- .rate -->
        </div>
        <!-- .modal__container -->
      </div>
      <!-- .modal -->
    </form>
  </div>
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/interview.js?ver=1.6"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>