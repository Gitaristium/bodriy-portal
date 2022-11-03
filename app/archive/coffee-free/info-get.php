<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$result = CIBlockElement::GetPropertyValues(30, array('ACTIVE' => 'Y'), true, array());

while ($row = $result->Fetch()) {
  if ($row[IBLOCK_ELEMENT_ID] == 2286) {
    $array = $row[72];  //2286 - строка массива
  } else {
    if ($row[IBLOCK_ELEMENT_ID] == 2287) {
      $player = $row[72]; //2287 - номер участника
    }
  }
}
echo json_encode(array('array' => $array, 'player' => $player));
