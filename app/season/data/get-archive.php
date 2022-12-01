<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$result = CIBlockElement::GetList(
  array("CREATED" => "DESC"),
  array("IBLOCK_ID" => 32, "ACTIVE" => "N"),
  false,
  array()
);

while ($row = $result->Fetch()) {
  $arData[] = $row;
}
echo json_encode($arData);