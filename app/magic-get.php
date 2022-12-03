<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
//выборка элементов инфоблока, чтобы в возвращаемом результате находилось 5 случайных элементов
$result = CIBlockElement::GetList(
  array("RAND" => "ASC"),
  array("IBLOCK_ID" => 33, "ACTIVE" => "Y"),
  false,
  array("nTopCount" => 1)
)->Fetch()[DETAIL_TEXT];
echo json_encode($result);