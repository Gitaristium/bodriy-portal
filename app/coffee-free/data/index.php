<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Статистика по акции с кофе");
?>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<link rel="stylesheet" href="../../assets/css/coffee-free-data.css?ver=1.7">

</head>

<body>
  <?
  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
  CModule::IncludeModule("iblock");

  //id нужного инфоблока
  $allPlayers = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 31, "ACTIVE" => "Y"), array(), false, array());
  $allPlayersNSK = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 31, "ACTIVE" => "Y", "PROPERTY_CITY" => array("Новосибирск", "Novosibirsk")), array(), false, array());
  $winPlayers = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 31, "ACTIVE" => "Y", "PROPERTY_WIN" => "win"), array(), false, array());
  $winPlayersNSK = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 31, "ACTIVE" => "Y", "PROPERTY_WIN" => "win", "PROPERTY_CITY" => array("Новосибирск", "Novosibirsk")), array(), false, array());
  $procentPlayers = round($winPlayers / $allPlayers * 100, 2);
  $procentPlayersNSK = round($winPlayersNSK / $allPlayersNSK * 100, 2);

  $listPlayers = CIBlockElement::GetList(array("CREATED" => "DESC"), array("IBLOCK_ID" => 31, "ACTIVE" => "Y"), false, false, array('IBLOCK_ID', "ID", "PROPERTY_CITY", "TIMESTAMP_X", "PROPERTY_WIN"));
  $listPlayersNSK = CIBlockElement::GetList(array("CREATED" => "DESC"), array("IBLOCK_ID" => 31, "ACTIVE" => "Y", "PROPERTY_CITY" => array("Новосибирск", "Novosibirsk")), false, false, array('IBLOCK_ID', "ID", "PROPERTY_CITY", "TIMESTAMP_X", "PROPERTY_WIN"));


  $now = new DateTime(); // текущее время на сервере
  $date = DateTime::createFromFormat("Y-m-d H:i", '2022-08-15 13:00'); // задаем дату в любом формате
  $interval = $now->diff($date); // получаем разницу в виде объекта DateInterval
  $playDays = $interval->d; // кол-во дней


  ?>

  <div class="line"></div>
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar__item one active">Сводка</div>
      <div class="sidebar__item two">Новосибирск</div>
    </div>

    <div class="container">
      <section class="section one active">

        <div class="head">
          <div class="head__item head__all active">
            всего участников:
            <span><?= $allPlayers ?></span>
          </div>
          <div class="head__item head__wins">
            всего победителей:
            <span><?= $winPlayers ?></span>
          </div>
          <div class="head__item head__procent">
            процент победителей:
            <span><?= $procentPlayers . "%" ?></span>
          </div>
        </div>

        <!-- <div class="head">
          <div class="head__item head__all active">
            среднее вол-во участников в день:
            <span><?= $allPlayers / $playDays ?></span>
          </div>
          <div class="head__item head__wins">
            среднее кол-во победителей в день:
            <span><?= $winPlayers / $playDays ?></span>
          </div>
          <div class="head__item head__procent">
            средний процент победителей в день:
            <span><?= $procentPlayers . "%" ?></span>
          </div>
        </div> -->

        <div class="description">
          <div class="description__item">Город</div>
          <div class="description__item">Время (НСК)</div>
          <div class="description__item">Результат</div>
        </div>

        <div class="content content">

          <?
          while ($ob = $listPlayers->GetNextElement()) {
            $arFields = $ob->GetFields();

            if ($arFields['PROPERTY_WIN_VALUE'] == 'win') {
              echo '<div class="content__item win"><div class="content__city">';
            } else {
              echo '<div class="content__item"><div class="content__city">';
            }
            print_r($arFields['PROPERTY_CITY_VALUE']);
            echo '</div><div class="content__time">';
            print_r($arFields['TIMESTAMP_X']);
            echo '</div><div class="content__win">';
            print_r($arFields['PROPERTY_WIN_VALUE']);
            echo '</div></div>';
          }
          ?>
        </div>

      </section>
      <section class="section two">

        <div class="head">
          <div class="head__item head__all active">
            всего участников:
            <span><?= $allPlayersNSK ?></span>
          </div>
          <div class="head__item head__wins">
            всего победителей:
            <span><?= $winPlayersNSK ?></span>
          </div>
          <div class="head__item head__procent">
            процент победителей:
            <span><?= $procentPlayersNSK . "%" ?></span>
          </div>
        </div>


        <div class="description">
          <div class="description__item">Город</div>
          <div class="description__item">Время (НСК)</div>
          <div class="description__item">Результат</div>
        </div>

        <div class="content content">

          <?
          while ($ob2 = $listPlayersNSK->GetNextElement()) {
            $arFields2 = $ob2->GetFields();

            if ($arFields2['PROPERTY_WIN_VALUE'] == 'win') {
              echo '<div class="content__item win"><div class="content__city">';
            } else {
              echo '<div class="content__item"><div class="content__city">';
            }
            print_r($arFields2['PROPERTY_CITY_VALUE']);
            echo '</div><div class="content__time">';
            print_r($arFields2['TIMESTAMP_X']);
            echo '</div><div class="content__win">';
            print_r($arFields2['PROPERTY_WIN_VALUE']);
            echo '</div></div>';
          }
          ?>
        </div>

      </section>
    </div>


  </div>


</body>

<!-- <script type="text/javascript" src="../../assets/js/anim.js"></script> -->
<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<!-- <script type="text/javascript" src="../../assets/js/touchswipe.js"></script> -->
<!-- <script type="text/javascript" src="../../assets/js/js.cookie.js"></script> -->
<script type="text/javascript" src="../../assets/js/coffee-free-data.js?ver=1.7"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>