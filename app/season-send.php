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
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/season-2022-winter-send.css?ver=1.6">
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
  <div class="wrapper send__wrapper send__wrapper--menu">
    <svg class="send__wrapper-line" width="692" height="1373" viewBox="0 0 692 1373" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M109.5 -196.5C56.2271 -64 110.131 42.021 103.227 63.5C92.1896 97.8388 32.3393 167.5 -0.772896 214C-40.7729 231.5 -52.2901 627 -74.2729 742C-118.962 819.5 47.2271 1092.33 47.2271 1131C47.2271 1166.42 92.155 1164.03 117.227 1192C103.227 1221.16 152.541 1303.84 185.727 1353.01C206.007 1383.05 277.722 1279.13 321.727 1285C355.085 1289.45 296.284 1229.39 330.227 1228.14C354.231 1227.25 311.762 1271.05 293.727 1247.67C260.639 1204.78 395.24 1202.35 352.872 1228.14C328.452 1243 287.989 1312.54 306.831 1330.33C344.529 1365.94 440.734 1349.54 454.719 1297.9C456.115 1254 366.194 1270.44 352.872 1266C336.209 1260.45 343.837 1246.09 364.382 1260.5C380.069 1271.5 292.214 1335.9 352.872 1334.17C383.303 1333.3 409.17 1284.32 416.227 1260.5C419.419 1249.73 415.163 1201.1 421.227 1192C427.88 1182.02 446.697 1212.5 462.393 1228.14C495.227 1254.5 465.262 1279.11 462.393 1280.81C440.59 1293.69 412.669 1301.56 387.053 1302.78C367.004 1303.73 287.911 1353.01 318.69 1353.01C368.934 1353.01 384.412 1174.5 396.82 1270.5C396.82 1345.19 263.362 1317.3 240.727 1321.61C209.586 1327.55 280.727 1246.79 280.727 1276.27C280.727 1289.03 280.727 1345.01 288.227 1362C307.727 1372.5 387.053 1321.61 396.82 1340C396.82 1417.5 406.842 1317.12 421.227 1314.5C449.798 1309.31 459.992 1321.24 482.727 1330.33C504.736 1339.14 495.378 1345.5 520.727 1345.5C585.227 1330.33 658.227 1357 688.412 1321.61"
        stroke="black" stroke-width="6" stroke-linecap="round" />
    </svg>
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
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/season-2022-winter-send.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>