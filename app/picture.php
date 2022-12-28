<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрые картинки");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/picture.css?ver=1.7">
<script type="text/javascript">
  var search = '';

  if (window.location.search) {
    search = window.location.search;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {

    ym(83929834, 'hit', '/picture' + search, {
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
  <div class="wrapper">
    <section>
      <?php CModule::IncludeModule("iblock"); ?>
      <?php $items = CIBlockElement::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_ID" => 24),
        false,
        false,
        array('ID')
      );
      while ($item = $items->GetNext()) {
        $filesPhp[] = $item['ID'];
      }
      ?>

      <img id="img" src="#">
      <a class="footer-btn result__btn" href="/interview.php" onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
        оставить отзыв
      </a>
    </section>
  </div>
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>

<script type="text/javascript">
  var filesJS = <?php echo json_encode($filesPhp) ?>; //декодируем массив из PHP в JS
  // console.log(filesJS);
  var rand = Math.floor(Math.random() * filesJS.length); //выбираем случайный объект
  var pictureNum = Cookies.get('picture' + rand); //получаем куки этого объекта
  // console.log('выбрана картинка: ' + filesJS[rand]);

  var pictureView = false;
  while (pictureView == false) {


    if (pictureNum != 'y') { //если куки пустые

      // console.log('этой картинки еще не было');
      pictureView = filesJS[rand];
      $.ajax({
        type: "POST",
        url: "picture-load.php",
        cache: false,
        data: {
          'pictureJS': pictureView,
        },
        success: function(data) {
          // console.log('OK: ' + data); //здесь выводится полученный ответ
          $('#img').attr('src', data);
        },
        error: function(xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
          console.log(xhr.status); // пoкaжeм oтвeт сeрвeрa
          console.log(thrownError); // и тeкст oшибки
        }
      });



      // console.log('вот она: ' + pictureView);

      // filesJS.forEach(function(item, index) {
      //   pictureNum = Cookies.get('picture' + index);
      //   console.log('picture' + index + ': ' + pictureNum);
      // });

      Cookies.set('picture' + rand, 'y', { //запоминаем куки
        expires: 7,
        path: ''
      });

      break;

    } else {

      // console.log('эта картинка уже была, ищем другую');
      // console.log('проверяем все ли картинки просмотрены');

      var res;
      res = filesJS.every(function(item, index, array) { //проверям все ли картинки просмотрены
        pictureNum = Cookies.get('picture' + index);
        if (pictureNum == 'y') {
          return true;
        }
        return false;
      });
      if (res == true) { //если да

        // console.log('ВСЕ!');
        // console.log('очищаем куки');

        filesJS.forEach(function(item, index) { //то очищаем все куки
          Cookies.set('picture' + index, 'n', {
            expires: 7,
            path: ''
          });
        });
      } else {

        // console.log('еще не все');

        rand = Math.floor(Math.random() * filesJS.length); //выбираем случайный объект
        pictureNum = Cookies.get('picture' + rand); //получаем куки этого объекта

        // console.log('выбрана новая картинка: ' + filesJS[rand]);
      }
    }
  }
</script>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/picture.js?ver=1.7"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>