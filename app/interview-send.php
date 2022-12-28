<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо!");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if (CModule::IncludeModule("main")) {
  $arEventFields = array(
    "CITY" => $_POST["city"],
    "ADDRESS" => $_POST["address"],
    "QUEST1" => $_POST["rate-coffee"],
    "QUEST2" => $_POST["rate-service"],
    "QUEST3" => $_POST["rate-barista"],
    "QUEST4" => $_POST["rate-cafe"],
    "QUEST5" => $_POST["rate-time"],
    "CONTACTS" => $_POST["contacts"],
    "TEXT" => $_POST["comments"]
  );

  CEvent::Send("PORTAL__interview", SITE_ID, $arEventFields, "N", 8159);

  unset($_POST["CITY"]);
  unset($_POST["ADDRESS"]);
  unset($_POST["QUEST1"]);
  unset($_POST["QUEST2"]);
  unset($_POST["QUEST3"]);
  unset($_POST["QUEST4"]);
  unset($_POST["QUEST5"]);
  unset($_POST["CONTACTS"]);
  unset($_POST["TEXT"]);
}
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/send.css?ver=1.7">
<script type="text/javascript">
  var search = '';

  if (window.location.search) {
    search = window.location.search;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {

    ym(83929834, 'hit', '/interview-send' + search, {
      params: {}
    });

    window.history.replaceState(null, null, window.location.origin + '/');
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
  <div class="wrapper send__wrapper send__wrapper--interview">
    <section class="section send">
      <div class="section__inner">
        <div class="section__container">
          <div class="section__title send__title">Спасиб<span id="anim-letter">о</span>,<br>ты супер!
            <picture>
              <source srcset="<?= SITE_DIR ?>assets/img/interview/smile.webp" type="image/webp">
              <img id="anim-smile" src="<?= SITE_DIR ?>assets/img/interview/smile.png" alt="smile">
            </picture>
          </div>
          <div class="section__text send__text">благодарим за отзыв,<br>это поможет нам стать<br>ещё лучше</div>
          <div class="footer-note">
            <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/send.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>