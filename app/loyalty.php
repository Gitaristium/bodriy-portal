<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Система лояльности");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/loyalty/cards.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/loyalty.css?ver=1.6">
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
    <section class="section">
      <div class="section__inner">
        <div class="section__container">
          <div class="section__title">будь бодрее &mdash;<br>стань нашим<br>бодрым гостем!</div>
          <div class="section__text">Карта «Любимый гость» &mdash;<br>это твой пропуск в
            мир,<br>под
            названием «бодрость»!<br>Пей кофе, копи баллы,<br>меняй их снова на кофе,<br>и твоя бодрость никогда<br>не
            покинет тебя :)</div>
        </div>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/loyalty/cards.webp" type="image/webp">
          <img class="section__img" src="<?= SITE_DIR ?>assets/img/loyalty/cards.png" alt="cards">
        </picture>
        <div class="section__container">
          <div class="section__text--desc anim-items">Подробнее об условиях<br>участия в программе<br>лояльности
            тебе расскажет<br>наш бариста, только спроси!</div>
          <div class="section__title--big anim-items">переходи<br>на бодрую<br>сторону :)</div>
          <div class="footer-note anim-items">
            <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
          </div>
        </div>
      </div>
    </section>
    <a class="footer-btn result__btn" href="/interview.php"
      onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
      оставить отзыв
    </a>
  </div>
</body>

<script type=" text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/loyalty.js?ver=1.6"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>