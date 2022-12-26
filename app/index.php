<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый портал");
?>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {

  var hash = window.location.search,
    curentPage = Cookies.get('curentPage'),
    picture = Cookies.get('picture'),
    interview = Cookies.get('interview'),
    season = Cookies.get('season'),
    loyalty = Cookies.get('loyalty'),
    quest = Cookies.get('quest'),
    downloads = Cookies.get('downloads'),
    magic = Cookies.get('magic');

  if (hash.includes('utm_medium=qr')) {
    hash = true;
  } else {
    if (curentPage != null && curentPage != '' && curentPage != 'undefinded') {
      location = "/" + curentPage + ".php";
      // location = "/march8.php";
    } else {
      hash = true;
    }
  }

  //выборка страниц
  if (hash == true) {
    // location = "/march8.php";
    if (season != 'y') { //приоритет 1 - сезонка
      // alert('переходим на сезонку');
      // Cookies.set('curentPage', 'season', {
      //   path: ''
      // });
      // alert('curentPage: ' + curentPage);
      location = "/season.php";
    } else {
      if (magic != 'y') { //приоритет 2 - magic
        // alert('переходим на magic');
        location = "/magic.php";
      } else {
        if (interview != 'y') { //приоритет 3 - опросник
          // alert('переходим на опросник');
          location = "/interview.php";
        } else {

          // var randomPages = ["picture", "loyalty", "quest", "downloads"]; //засовывем остальные страницы в массив
          var randomPages = ["season", "magic", "interview"]; //засовывем остальные страницы в массив

          // console.log(randomPages);

          // alert('картинки и опросник просмотрены');
          // alert('выбираем случайную страницу');
          var rand = Math.floor(Math.random() * randomPages.length), //выбираем случанцю страницу
            randomPage = Cookies.get(randomPages[rand]); //выдергиваем по ней куки
          // alert('randomPage - ' + randomPages[rand] + ': ' + randomPage);

          var pageView = false;
          while (pageView == false) {
            if (randomPage != 'y') {
              // alert('переходим на:' + randomPages[rand]);
              location = "/" + randomPages[rand] + ".php";
              var pageView = true;
              break;
            } else {
              // alert('проверяем все ли страницы просмотрены');
              var res;
              res = randomPages.every(function(item, index, array) { //проверяем все ли страницы просмотрены
                randomPage = Cookies.get(item);
                if (randomPage == 'y') {
                  return true;
                }
                return false;
              });
              if (res == true) { //если да

                // alert('ВСЕ');
                // alert('очищаем куки');
                Cookies.set('interview', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('picture', 'n', {
                  expires: 7,
                  path: ''
                });
                Cookies.set('loyalty', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('quest', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('downloads', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('magic', 'n', {
                  expires: 7,
                  path: '/'
                });
                // alert('переходим на сезонку');
                location = "/season.php";
                break;
              } else {

                // alert('еще не все');

                rand = Math.floor(Math.random() * randomPages.length); //выбираем случайный объект
                randomPage = Cookies.get(randomPages[rand]); //получаем куки этого объекта

                // alert('выбрана новая страница: ' + randomPages[rand] + ': ' + randomPage);
              }
            }
          }
        }
      }
    }
  }
}
// console.log(document.cookie);
</script>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/qr-code.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/index.css">
</head>

<body>
  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
  </div>
  <section>
    <div class="block">
      <div class="block__desc">
        <div class="block__title">
          упс!
        </div>
        <div class="block__text">
          Портал работает<br>только на смартфоне.<br>Отсканируй этот<br> QR-код камерой<br>своего телефона :)
        </div>
      </div>
    </div>
    <div class="block">
      <img src="<?= SITE_DIR ?>assets/img/qr-code.png" alt="QR-код">
    </div>
  </section>
</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script> -->
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/index.js"></script> -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>