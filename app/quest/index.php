<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый тест");
?>
<script type="text/javascript" src="../assets/js/js.cookie.js"></script>
<script type="text/javascript">
  var
    search = window.location.search,
    hash = '';
  if (window.location.hash) {
    hash = "#" + window.location.hash;
  }
  location = "/quest.php" + search;
</script>
</head>

<body>
</body>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>