<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо!");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if (CModule::IncludeModule("main")) {
  $arEventFields = array(
    "TEXT" => $_POST["feedback"]
  );

  CEvent::Send("PORTAL__season-menu", SITE_ID, $arEventFields, "N", 8155);

  unset($_POST["TEXT"]);
}
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/season-2022-spring/img/bg-modal.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/season-2022-spring/send.css">
</head>

<body>
  <div class="rotate-screen">
    <img class="rotate__img" src="<?= SITE_DIR ?>assets/img/rotate-screen.png" alt="rotate-screen">
    поверни телефон
  </div>
  <div class="wrapper send__wrapper send__wrapper--menu">
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

<!-- <script type="text/javascript" src="assets/js/jquery.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>archive/season-2022-spring/send.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>